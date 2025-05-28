<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - EduTrack</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.0.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/stylelogindashboard.css">
</head>
<body>
  <form class="login-container" autocomplete="off">
    <div class="login-title">EduTrack Login</div>
    <div class="login-subtitle">Masuk ke dashboard guru</div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" id="email" placeholder="Alamat email" required>
    </div>
    <div class="form-group">
      <label for="password">Kata Sandi</label>
      <input type="password" id="password" placeholder="Kata sandi" required>
    </div>
    <button type="submit" class="login-btn">Masuk</button>
    <div class="login-footer">
      <a href="#">Lupa password?</a>
    </div>
  </form>
</body>
</html>
