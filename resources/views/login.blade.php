
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>EduTrack Login</title>
  <link rel="stylesheet" href="css/style.css" />
  <style>
    /* Tambahan khusus untuk halaman login */
    .login-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 80vh;
      background-color: #f8f9fa;
      padding: 20px;
    }
    .login-box {
      background: white;
      padding: 40px;
      border-radius: 8px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 400px;
    }
    .login-box h2 {
      margin-bottom: 20px;
      color: #333;
      font-weight: 600;
      font-size: 1.8rem;
      text-align: center;
    }
    .input-field {
      margin-bottom: 15px;
    }
    .input-field label {
      display: block;
      margin-bottom: 5px;
      font-weight: 500;
      color: #555;
    }
    .input-field input {
      width: 100%;
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
      font-size: 1rem;
    }
    .input-field input:focus {
      border-color: #4caf50;
      outline: none;
    }
    .login-btn {
      width: 100%;
      padding: 10px;
      background-color: #4caf50;
      color: white;
      border: none;
      border-radius: 5px;
      font-size: 1.2rem;
      cursor: pointer;
    }
    .login-btn:hover {
      background-color: #45a049;
    }
    .forgot-password {
      display: block;
      margin-top: 15px;
      text-align: right;
      font-size: 0.9rem;
    }
    .forgot-password a {
      color: #4caf50;
      text-decoration: none;
    }
    .forgot-password a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <nav class="navbar">
    <div class="container nav-container">
      <div class="logo">
        <i class="fas fa-graduation-cap"></i>
        EduTrack
      </div>
      <ul class="nav-links">
            <li><a href="/">Dashboard</a></li>
            <li><a href="/grades" >My Grades</a></li>
            <li><a href="/performance" >Performance</a></li>
            <li><a href="/report" >Report</a></li>
            <li><a href="/login" class="active">Logout</a></li>
        </ul>
  </nav>

  <div class="login-container">
    <div class="login-box">
      <h2>EduTrack Login</h2>
      <form action="#" method="POST">
        <div class="input-field">
          <label for="username">Username or Email</label>
          <input type="text" id="username" name="username" placeholder="Enter username or email" required />
        </div>
        <div class="input-field">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="Enter your password" required />
        </div>
        <button type="submit" class="login-btn">Login</button>
        <div class="forgot-password">
          <a href="#">Forgot Password?</a>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
