<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taskez Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <script src="./script.js"></script>
    
</head>
<body>
    <div class="container">
      <div class="left-img">
        <img src="./img/Group.png" alt="TO DO Vector Icon">
      </div>
        <div class="wrapper">
          <div class="btn-log-sign">
            <button class="btn-act" onclick="loginSignup('logIn')">Log In</button>
            <button class="btn-nonact" onclick="loginSignup('signUp')">Sign up</button>
          </div>
          <div class="login-cont tabS" id="logIn">
          <div class="title">
            <hr>
            <span>To Continue</span><br>
            <p>We need your Name & Email</p>
          </div>
          <form action="validation.php" method="post">
          <!-- <div class="row">
              <input type="text" placeholder="Full Name" name="user" required>
            </div> -->
            <div class="row">
              <input type="email" placeholder="Email" name="email" required>
            </div>
            <div class="row">
              <input type="password" placeholder="Password" name="password" required>
              <i class="bi bi-eye-slash eye-icon" id="togglePassword"></i>
            </div>
            <div class="row button">
              <button type="submit">Log In</button>
            </div>
            <div class="check-box">
              <input type="checkbox" id="rememberme" name="remember" value="Remember Me">
              <label for="rememberme"> Remember Me</label>
            </div>
          </form>
        </div>
        <div class="signup-cont tabS" id="signUp" style="display:none">
          <div class="title">
            <hr>
            <span>Please register yourself</span>
          </div>
          <form action="registration.php" method="post">
            <div class="row">
              <input type="text" placeholder="Full Name" name="user" required>
            </div>
            <div class="row">
              <input type="email" placeholder="Email" name="email" required>
            </div>
            <div class="row">
              <input type="password" placeholder="Password" name="password" required>
              <i class="bi bi-eye-slash eye-icon" id="togglePassword"></i>
            </div>
            <div class="row button">
              <button type="submit">Sign up</button>
            </div>
            <div class="check-box">
              <input type="checkbox" id="rememberme" name="remember" value="Remember Me">
              <label for="rememberme"> Remember Me</label>
            </div>
          </form>
        </div>
        </div>
      </div>
      
</body>
</html>