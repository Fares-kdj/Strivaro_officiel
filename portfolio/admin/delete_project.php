<?php
header('Content-Type: application/json');
include '../includes/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? '';

    if (!$id) {
        echo json_encode(['success' => false, 'message' => 'ID du projet requis.']);
        exit;
    }

    $sql = "SELECT image_url FROM projects WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);
    $project = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($project && file_exists($project['image_url'])) {
        unlink($project['image_url']);
    }

    $sql = "DELETE FROM projects WHERE id = ?";
    $stmt = $conn->prepare($sql);
    if ($stmt->execute([$id])) {
        echo json_encode(['success' => true, 'message' => 'Projet supprimé avec succès.']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Erreur lors de la suppression du projet.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Méthode de requête invalide.']);
}
?>