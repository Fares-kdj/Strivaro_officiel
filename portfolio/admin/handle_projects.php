<?php
session_start();
header('Content-Type: application/json');
include '../includes/db.php';

// Check if user is logged in
if (!isset($_SESSION['logged_in'])) {
    echo json_encode(['success' => false, 'message' => 'Vous devez être connecté pour effectuer cette action']);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    $action = $_POST['action'];
    $response = ['success' => false, 'message' => ''];

    // Add Project
    if ($action === 'add_project') {
        $title = trim($_POST['title'] ?? '');
        $description = trim($_POST['description'] ?? '');
        $category = trim($_POST['category'] ?? '');
        $files = $_FILES['files'] ?? null;

        // Validate required fields
        if (empty($title) || empty($description) || empty($category)) {
            $response['message'] = 'Tous les champs textuels sont requis';
            echo json_encode($response);
            exit;
        }

        // Validate files (at least one file is required)
        if (!$files || empty($files['name'][0])) {
            $response['message'] = 'Au moins un fichier est requis';
            echo json_encode($response);
            exit;
        }

        // Validate file count (max 10)
        $file_count = count($files['name']);
        if ($file_count > 10) {
            $response['message'] = 'Vous ne pouvez pas uploader plus de 10 fichiers';
            echo json_encode($response);
            exit;
        }

        $target_dir = '../Uploads/';
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0755, true);
        }
        $allowed_types = ['image/jpeg', 'image/png', 'image/gif', 'video/mp4', 'video/webm', 'video/mov'];
        $max_size = 10 * 1024 * 1024; // 10MB
        $image_urls = [];
        $primary_image_url = '';
        $primary_file_type = '';

        // Process each uploaded file
        for ($i = 0; $i < $file_count; $i++) {
            if ($files['error'][$i] !== UPLOAD_ERR_OK) {
                $response['message'] = 'Erreur lors de l\'upload du fichier ' . $files['name'][$i];
                echo json_encode($response);
                exit;
            }

            $file_type = mime_content_type($files['tmp_name'][$i]);
            if (!in_array($file_type, $allowed_types)) {
                $response['message'] = 'Type de fichier non autorisé pour ' . $files['name'][$i];
                echo json_encode($response);
                exit;
            }

            if ($files['size'][$i] > $max_size) {
                $response['message'] = 'La taille du fichier dépasse la limite de 10 Mo pour ' . $files['name'][$i];
                echo json_encode($response);
                exit;
            }

            $target_file = $target_dir . uniqid() . '_' . basename($files['name'][$i]);
            if (!move_uploaded_file($files['tmp_name'][$i], $target_file)) {
                $response['message'] = 'Erreur lors de l\'upload du fichier ' . $files['name'][$i];
                echo json_encode($response);
                exit;
            }

            $image_urls[] = $target_file;
            if ($i === 0) {
                $primary_image_url = $target_file;
                $primary_file_type = $file_type;
            }
        }

        try {
            $sql = "INSERT INTO projects (title, description, image_url, category, file_type, image_urls) VALUES (:title, :description, :image_url, :category, :file_type, :image_urls)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([
                ':title' => $title,
                ':description' => $description,
                ':image_url' => $primary_image_url,
                ':category' => $category,
                ':file_type' => $primary_file_type,
                ':image_urls' => json_encode($image_urls)
            ]);
            $response['success'] = true;
            $response['message'] = 'Projet ajouté avec succès';
        } catch (PDOException $e) {
            $response['message'] = 'Erreur lors de l\'ajout du projet : ' . $e->getMessage();
        }
        echo json_encode($response);
        exit;
    }

    // Edit Project
    if ($action === 'edit_project') {
        $id = (int)($_POST['id'] ?? 0);
        $title = trim($_POST['title'] ?? '');
        $description = trim($_POST['description'] ?? '');
        $category = trim($_POST['category'] ?? '');
        $files = $_FILES['files'] ?? null;

        // Validate required fields
        if (empty($id) || empty($title) || empty($description) || empty($category)) {
            $response['message'] = 'Tous les champs textuels sont requis';
            echo json_encode($response);
            exit;
        }

        // Fetch existing project data
        try {
            $sql = "SELECT image_urls, image_url, file_type FROM projects WHERE id = :id";
            $stmt = $conn->prepare($sql);
            $stmt->execute([':id' => $id]);
            $project = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$project) {
                $response['message'] = 'Projet non trouvé';
                echo json_encode($response);
                exit;
            }

            $image_urls = json_decode($project['image_urls'], true) ?: [];
            $primary_image_url = $project['image_url'];
            $primary_file_type = $project['file_type'];

            // Process new files if uploaded
            if ($files && !empty($files['name'][0])) {
                $file_count = count($files['name']);
                if ($file_count > 10) {
                    $response['message'] = 'Vous ne pouvez pas uploader plus de 10 fichiers';
                    echo json_encode($response);
                    exit;
                }

                $target_dir = '../Uploads/';
                if (!is_dir($target_dir)) {
                    mkdir($target_dir, 0755, true);
                }
                $allowed_types = ['image/jpeg', 'image/png', 'image/gif', 'video/mp4', 'video/webm', 'video/mov'];
                $max_size = 10 * 1024 * 1024; // 10MB

                // Delete old files
                foreach ($image_urls as $url) {
                    if (file_exists($url)) {
                        unlink($url);
                    }
                }
                $image_urls = []; // Reset for new files

                for ($i = 0; $i < $file_count; $i++) {
                    if ($files['error'][$i] !== UPLOAD_ERR_OK) {
                        $response['message'] = 'Erreur lors de l\'upload du fichier ' . $files['name'][$i];
                        echo json_encode($response);
                        exit;
                    }

                    $file_type = mime_content_type($files['tmp_name'][$i]);
                    if (!in_array($file_type, $allowed_types)) {
                        $response['message'] = 'Type de fichier non autorisé pour ' . $files['name'][$i];
                        echo json_encode($response);
                        exit;
                    }

                    if ($files['size'][$i] > $max_size) {
                        $response['message'] = 'La taille du fichier dépasse la limite de 10 Mo pour ' . $files['name'][$i];
                        echo json_encode($response);
                        exit;
                    }

                    $target_file = $target_dir . uniqid() . '_' . basename($files['name'][$i]);
                    if (!move_uploaded_file($files['tmp_name'][$i], $target_file)) {
                        $response['message'] = 'Erreur lors de l\'upload du fichier ' . $files['name'][$i];
                        echo json_encode($response);
                        exit;
                    }

                    $image_urls[] = $target_file;
                    if ($i === 0) {
                        $primary_image_url = $target_file;
                        $primary_file_type = $file_type;
                    }
                }
            }

            // Update project
            $sql = "UPDATE projects SET title = :title, description = :description, category = :category, image_url = :image_url, file_type = :file_type, image_urls = :image_urls WHERE id = :id";
            $stmt = $conn->prepare($sql);
            $stmt->execute([
                ':id' => $id,
                ':title' => $title,
                ':description' => $description,
                ':category' => $category,
                ':image_url' => $primary_image_url,
                ':file_type' => $primary_file_type,
                ':image_urls' => json_encode($image_urls)
            ]);
            $response['success'] = true;
            $response['message'] = 'Projet modifié avec succès';
        } catch (PDOException $e) {
            $response['message'] = 'Erreur lors de la modification du projet : ' . $e->getMessage();
        }
        echo json_encode($response);
        exit;
    }

    // Delete Project
    if ($action === 'delete_project') {
        $id = (int)($_POST['id'] ?? 0);

        if (empty($id)) {
            $response['message'] = 'ID du projet requis';
            echo json_encode($response);
            exit;
        }

        try {
            $sql = "SELECT image_urls FROM projects WHERE id = :id";
            $stmt = $conn->prepare($sql);
            $stmt->execute([':id' => $id]);
            $project = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($project) {
                $image_urls = json_decode($project['image_urls'], true) ?: [];
                foreach ($image_urls as $url) {
                    if (file_exists($url)) {
                        unlink($url);
                    }
                }

                $sql = "DELETE FROM projects WHERE id = :id";
                $stmt = $conn->prepare($sql);
                $stmt->execute([':id' => $id]);
                $response['success'] = true;
                $response['message'] = 'Projet supprimé avec succès';
            } else {
                $response['message'] = 'Projet non trouvé';
            }
        } catch (PDOException $e) {
            $response['message'] = 'Erreur lors de la suppression du projet : ' . $e->getMessage();
        }
        echo json_encode($response);
        exit;
    }

    $response['message'] = 'Action non reconnue';
    echo json_encode($response);
    exit;
}

$response = ['success' => false, 'message' => 'Méthode non autorisée'];
echo json_encode($response);
?>