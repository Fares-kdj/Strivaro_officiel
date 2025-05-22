<?php
session_start();
if (!isset($_SESSION['logged_in'])) {
    header('Location: login.php');
    exit;
}

include '../includes/db.php';
$sql = "SELECT * FROM projects";
$stmt = $conn->query($sql);
$projects = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord</title>
    <link rel="icon" href="../../src/images/logo/favicon.ico">
    <link rel="stylesheet" href="./dstyle4.css">
</head>
<body>
    <div class="app-container">
        <!-- Barre latérale -->
        <div class="sidebar">
            <div class="sidebar-header">
                 <div class="app-icon">
                    <div class="logo-image"></div>
                </div>
            </div>
            <ul class="sidebar-list">
                <li class="sidebar-list-item">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                        <span>Accueil</span>
                    </a>
                </li>
                <li class="sidebar-list-item active">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
                        <span>Projets</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Contenu principal -->
        <div class="app-content">
            <!-- Conteneur pour les notifications -->
            <div id="notification" class="notification" style="display: none;"></div>
            <div class="app-content-header">
                <h1 class="app-content-headerText">Projets</h1>
                <button class="mode-switch" title="Changer de thème">
                    <svg class="moon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
                    </svg>
                </button>
                <button class="app-content-headerButton jsOpenModal" data-modal="addProjectModal">Ajouter un projet</button>
            </div>
            <div class="app-content-actions">
                <input class="search-bar" placeholder="Rechercher..." type="text">
                <div class="app-content-actions-wrapper">
                    <div class="filter-button-wrapper">
                        <button class="action-button filter jsFilter"><span>Filtrer</span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-filter"><polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"/></svg></button>
                        <div class="filter-menu">
                            <label>Catégorie</label>
                            <select>
                                <option>Toutes les catégories</option>
                                <?php
                                $sql_categories = "SELECT DISTINCT category FROM projects";
                                $stmt_categories = $conn->query($sql_categories);
                                $categories = $stmt_categories->fetchAll(PDO::FETCH_COLUMN);
                                foreach ($categories as $category) {
                                    echo "<option>" . htmlspecialchars($category) . "</option>";
                                }
                                ?>
                            </select>
                            <div class="filter-menu-buttons">
                                <button class="filter-button reset">Réinitialiser</button>
                                <button class="filter-button apply">Appliquer</button>
                            </div>
                        </div>
                    </div>
                    <button class="action-button list active" title="Vue en liste">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list"><line x1="8" y1="6" x2="21" y2="6"/><line x1="8" y1="12" x2="21" y2="12"/><line x1="8" y1="18" x2="21" y2="18"/><line x1="3" y1="6" x2="3.01" y2="6"/><line x1="3" y1="12" x2="3.01" y2="12"/><line x1="3" y1="18" x2="3.01" y2="18"/></svg>
                    </button>
                    <button class="action-button grid" title="Vue en grille">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
                    </button>
                </div>
            </div>
            <div class="products-area-wrapper tableView">
                <div class="products-header">
                    <div class="product-cell image">Titre</div>
                    <div class="product-cell category">Catégorie</div>
                    <div class="product-cell description">Description</div>
                    <div class="product-cell actions">Actions</div>
                </div>
                <?php foreach ($projects as $project): ?>
                    <div class="products-row">
                        <button class="cell-more-button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"/><circle cx="12" cy="5" r="1"/><circle cx="12" cy="19" r="1"/></svg>
                        </button>
                      <div class="product-cell image">
    <?php
    // Decode the image_urls JSON field
    $image_urls = json_decode($project['image_urls'], true);
    if (is_array($image_urls) && !empty($image_urls)) {
        foreach ($image_urls as $index => $url) {
            if (in_array($project['file_type'], ['image/jpeg', 'image/png', 'image/gif'])) {
                echo '<img src="' . htmlspecialchars($url) . '" alt="projet-' . $index . '" style="max-width: 50px; margin-right: 5px;">';
            } elseif (in_array($project['file_type'], ['video/mp4', 'video/webm', 'video/mov'])) {
                echo '<video width="50" height="50" controls style="margin-right: 5px;">';
                echo '<source src="' . htmlspecialchars($url) . '" type="' . htmlspecialchars($project['file_type']) . '">';
                echo '</video>';
            }
        }
    } else {
        // Fallback to single image_url if image_urls is empty
        if (!empty($project['image_url']) && in_array($project['file_type'], ['image/jpeg', 'image/png', 'image/gif'])) {
            echo '<img src="' . htmlspecialchars($project['image_url']) . '" alt="projet" style="max-width: 50px;">';
        } elseif (!empty($project['image_url']) && in_array($project['file_type'], ['video/mp4', 'video/webm', 'video/mov'])) {
            echo '<video width="50" height="50" controls>';
            echo '<source src="' . htmlspecialchars($project['image_url']) . '" type="' . htmlspecialchars($project['file_type']) . '">';
            echo '</video>';
        }
    }
    ?>
    <span><?php echo htmlspecialchars($project['title']); ?></span>
