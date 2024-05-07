<?php include('./conn/conn.php') ?>
<!DOCTYPE html>
<html>

<head>
  <title>MMCOE Alumni Login Page</title>
  <link rel="stylesheet" href="loginpage.css" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
  <header>
    <div class="container">
      <a href="/">
        <img src="/college_logo.png" align="left" height="80" width="220" /></a>
      <h1>User Login</h1>
    </div>
  </header>
  <section class="login" id="loginForm">
    <div class="container">
      <form action="./endpoint/login.php" method="post">
        <label for="email">Email:</label>
        <input type="email" placeholder="Enter your email" id="email" name="email" />
        <label for="password">Password:</label>
        <input type="password" placeholder="Enter your password" id="password" name="password" />

        <input type="checkbox" onclick="myFunction()" />Show Password
        <input type="submit" value="Login" />
      </form>
      <div class="register">
        <p>
          Not registered yet?
          <a href="https://docs.google.com/a/mmcoe.edu.in/forms/d/e/1FAIpQLSex739CWTM4_saPAdCKnlqOz-sLL1OFE4rLxJjS-IpC2pVxQw/viewform?embedded=true" target="_blank">Click here to register</a>
        </p>
      </div>
    </div>
    <script>
      function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
          x.type = "text";
        } else {
          x.type = "password";
        }
      }
    </script>
  </section>
</body>

</html>