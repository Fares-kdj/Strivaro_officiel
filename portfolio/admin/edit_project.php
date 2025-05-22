<?php
header('Content-Type: application/json');
include '../includes/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? '';
    $title = $_POST['title'] ?? '';
    $description = $_POST['description'] ?? '';
    $category = $_POST['category'] ?? '';
    $file = $_FILES['file'] ?? null;

    if (!$id || !$title || !$description || !$category) {
        echo json_encode(['success' => false, 'message' => 'Tous les champs obligatoires doivent être remplis.']);
        exit;
    }

    $sql = "SELECT image_url FROM projects WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);
    $project = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$project) {
        echo json_encode(['success' => false, 'message' => 'Projet non trouvé.']);
        exit;
    }

    $target_file = $project['image_url'];
    $file_type = null;

    if ($file && $file['size'] > 0) {
        $target_dir = "../Uploads/";
        $target_file = $target_dir . basename($file['name']);
        $file_type = mime_content_type($file['tmp_name']);
        $allowed_types = ['image/jpeg', 'image/png', 'image/gif', 'video/mp4', 'video/webm', 'video/mov'];

        if (!in_array($file_type, $allowed_types)) {
            echo json_encode(['success' => false, 'message' => 'Type de fichier non autorisé. Seules les images et vidéos sont acceptées.']);
            exit;
        }

        if (!move_uploaded_file($file['tmp_name'], $target_file)) {
            echo json_encode(['success' => false, 'message' => 'Erreur lors du téléchargement du fichier.']);
            exit;
        }
    }

    $sql = "UPDATE projects SET title = ?, description = ?, category = ?" . ($file_type ? ", image_url = ?, file_type = ?" : "") . " WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $params = [$title, $description, $category];
    if ($file_type) {
        $params[] = $target_file;
        $params[] = $file_type;
    }
    $params[] = $id;

    if ($stmt->execute($params)) {
        echo json_encode(['success' => true, 'message' => 'Projet modifié avec succès.']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Erreur lors de la modification du projet.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Méthode de requête invalide.']);
}
?>