</div>
                        <div class="product-cell category"><span class="cell-label">Catégorie :</span><?php echo htmlspecialchars($project['category']); ?></div>
                        <div class="product-cell description"><span class="cell-label">Description :</span><?php echo htmlspecialchars($project['description']); ?></div>
                        <div class="product-cell actions">
                            <span class="cell-label">Actions :</span>
                            <button class="action-button edit jsOpenModal" data-modal="editProjectModal" data-id="<?php echo $project['id']; ?>" data-title="<?php echo htmlspecialchars($project['title']); ?>" data-description="<?php echo htmlspecialchars($project['description']); ?>" data-category="<?php echo htmlspecialchars($project['category']); ?>">Modifier</button>
                            <button class="action-button delete jsOpenDeleteModal" data-id="<?php echo $project['id']; ?>">Supprimer</button>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <!-- Modale pour ajouter un projet -->
            <div class="modal" id="addProjectModal">
                <div class="modal-content">
                    <span class="modal-close">×</span>
                    <h2>Ajouter un projet</h2>
                    <div id="modal-error-add" class="error-message" style="display: none;"></div>
                    <form id="add-project-form" method="POST" enctype="multipart/form-data" class="add-project-form">
                        <div class="form-group">
                            <label for="title">Titre :</label>
                            <input type="text" id="title" name="title" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description :</label>
                            <textarea id="description" name="description" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="category">Catégorie :</label>
                            <select id="category" name="category" class="form-control" required>
                                <option value="Design-Graphique">Design Graphique</option>
                                <option value="Développement-Web">Développement Web</option>
                                <option value="Réalisation-de-Films">Réalisation de Films</option>
                                <option value="Montage-Vidéo">Montage Vidéo</option>
                            </select>
                        </div>
                        <div class="form-group">
    <label for="file">Images (jusqu'à 10 images ou vidéos) :</label>
    <input type="file" id="file" name="files[]" class="form-control" accept="image/*,video/*" multiple required>
    <small class="form-text">Vous pouvez sélectionner jusqu'à 10 fichiers (images ou vidéos).</small>
</div>
                        <button class="app-content-headerButton" type="submit">Ajouter</button>
                    </form>
                </div>
            </div>
            <!-- Modale pour modifier un projet -->
            <div class="modal" id="editProjectModal">
                <div class="modal-content">
                    <span class="modal-close">×</span>
                    <h2>Modifier un projet</h2>
                    <div id="modal-error-edit" class="error-message" style="display: none;"></div>
                    <form id="edit-project-form" method="POST" enctype="multipart/form-data" class="add-project-form">
                        <input type="hidden" id="edit-id" name="id">
                        <div class="form-group">
                            <label for="edit-title">Titre :</label>
                            <input type="text" id="edit-title" name="title" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-description">Description :</label>
                            <textarea id="edit-description" name="description" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="edit-category">Catégorie :</label>
                            <select id="edit-category" name="category" class="form-control" required>
                                <option value="Design-Graphique">Design Graphique</option>
                                <option value="Développement-Web">Développement Web</option>
                                <option value="Réalisation-de-Films">Réalisation de Films</option>
                                <option value="Montage-Vidéo">Montage Vidéo</option>
                            </select>
                        </div>
                        <div class="form-group">
    <label for="edit-file">Images (jusqu'à 10 images ou vidéos, facultatif) :</label>
    <input type="file" id="edit-file" name="files[]" class="form-control" accept="image/*,video/*" multiple>
    <small class="form-text">Vous pouvez sélectionner jusqu'à 10 fichiers (images ou vidéos). Les fichiers existants seront conservés sauf si remplacés.</small>
</div>
                        <button class="app-content-headerButton" type="submit">Modifier</button>
                    </form>
                </div>
            </div>
            <!-- Modale pour confirmer la suppression -->
            <div class="modal" id="deleteProjectModal">
                <div class="modal-content">
                    <span class="modal-close">×</span>
                    <h2>Confirmer la suppression</h2>
                    <p>Êtes-vous sûr de vouloir supprimer ce projet ? Cette action est irréversible.</p>
                    <div class="modal-buttons">
                        <button class="action-button cancel">Annuler</button>
                        <button class="action-button confirm-delete" id="confirm-delete-btn">Supprimer</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./dscript2.js"></script>
</body>
</html>