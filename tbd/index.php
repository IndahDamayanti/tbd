<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <link rel="stylesheet" type="text/css" href="css/style2.css">
</head>
<body>
  <div class="container">
    <form id="loginForm" method="post">
      <h2>Login</h2>
      <div class="input-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="input-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="input-group">
        <button type="submit" id="loginButton">Login</button>
      </div>
    </form>
  </div>

  <script src="js/script.js"></script>
</body>
</html>
