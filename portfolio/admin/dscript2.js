document.querySelector(".jsFilter").addEventListener("click", function () {
  document.querySelector(".filter-menu").classList.toggle("active");
});

document.querySelector(".grid").addEventListener("click", function () {
  document.querySelector(".list").classList.remove("active");
  document.querySelector(".grid").classList.add("active");
  document.querySelector(".products-area-wrapper").classList.add("gridView");
  document.querySelector(".products-area-wrapper").classList.remove("tableView");
});

document.querySelector(".list").addEventListener("click", function () {
  document.querySelector(".list").classList.add("active");
  document.querySelector(".grid").classList.remove("active");
  document.querySelector(".products-area-wrapper").classList.remove("gridView");
  document.querySelector(".products-area-wrapper").classList.add("tableView");
});

var modeSwitch = document.querySelector('.mode-switch');
modeSwitch.addEventListener('click', function () {
  document.documentElement.classList.toggle('light');
  modeSwitch.classList.toggle('active');
});

// Fonction pour afficher les notifications
function showNotification(message, type) {
  console.log('showNotification called:', { message, type }); // Débogage
  const notification = document.getElementById("notification");
  if (!notification) {
    console.error('Notification element not found');
    return;
  }
  notification.textContent = message;
  notification.className = `notification ${type} show`;
  notification.style.display = 'block'; // Forcer l'affichage
  setTimeout(() => {
    notification.className = `notification ${type}`;
    notification.style.display = 'none'; // Cacher après la transition
  }, 3000);
}

// Gestion des modales
const modals = document.querySelectorAll(".modal");
const openModalButtons = document.querySelectorAll(".jsOpenModal");
const closeModalButtons = document.querySelectorAll(".modal-close");

openModalButtons.forEach(button => {
  button.addEventListener("click", function () {
    const modalId = this.getAttribute("data-modal");
    const modal = document.getElementById(modalId);
    modal.style.display = "block";

    if (modalId === "editProjectModal") {
      const id = this.getAttribute("data-id");
      const title = this.getAttribute("data-title");
      const description = this.getAttribute("data-description");
      const category = this.getAttribute("data-category");

      document.getElementById("edit-id").value = id;
      document.getElementById("edit-title").value = title;
      document.getElementById("edit-description").value = description;
      document.getElementById("edit-category").value = category;
    }
  });
});

closeModalButtons.forEach(button => {
  button.addEventListener("click", function () {
    const modal = this.closest(".modal");
    modal.style.display = "none";
    const form = modal.querySelector("form");
    if (form) {
      form.reset();
      const errorDiv = modal.querySelector(".error-message");
      if (errorDiv) errorDiv.style.display = "none";
    }
  });
});

window.addEventListener("click", function (event) {
  modals.forEach(modal => {
    if (event.target === modal) {
      modal.style.display = "none";
      const form = modal.querySelector("form");
      if (form) {
        form.reset();
        const errorDiv = modal.querySelector(".error-message");
        if (errorDiv) errorDiv.style.display = "none";
      }
    }
  });
});

// Gestion de la modale de suppression
const openDeleteModalButtons = document.querySelectorAll(".jsOpenDeleteModal");
openDeleteModalButtons.forEach(button => {
  button.addEventListener("click", function () {
    const modal = document.getElementById("deleteProjectModal");
    modal.style.display = "block";
    const confirmButton = document.getElementById("confirm-delete-btn");
    confirmButton.setAttribute("data-id", this.getAttribute("data-id"));
  });
});

document.getElementById("confirm-delete-btn").addEventListener("click", function () {
  const id = this.getAttribute("data-id");
  console.log('Deleting project with ID:', id); // Débogage
  fetch("delete_project.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/x-www-form-urlencoded",
    },
    body: `id=${id}`
  })
    .then(response => {
      console.log('Delete response:', response); // Débogage
      return response.json();
    })
    .then(data => {
      console.log('Delete data:', data); // Débogage
      const modal = document.getElementById("deleteProjectModal");
      modal.style.display = "none";
      if (data.success) {
        showNotification(data.message, "success");
        setTimeout(() => location.reload(), 3000); // Attendre 3s avant rechargement
      } else {
        showNotification(data.message, "error");
      }
    })
    .catch(error => {
      console.error('Delete error:', error); // Débogage
      showNotification("Une erreur s'est produite. Veuillez réessayer.", "error");
    });
});

document.querySelector(".action-button.cancel").addEventListener("click", function () {
  document.getElementById("deleteProjectModal").style.display = "none";
});

