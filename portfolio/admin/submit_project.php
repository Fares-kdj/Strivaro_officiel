<?php
header('Content-Type: application/json');
include '../includes/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'] ?? '';
    $description = $_POST['description'] ?? '';
    $category = $_POST['category'] ?? '';
    $file = $_FILES['file'] ?? null;

    if (!$title || !$description || !$category || !$file) {
        echo json_encode(['success' => false, 'message' => 'Tous les champs sont requis.']);
        exit;
    }

    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($file['name']);
    $file_type = mime_content_type($file['tmp_name']);
    $allowed_types = ['image/jpeg', 'image/png', 'image/gif', 'video/mp4', 'video/webm', 'video/mov'];

    if (!in_array($file_type, $allowed_types)) {
        echo json_encode(['success' => false, 'message' => 'Type de fichier non autorisé. Seules les images et vidéos sont acceptées.']);
        exit;
    }

    if (move_uploaded_file($file['tmp_name'], $target_file)) {
        $sql = "INSERT INTO projects (title, description, image_url, category, file_type) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$title, $description, $target_file, $category, $file_type]);
        echo json_encode(['success' => true, 'message' => 'Projet ajouté avec succès.']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Erreur lors de l\'upload du fichier.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Méthode de requête invalide.']);
}
?>