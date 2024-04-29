<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Gongcha Café Login</title>
  <link rel="stylesheet" href="CSS/cafélogin.css">
  <script src="Java/scripts.js"></script>
</head>

<body>
    <div id="dadd">
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="assets/coffee.mp4" type="video/mp4">
      </video>    <!-- Put the login container on top of the video -->

  <div class="login-container" id="childd">
    <h2>Welcome to Our Café!</h2>
    <form action="/Cafe/authentication.php" method="post"class="login-form">
      <input type="text" placeholder="Username" required id="id" name="id">
      <input type="password" placeholder="Password" required id="pw" name="pw">
      <button type="submit">Login</button>
    </form>





  </div>
</div>
</body>
</html>
