<?php
  session_start();
?>
<html>
<head>
  <title>simple php site</title>
</head>
  <body>
    <form action=login.php method="POST">
      <input type="text" name="uid" placeholder="type your username"><br>
      <input type="password" name="pwd" placeholder="password here"><br>
      <button type="submit">LOGIN</button>
    </form>
  <?php
    if(isset( $_SESSION['id'])){
    echo $_SESSION['id'];
  } else {
    echo "you are not logged in";
  }
  ?>
    <br> <br> <br>

      <form action="signup.php" method="POST">
        <input type="text" name="first" placeholder="first name here"><br>
        <input type="text" name="last" placeholder="last name here"><br>
        <input type="text" name="uid" placeholder="type your username"><br>
        <input type="password" name="pwd" placeholder="password here"><br>
        <button type="submit">SIGN UP</button>
      </form>
<br><br><br>

      <form action="logout.php">
        <button>LOGOUT</button>
      </form>
  </body>
</html>