// Soumission du formulaire d'ajout
document.getElementById("add-project-form").addEventListener("submit", function (e) {
  e.preventDefault();
  console.log('Submitting add project form'); // Débogage
  const formData = new FormData(this);
  fetch("submit_project.php", {
    method: "POST",
    body: formData
  })
    .then(response => {
      console.log('Add response:', response); // Débogage
      return response.json();
    })
    .then(data => {
      console.log('Add data:', data); // Débogage
      const errorDiv = document.getElementById("modal-error-add");
      if (data.success) {
        errorDiv.style.display = "none";
        document.getElementById("addProjectModal").style.display = "none";
        this.reset();
        showNotification(data.message, "success");
        setTimeout(() => location.reload(), 3000); // Attendre 3s avant rechargement
      } else {
        errorDiv.textContent = data.message;
        errorDiv.style.display = "block";
      }
    })
    .catch(error => {
      console.error('Add error:', error); // Débogage
      const errorDiv = document.getElementById("modal-error-add");
      errorDiv.textContent = "Une erreur s'est produite. Veuillez réessayer.";
      errorDiv.style.display = "block";
    });
});

// Soumission du formulaire de modification
document.getElementById("edit-project-form").addEventListener("submit", function (e) {
  e.preventDefault();
  console.log('Submitting edit project form'); // Débogage
  const formData = new FormData(this);
  fetch("edit_project.php", {
    method: "POST",
    body: formData
  })
    .then(response => {
      console.log('Edit response:', response); // Débogage
      return response.json();
    })
    .then(data => {
      console.log('Edit data:', data); // Débogage
      const errorDiv = document.getElementById("modal-error-edit");
      if (data.success) {
        errorDiv.style.display = "none";
        document.getElementById("editProjectModal").style.display = "none";
        this.reset();
        showNotification(data.message, "success");
        setTimeout(() => location.reload(), 3000); // Attendre 3s avant rechargement
      } else {
        errorDiv.textContent = data.message;
        errorDiv.style.display = "block";
      }
    })
    .catch(error => {
      console.error('Edit error:', error); // Débogage
      const errorDiv = document.getElementById("modal-error-edit");
      errorDiv.textContent = "Une erreur s'est produite. Veuillez réessayer.";
      errorDiv.style.display = "block";
    });
});

// Fonctionnalité de filtrage
document.querySelector(".filter-button.apply").addEventListener("click", function () {
  const category = document.querySelector(".filter-menu select").value;
  const rows = document.querySelectorAll(".products-row");
  rows.forEach(row => {
    const rowCategory = row.querySelector(".product-cell.category").textContent.replace("Catégorie :", "").trim();
    if (category === "Toutes les catégories" || rowCategory === category) {
      row.style.display = "";
    } else {
      row.style.display = "none";
    }
  });
  document.querySelector(".filter-menu").classList.remove("active");
});

document.querySelector(".filter-button.reset").addEventListener("click", function () {
  document.querySelector(".filter-menu select").value = "Toutes les catégories";
  const rows = document.querySelectorAll(".products-row");
  rows.forEach(row => {
    row.style.display = "";
  });
  document.querySelector(".filter-menu").classList.remove("active");
});

// Fonctionnalité de recherche
document.querySelector(".search-bar").addEventListener("input", function (e) {
  const searchTerm = e.target.value.toLowerCase();
  const rows = document.querySelectorAll(".products-row");
  rows.forEach(row => {
    const title = row.querySelector(".product-cell.image span").textContent.toLowerCase();
    if (title.includes(searchTerm)) {
      row.style.display = "";
    } else {
      row.style.display = "none";
    }
  });
});
document.getElementById('add-project-form').addEventListener('submit', function (e) {
    const fileInput = document.getElementById('file');
    const files = fileInput.files;

    if (files.length > 10) {
        e.preventDefault();
        const errorDiv = document.getElementById('modal-error-add');
        errorDiv.textContent = 'Vous ne pouvez pas sélectionner plus de 10 fichiers.';
        errorDiv.style.display = 'block';
        return;
    }

    // Optional: Validate file types client-side
    const allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'video/mp4', 'video/webm', 'video/mov'];
    for (let i = 0; i < files.length; i++) {
        if (!allowedTypes.includes(files[i].type)) {
            e.preventDefault();
            const errorDiv = document.getElementById('modal-error-add');
            errorDiv.textContent = 'Type de fichier non autorisé pour ' + files[i].name + '.';
            errorDiv.style.display = 'block';
            return;
        }
    }
});

document.getElementById('edit-project-form').addEventListener('submit', function (e) {
    const fileInput = document.getElementById('edit-file');
    const files = fileInput.files;

    if (files.length > 10) {
        e.preventDefault();
        const errorDiv = document.getElementById('modal-error-edit');
        errorDiv.textContent = 'Vous ne pouvez pas sélectionner plus de 10 fichiers.';
        errorDiv.style.display = 'block';
        return;
    }

    // Optional: Validate file types client-side
    const allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'video/mp4', 'video/webm', 'video/mov'];
    for (let i = 0; i < files.length; i++) {
        if (!allowedTypes.includes(files[i].type)) {
            e.preventDefault();
            const errorDiv = document.getElementById('modal-error-edit');
            errorDiv.textContent = 'Type de fichier non autorisé pour ' + files[i].name + '.';
            errorDiv.style.display = 'block';
            return;
        }
    }
});