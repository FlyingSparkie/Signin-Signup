<!DOCTYPE HTML>
<html>

<head>
  <meta charset="utf-8" <meta name="description" content="description here for result generation">
  <meta name=viewport content="width=device-width, initial-scale=1">
  <title>PhP signup tut</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <header>
    <nav class="navbarButton">Home | About | Contact | Portfolio</nav> 
    <!--    <nav class="nav-header-main">
      <a class="header-logo" href="index.php">
        <img src="img/cogs.png" alt="Cog logo" width="120">
      </a>  -->
  </header>
  <table border="2" width="430" align="center" cellpadding="20">
    <tr>
      <td width="630" colspan="2" align="center">
        <nav>
          <a href="index.php">Home</a>
          <a href="#">About</a>
          <a href="#">Contact</a>
          <a href="#">Portfolio</a>
        </nav>
      </td>
    </tr>
  </table>
  <div class="nav-head-main">
    <tr>
      <td width="630" align="center">
        <form action="includes/login.inc.php" method="post">
        <input type="text" name="mailuid" placeholder="username or mail" />
        <input type="password" name="pwd" placeholder="password" />
        <button type="submit" name="login-submit">Login</button>
        </form>
        <a href="signup.php">SIGNUP</a>
        <form action="includes/logout.inc.php" method="post">
        <button type="submit" name="logout-submit">Logout</button>
        </form>      <!--<button type="submit" name="logout-submit">Logout</button>-->
      </td>
    </tr>
  </div>
  <!-- </table> -->
</body>

</html>