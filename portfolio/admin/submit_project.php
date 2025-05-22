<?php
header('Content-Type: application/json');
include '../includes/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'] ?? '';
    $description = $_POST['description'] ?? '';
    $category = $_POST['category'] ?? '';
    $files = $_FILES['files'] ?? null;

    // Validate required fields
    if (!$title || !$description || !$category) {
        echo json_encode(['success' => false, 'message' => 'Tous les champs textuels sont requis.']);
        exit;
    }

    // Validate files (at least one file is required)
    if (!$files || empty($files['name'][0])) {
        echo json_encode(['success' => false, 'message' => 'Au moins un fichier est requis.']);
        exit;
    }

    // Validate file count (max 10)
    $file_count = count($files['name']);
    if ($file_count > 10) {
        echo json_encode(['success' => false, 'message' => 'Vous ne pouvez pas uploader plus de 10 fichiers.']);
        exit;
    }

    $target_dir = "../Uploads/";
    $allowed_types = ['image/jpeg', 'image/png', 'image/gif', 'video/mp4', 'video/webm', 'video/mov'];
    $image_urls = [];
    $primary_image_url = '';
    $primary_file_type = '';

    // Process each uploaded file
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
            // Set the first file as the primary image for backward compatibility
            $primary_image_url = $target_file;
            $primary_file_type = $file_type;
        }
    }

    // Insert into database
    $sql = "INSERT INTO projects (title, description, image_url, category, file_type, image_urls) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $image_urls_json = json_encode($image_urls);
    $stmt->execute([$title, $description, $primary_image_url, $category, $primary_file_type, $image_urls_json]);

    echo json_encode(['success' => true, 'message' => 'Projet ajouté avec succès.']);
} else {
    echo json_encode(['success' => false, 'message' => 'Méthode de requête invalide.']);
}
?>