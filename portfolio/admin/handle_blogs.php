<?php
session_start();
include '../includes/db.php';

// Check if user is logged in
if (!isset($_SESSION['logged_in'])) {
    echo json_encode(['success' => false, 'message' => 'Vous devez être connecté pour effectuer cette action']);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    $action = $_POST['action'];
    $response = ['success' => false, 'message' => ''];

    // Add Blog
    if ($action === 'add_blog') {
        $title = trim($_POST['title'] ?? '');
        $content = trim($_POST['content'] ?? '');
        $writer = trim($_POST['writer'] ?? '');
        $category = trim($_POST['category'] ?? 'General');
        $created_at = $_POST['created_at'] ?? date('Y-m-d');
        $image_urls = [];
        $file_type = '';

        // Validate required fields
        if (empty($title) || empty($content) || empty($writer) || empty($category)) {
            $response['message'] = 'Tous les champs obligatoires doivent être remplis';
            echo json_encode($response);
            exit;
        }

        // Handle file uploads
        if (!empty($_FILES['files']['name'][0])) {
            $upload_dir = '../Uploads/';
            if (!is_dir($upload_dir)) {
                mkdir($upload_dir, 0755, true);
            }
            $allowed_types = ['image/jpeg', 'image/png', 'image/gif', 'video/mp4', 'video/webm', 'video/mov'];
            $max_files = 10;
            $max_size = 10 * 1024 * 1024; // 10MB

            for ($i = 0; $i < count($_FILES['files']['name']) && $i < $max_files; $i++) {
                if ($_FILES['files']['error'][$i] === UPLOAD_ERR_OK) {
                    if ($_FILES['files']['size'][$i] <= $max_size) {
                        $file_type = $_FILES['files']['type'][$i];
                        if (in_array($file_type, $allowed_types)) {
                            $file_name = uniqid() . '_' . basename($_FILES['files']['name'][$i]);
                            $file_path = $upload_dir . $file_name;
                            if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $file_path)) {
                                $image_urls[] = $file_path;
                            } else {
                                $response['message'] = 'Erreur lors du téléchargement du fichier';
                                echo json_encode($response);
                                exit;
                            }
                        } else {
                            $response['message'] = 'Type de fichier non autorisé';
                            echo json_encode($response);
                            exit;
                        }
                    } else {
                        $response['message'] = 'La taille du fichier dépasse la limite de 10 Mo';
                        echo json_encode($response);
                        exit;
                    }
                }
            }
        }

        try {
            $sql = "INSERT INTO blogs (title, content, writer, category, created_at, image_urls, file_type) VALUES (:title, :content, :writer, :category, :created_at, :image_urls, :file_type)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([
                ':title' => $title,
                ':content' => $content,
                ':writer' => $writer,
                ':category' => $category,
                ':created_at' => $created_at,
                ':image_urls' => json_encode($image_urls),
                ':file_type' => $file_type
            ]);
            $response['success'] = true;
            $response['message'] = 'Blog ajouté avec succès';
        } catch (PDOException $e) {
            $response['message'] = 'Erreur lors de l\'ajout du blog : ' . $e->getMessage();
        }
        echo json_encode($response);
        exit;
    }

    // Edit Blog
    if ($action === 'edit_blog') {
        $id = (int)($_POST['id'] ?? 0);
        $title = trim($_POST['title'] ?? '');
        $content = trim($_POST['content'] ?? '');
        $writer = trim($_POST['writer'] ?? '');
        $category = trim($_POST['category'] ?? 'General');
        $created_at = $_POST['created_at'] ?? date('Y-m-d');
        $image_urls = [];

        // Validate required fields
        if (empty($id) || empty($title) || empty($content) || empty($writer) || empty($category)) {
            $response['message'] = 'Tous les champs obligatoires doivent être remplis';
            echo json_encode($response);
            exit;
        }

        // Fetch existing blog data
        try {
            $sql = "SELECT image_urls, file_type FROM blogs WHERE id = :id";
            $stmt = $conn->prepare($sql);
            $stmt->execute([':id' => $id]);
            $blog = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$blog) {
                $response['message'] = 'Blog non trouvé';
                echo json_encode($response);
                exit;
            }

            $image_urls = json_decode($blog['image_urls'], true) ?? [];
            $file_type = $blog['file_type'];

            // Handle file uploads
            if (!empty($_FILES['files']['name'][0])) {
                $upload_dir = '../Uploads/';
                if (!is_dir($upload_dir)) {
                    mkdir($upload_dir, 0755, true);
                }
                $allowed_types = ['image/jpeg', 'image/png', 'image/gif', 'video/mp4', 'video/webm', 'video/mov'];
                $max_files = 10;
                $max_size = 10 * 1024 * 1024; // 10MB

                // Delete old files
                foreach ($image_urls as $url) {
                    if (file_exists($url)) {
                        unlink($url);
                    }
                }
                $image_urls = []; // Reset for new files

                for ($i = 0; $i < count($_FILES['files']['name']) && $i < $max_files; $i++) {
                    if ($_FILES['files']['error'][$i] === UPLOAD_ERR_OK) {
                        if ($_FILES['files']['size'][$i] <= $max_size) {
                            $file_type = $_FILES['files']['type'][$i];
                            if (in_array($file_type, $allowed_types)) {
                                $file_name = uniqid() . '_' . basename($_FILES['files']['name'][$i]);
                                $file_path = $upload_dir . $file_name;
                                if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $file_path)) {
                                    $image_urls[] = $file_path;
                                } else {
                                    $response['message'] = 'Erreur lors du téléchargement du fichier';
                                    echo json_encode($response);
                                    exit;
                                }
                            } else {
                                $response['message'] = 'Type de fichier non autorisé';
                                echo json_encode($response);
                                exit;
                            }
                        } else {
                            $response['message'] = 'La taille du fichier dépasse la limite de 10 Mo';
                            echo json_encode($response);
                            exit;
                        }
                    }
                }
            }

            // Update blog
            $sql = "UPDATE blogs SET title = :title, content = :content, writer = :writer, category = :category, created_at = :created_at, image_urls = :image_urls, file_type = :file_type WHERE id = :id";
            $stmt = $conn->prepare($sql);
            $stmt->execute([
                ':id' => $id,
                ':title' => $title,
                ':content' => $content,
                ':writer' => $writer,
                ':category' => $category,
                ':created_at' => $created_at,
                ':image_urls' => json_encode($image_urls),
                ':file_type' => $file_type
            ]);
            $response['success'] = true;
            $response['message'] = 'Blog modifié avec succès';
        } catch (PDOException $e) {
            $response['message'] = 'Erreur lors de la modification du blog : ' . $e->getMessage();
        }
        echo json_encode($response);
        exit;
    }

    // Delete Blog
    if ($action === 'delete_blog') {
        $id = (int)($_POST['id'] ?? 0);

        if (empty($id)) {
            $response['message'] = 'ID du blog requis';
            echo json_encode($response);
            exit;
        }

        try {
            $sql = "SELECT image_urls FROM blogs WHERE id = :id";
            $stmt = $conn->prepare($sql);
            $stmt->execute([':id' => $id]);
            $blog = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($blog) {
                $image_urls = json_decode($blog['image_urls'], true) ?? [];
                foreach ($image_urls as $url) {
                    if (file_exists($url)) {
                        unlink($url);
                    }
                }

                $sql = "DELETE FROM blogs WHERE id = :id";
                $stmt = $conn->prepare($sql);
                $stmt->execute([':id' => $id]);
                $response['success'] = true;
                $response['message'] = 'Blog supprimé avec succès';
            } else {
                $response['message'] = 'Blog non trouvé';
            }
        } catch (PDOException $e) {
            $response['message'] = 'Erreur lors de la suppression du blog : ' . $e->getMessage();
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