document.addEventListener('DOMContentLoaded', function () {
    // Section Toggle
    const sectionToggles = document.querySelectorAll('.section-toggle');
    const sections = document.querySelectorAll('.app-content-section');

    sectionToggles.forEach(toggle => {
        toggle.addEventListener('click', function (e) {
            e.preventDefault();
            const sectionId = this.parentElement.getAttribute('data-section');

            // Remove active class from all sidebar items
            document.querySelectorAll('.sidebar-list-item').forEach(item => {
                item.classList.remove('active');
            });

            // Add active class to clicked item
            this.parentElement.classList.add('active');

            // Hide all sections
            sections.forEach(section => {
                section.style.display = 'none';
                section.classList.remove('active');
            });

            // Show the selected section
            const targetSection = document.getElementById(sectionId);
            if (targetSection) {
                targetSection.style.display = 'block';
                targetSection.classList.add('active');
                // Save the active section to localStorage
                localStorage.setItem('activeSection', sectionId);
            }
        });
    });

    // Modal Handling for Projects and Blogs
    const modals = document.querySelectorAll('.jsOpenModal');
    modals.forEach(button => {
        button.addEventListener('click', function () {
            const modalId = this.getAttribute('data-modal');
            const modal = document.getElementById(modalId);
            if (modal) {
                modal.style.display = 'block';

                if (modalId === 'editProjectModal') {
                    document.getElementById('edit-id').value = this.getAttribute('data-id');
                    document.getElementById('edit-title').value = this.getAttribute('data-title');
                    document.getElementById('edit-description').value = this.getAttribute('data-description');
                    document.getElementById('edit-category').value = this.getAttribute('data-category');
                } else if (modalId === 'editBlogModal') {
                    document.getElementById('edit-blog-id').value = this.getAttribute('data-id');
                    document.getElementById('edit-blog-title').value = this.getAttribute('data-title');
                    document.getElementById('edit-blog-content').value = this.getAttribute('data-content');
                    document.getElementById('edit-blog-writer').value = this.getAttribute('data-writer');
                    document.getElementById('edit-blog-category').value = this.getAttribute('data-category');
                    document.getElementById('edit-blog-created_at').value = this.getAttribute('data-created_at');
                }
            }
        });
    });

    // Close Modals
    document.querySelectorAll('.modal-close').forEach(closeBtn => {
        closeBtn.addEventListener('click', function () {
            const modal = this.closest('.modal');
            if (modal) {
                modal.style.display = 'none';
            }
        });
    });

function showNotification(message, type) {
    return new Promise((resolve) => {
        const notification = document.getElementById('notification');
        if (!notification) {
            resolve();
            return;
        }
        notification.textContent = message;
        notification.className = `notification ${type}`;
        notification.style.display = 'block';
        notification.style.opacity = '1';

        setTimeout(() => {
            notification.style.opacity = '0'; // fade out
            setTimeout(() => {
                notification.style.display = 'none';
                notification.style.opacity = '1';
                resolve();  // Notif terminée, on continue
            }, 300);
        }, 3000);
    });
}


    // Add Project Form Submission
    document.getElementById('add-project-form').addEventListener('submit', function (e) {
        e.preventDefault();
        const formData = new FormData(this);
        formData.append('action', 'add_project');

        fetch('handle_projects.php', {
            method: 'POST',
            body: formData
        })
        .then(response => {
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            return response.json();
        })
        .then(data => {
            console.log('Add project response:', data); // Debugging
            if (data.success === true) {
                showNotification(data.message || 'Projet ajouté avec succès', 'success');
                setTimeout(() => location.reload(), 400);
            } else {
                showNotification(data.message || 'Erreur lors de l\'ajout du projet', 'error');
            }
        })
        .catch(error => {
            console.error('Add project fetch error:', error); // Debugging
            showNotification('Erreur réseau lors de l\'ajout du projet', 'error');
        });
    });

    // Edit Project Form Submission
    document.getElementById('edit-project-form').addEventListener('submit', function (e) {
        e.preventDefault();
        const formData = new FormData(this);
        formData.append('action', 'edit_project');

        fetch('handle_projects.php', {
            method: 'POST',
            body: formData
        })
        .then(response => {
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            return response.json();
        })
        .then(data => {
            console.log('Edit project response:', data); // Debugging
            if (data.success === true) {
                showNotification(data.message || 'Projet modifié avec succès', 'success');
                setTimeout(() => location.reload(), 400);
            } else {
                showNotification(data.message || 'Erreur lors de la modification du projet', 'error');
            }
        })
        .catch(error => {
            console.error('Edit project fetch error:', error); // Debugging
            showNotification('Erreur réseau lors de la modification du projet', 'error');
        });
    });

    // Add Blog Form Submission
    document.getElementById('add-blog-form').addEventListener('submit', function (e) {
        e.preventDefault();
        const formData = new FormData(this);
        formData.append('action', 'add_blog');

        fetch('handle_blogs.php', {
            method: 'POST',
            body: formData
        })
        .then(response => {
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            return response.json();
        })
        .then(data => {
            console.log('Add blog response:', data); // Debugging
            if (data.success === true) {
                showNotification(data.message || 'Blog ajouté avec succès', 'success');
                setTimeout(() => location.reload(), 400);
            } else {
                showNotification(data.message || 'Erreur lors de l\'ajout du blog', 'error');
            }
        })
        .catch(error => {
            console.error('Add blog fetch error:', error); // Debugging
            showNotification('Erreur réseau lors de l\'ajout du blog', 'error');
        });
    });

    // Edit Blog Form Submission
    document.getElementById('edit-blog-form').addEventListener('submit', function (e) {
        e.preventDefault();
        const formData = new FormData(this);
        formData.append('action', 'edit_blog');

        fetch('handle_blogs.php', {
            method: 'POST',
            body: formData
        })
        .then(response => {
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            return response.json();
        })
        .then(data => {
            console.log('Edit blog response:', data); // Debugging
            if (data.success === true) {
                showNotification(data.message || 'Blog modifié avec succès', 'success');
                setTimeout(() => location.reload(), 400);
            } else {
                showNotification(data.message || 'Erreur lors de la modification du blog', 'error');
            }
        })
        .catch(error => {
            console.error('Edit blog fetch error:', error); // Debugging
            showNotification('Erreur réseau lors de la modification du blog', 'error');
        });
    });

    // Delete Project or Blog
    document.querySelectorAll('.jsOpenDeleteModal').forEach(button => {
        button.addEventListener('click', function () {
            const modal = document.getElementById('deleteProjectModal');
            if (modal) {
                modal.style.display = 'block';
                const confirmBtn = document.getElementById('confirm-delete-btn');
                confirmBtn.setAttribute('data-id', this.getAttribute('data-id'));
                confirmBtn.setAttribute('data-type', this.getAttribute('data-type'));
            }
        });
    });

    // Confirm Deletion
    document.getElementById('confirm-delete-btn').addEventListener('click', function () {
        const id = this.getAttribute('data-id');
        const type = this.getAttribute('data-type');
        const url = type === 'blog' ? 'handle_blogs.php' : 'handle_projects.php';
        fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: `action=delete_${type}&id=${id}`
        })
        .then(response => {
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            return response.json();
        })
        .then(data => {
            console.log('Delete response:', data); // Debugging
            if (data.success === true) {
                showNotification(data.message || `${type === 'blog' ? 'Blog' : 'Projet'} supprimé avec succès`, 'success');
                setTimeout(() => location.reload(), 400);
            } else {
                showNotification(data.message || 'Erreur lors de la suppression', 'error');
            }
        })
        .catch(error => {
            console.error('Delete fetch error:', error); // Debugging
            showNotification('Erreur réseau lors de la suppression', 'error');
        });
    });

    // Filter Menu Toggle
    document.querySelectorAll('.jsFilter').forEach(button => {
        button.addEventListener('click', function () {
            const filterMenu = this.nextElementSibling;
            if (filterMenu) {
                filterMenu.classList.toggle('active');
            }
        });
    });

    // Search and Filter Functionality
    document.querySelectorAll('.app-content-section').forEach(section => {
        const searchBar = section.querySelector('.search-bar');
        const filterSelect = section.querySelector('.filter-menu select');
        const rows = section.querySelectorAll('.products-row');

        if (searchBar && filterSelect) {
            searchBar.addEventListener('input', () => filterRows());
            filterSelect.addEventListener('change', () => filterRows());
            section.querySelector('.filter-button.apply').addEventListener('click', () => filterRows());
            section.querySelector('.filter-button.reset').addEventListener('click', () => {
                searchBar.value = '';
                filterSelect.value = 'Toutes les catégories';
                filterRows();
            });

            function filterRows() {
                const searchTerm = searchBar.value.toLowerCase();
                const category = filterSelect.value;

                rows.forEach(row => {
                    const title = row.querySelector('.product-cell.image span').textContent.toLowerCase();
                    const rowCategory = row.querySelector('.product-cell.category').textContent.toLowerCase();

                    const matchesSearch = title.includes(searchTerm);
                    const matchesCategory = category === 'Toutes les catégories' || rowCategory.includes(category.toLowerCase());

                    row.style.display = matchesSearch && matchesCategory ? '' : 'none';
                });
            }
        }
    });

    // List/Grid View Toggle
    document.querySelectorAll('.app-content-section').forEach(section => {
        const listBtn = section.querySelector('.action-button.list');
        const gridBtn = section.querySelector('.action-button.grid');
        const wrapper = section.querySelector('.products-area-wrapper');

        if (listBtn && gridBtn && wrapper) {
            listBtn.addEventListener('click', () => {
                section.querySelectorAll('.action-button').forEach(btn => btn.classList.remove('active'));
                listBtn.classList.add('active');
                wrapper.classList.remove('gridView');
                wrapper.classList.add('tableView');
            });

            gridBtn.addEventListener('click', () => {
                section.querySelectorAll('.action-button').forEach(btn => btn.classList.remove('active'));
                gridBtn.classList.add('active');
                wrapper.classList.remove('tableView');
                wrapper.classList.add('gridView');
            });
        }
    });

    // Theme Switch for All Sections
    document.querySelectorAll('.mode-switch').forEach(button => {
        button.addEventListener('click', function () {
            document.documentElement.classList.toggle('light');
            this.classList.toggle('active');
        });
    });

    // Initialize section based on localStorage
    const savedSection = localStorage.getItem('activeSection');
    const defaultSectionId = savedSection || 'projects-section'; // Fallback to projects-section if no saved section
    const defaultSection = document.getElementById(defaultSectionId);
    if (defaultSection) {
        sections.forEach(section => {
            section.style.display = 'none';
            section.classList.remove('active');
        });
        defaultSection.style.display = 'block';
        defaultSection.classList.add('active');
        document.querySelectorAll('.sidebar-list-item').forEach(item => {
            item.classList.remove('active');
            if (item.getAttribute('data-section') === defaultSectionId) {
                item.classList.add('active');
            }
        });
    }
});