<?php
    require "header.php";
?>
    <main>
        <!--<div class="signup">-->
            <!--<section class="section-default">  -->
            <h1>Signup</h1>
            <div class="navbar">
                <form action="includes/signup.inc.php" method="post">
                    <input type="text" name="uid" placeholder="Username">
                    <input type="text" name="mail" placeholder="Email">
                    <input type="password" name="pwd" placeholder="Password">
                    <input type="password-repeat" name="pwd-repeat" placeholder="repeat-Password">
                    <button name="signup-submit" type="submit">Acknowledge</button>
                </form>
                <!-- </section> -->
            </div>
    </main>
    <?php
    require "footer.php";
?>