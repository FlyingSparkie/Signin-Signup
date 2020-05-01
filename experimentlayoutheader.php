<!DOCTYPE HTML>

<html>

<head>
<meta charset="utf-8"
<meta name="description" content="description here for result generation">
<meta name=viewport content = "width=device-width, initial-scale=1">
<title>PhP signup tut</title>
<link rel="stylesheet" href="table_style.css" />
<table border="2" width="530" align="left" cellpadding="20">
    <tr>
        <td width="430" align="center">
        <button><a href="index.php">Home</a> </button>
        <button><a href="#">About</a></button>
        <button> <a href="#">Portfolio</a></button>
        <button><a href="#">Contact</a> </button>
    </td>
            <td width="630" colspan="2" align="center">
            <nav class="nav-header-main">
            <a class="header-logo" href ="index.php">
            <img src="img/cogs.png" alt="Cog logo" width="120">
            </a>
    </td>
    </tr>
        <!--<tr>
        <td width="230" align="center">
        <a href="index.php">Home</a>
        <a href="#">About</a>
        <a href="#">Portfolio</a>
        <a href="#">Contact</a>
        </td>
        <td width="200" align="center">contents</td>
    <!--</tr> -->
</table>
</head>

<body>
      <header>

<!--              <nav class="nav-header-main">
              <a class="header-logo" href ="index.php">
              <img src="img/cogs.png" alt="Cog logo" width="120">
              </a>-->
          <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="#">Portfolio</a></li>

          </ul>
          </nav>
          <div class="header-login">
            <form action="includes/login.inc.php" = method="post"></form>
                   <input type="text" name="mailuid" placeholder="username or mail"/>
                   <input type="password" name="pwd" placeholder="password"/>
                   <button type="submit" name="login-submit">Login</button>
                   <a href="signup.php">Signup</a>
            <form action="includes/logout.inc.php" = method="post"></form>
            <button type="submit" name="logout-submit">Log out</button>
          </div>
        <!--                                      <?php
                                          require date_default_timezone_get();
                                          echo date('l, F dS Y.');
                                      ?>
          -->

      </header>
</body>

</html>


