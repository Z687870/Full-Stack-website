<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UFT-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full-Stack | With login registration </title>
    <link rel="stylesheet" href="style.css">
    <link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css' rel='stylesheet'>
</head>

<body>
  <header>
    <a href="#" class="logo">Logo</a>

    <nav>
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">participants</a>
        <a href="#">Contact</a>
    </nav>
   <div class="user-auth">
    <div class="profile-info" style="display: none;">
      <div class="avatar-circle">P</div>
      <div class="dropdown">
        <a href="#">My Account</a>
        <a href="#">Logout</a>
      </div>
    </div>
    <button type="button" class="login-btn">Login</button>
   </div>       

  </header>

  <section>
    <h1>Hey Mr Zithwana</h1>
  </section>

  <div class="alert-box" style="display: none;">
    <div class="alert success">
      <i class='bx  bxs-checks'  ></i> 
      <span>Successful Registered</span>
    </div>
  </div>

  <div class="auth-modal">
      <button type="button" class="close-btn"><i class='bx  bx-x'  ></i> </button>

    <div class="form-box login">
        <h2>Login</h2>
        <form action="auth_process.php" method="POST">
            <div class="input-box">
                <input type="email" name="email" placeholder="Email" required>
                <i class='bx  bxs-envelope'  ></i> 
            </div>
                <div class="input-box">
                <input type="password" name="password" placeholder="Password" required>
                 <i class='bx  bxs-lock-keyhole-open'  ></i> 
            </div>
              <button type="submit" name="login_btn" class="btn">Login</button>
              <p>Don't have an account? <a href="#" class="create-link">Register </a></p>
        </form>
    </div>
    
    <div class="form-box create">
        <h2>Register</h2>
        <form action="auth_process.php" method="POST">
            <div class="input-box">
                <input type="text" name="name" placeholder="Name" required>
              <i class='bx  bxs-user-circle'  ></i> 
            </div>
              <div class="input-box">
                <input type="email" name="email" placeholder="Email" required>
                <i class='bx  bxs-envelope'  ></i> 
            </div>
                <div class="input-box">
                <input type="password" name="password" placeholder="Password" required>
                 <i class='bx  bxs-lock-keyhole-open'  ></i> 
            </div>
              <button type="submit" name="create_btn" class="btn">Register</button>
              <p>Already have an account? <a href="#" class="login-link">Login</a></p>
        </form>
    </div>

  </div>

  <script src="script.js"></script>

</body>


</html>