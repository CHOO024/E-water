<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Unique Login & Register</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
 
  <div class="container">
    <div class="form-box">
      <div class="button-box">  
      </div>
      <div class="form-slider"></div>
      
      <!-- Login Form -->
      <form id="loginForm" class="form">
        <h2>Login</h2>
        <input type="email" placeholder="Email" required>
        <input type="password" placeholder="Password" required>
        <button type="submit" class="submit-btn">Login</button>
</form>

  <script>
    function showLogin() {
      document.getElementById('loginForm').classList.remove('hidden');
      document.getElementById('registerForm').classList.add('hidden');
      document.getElementById('loginToggle').classList.add('active');
      document.getElementById('registerToggle').classList.remove('active');
    }

  </script>
</body>
</html>
