<?php
header('Content-Type: application/json');
include '../includes/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? '';
    $title = $_POST['title'] ?? '';
    $description = $_POST['description'] ?? '';
    $category = $_POST['category'] ?? '';
    $files = $_FILES['files'] ?? null;

    if (!$id || !$title || !$description || !$category) {
        echo json_encode(['success' => false, 'message' => 'Tous les champs textuels sont requis.']);
        exit;
    }

    // Fetch existing project data
    $sql = "SELECT image_urls, image_url, file_type FROM projects WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);
    $project = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$project) {
        echo json_encode(['success' => false, 'message' => 'Projet non trouvé.']);
        exit;
    }

    $image_urls = json_decode($project['image_urls'], true) ?: [];
    $primary_image_url = $project['image_url'];
    $primary_file_type = $project['file_type'];

    // Process new files if uploaded
    if ($files && !empty($files['name'][0])) {
        $file_count = count($files['name']);
        if ($file_count > 10) {
            echo json_encode(['success' => false, 'message' => 'Vous ne pouvez pas uploader plus de 10 fichiers.']);
            exit;
        }

        $target_dir = "../Uploads/";
        $allowed_types = ['image/jpeg', 'image/png', 'image/gif', 'video/mp4', 'video/webm', 'video/mov'];
        $image_urls = []; // Reset image_urls to replace existing ones

        for ($i = 0; $i < $file_count; $i++) {
            if ($files['error'][$i] !== UPLOAD_ERR_OK) {
                echo json_encode(['success' => false, 'message' => 'Erreur lors de l\'upload du fichier ' . $files['name'][$i] . '.']);
                exit;
            }

            $file_type = mime_content_type($files['tmp_name'][$i]);
            if (!in_array($file_type, $allowed_types)) {
                echo json_encode(['success' => false, 'message' => 'Type de fichier non autorisé pour ' . $files['name'][$i] . '.']);
                exit;
            }

            $target_file = $target_dir . uniqid() . '_' . basename($files['name'][$i]);
            if (!move_uploaded_file($files['tmp_name'][$i], $target_file)) {
                echo json_encode(['success' => false, 'message' => 'Erreur lors de l\'upload du fichier ' . $files['name'][$i] . '.']);
                exit;
            }

            $image_urls[] = $target_file;
            if ($i === 0) {
                $primary_image_url = $target_file;
                $primary_file_type = $file_type;
            }
        }
    }

    // Update the project
    $sql = "UPDATE projects SET title = ?, description = ?, category = ?, image_url = ?, file_type = ?, image_urls = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $image_urls_json = json_encode($image_urls);
    $stmt->execute([$title, $description, $category, $primary_image_url, $primary_file_type, $image_urls_json, $id]);

    echo json_encode(['success' => true, 'message' => 'Projet modifié avec succès.']);
} else {
    echo json_encode(['success' => false, 'message' => 'Méthode de requête invalide.']);
}
?>