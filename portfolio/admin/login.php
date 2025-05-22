<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $password = $_POST['password'];
    if ($password === 'strivaro123') {
        $_SESSION['logged_in'] = true;
        header('Location: dashboard.php');
        exit();
    } else {
        $error_message = "Incorrect password.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login</title>
  <link rel="stylesheet" href="./logins.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
  <!-- Mode switch -->
  <button id="theme-toggle" aria-label="Toggle dark mode" class="theme-toggle">
    <i class="fas fa-moon"></i>
  </button>

  <div class="login-container">
    <div class="logo"></div>

    <h2>Login</h2>
    <?php if (isset($error_message)) : ?>
      <p class="error-message"><?php echo $error_message; ?></p>
    <?php endif; ?>
    <form method="POST" class="login-form">
      <div class="form-group">
        <label for="password">Password:</label>
        <div class="password-toggle">
          <input type="password" id="password" name="password" required class="form-control">
          <i class="fas fa-eye" id="togglePassword"></i>
        </div>
      </div>
      <button class="smoothScroll btn btn-default btn-lg" type="submit">
        <span>Login</span>
      </button>
    </form>
  </div>

  <!-- JS: Toggle visibility -->
  <script>
    const togglePassword = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('password');

    togglePassword.addEventListener('click', function () {
      const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
      passwordInput.setAttribute('type', type);
      this.classList.toggle('fa-eye');
      this.classList.toggle('fa-eye-slash');
    });
  </script>

  <!-- JS: Theme toggle -->
  <script>
    const themeToggle = document.getElementById('theme-toggle');
    const userPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

    // Set theme based on localStorage or system preference
    if (localStorage.getItem('theme') === 'dark' || (!localStorage.getItem('theme') && userPrefersDark)) {
      document.body.classList.add('dark');
    }

    // Toggle theme on click
    themeToggle.addEventListener('click', () => {
      document.body.classList.toggle('dark');
      const isDark = document.body.classList.contains('dark');
      localStorage.setItem('theme', isDark ? 'dark' : 'light');
    });
  </script>
</body>
</html>
