<?php
    require "header.php";
?>
    <main>
        <!--<div class="signup">-->
            <!--<section class="section-default">  -->
            <h1>Signup</h1>
            <?php
                if(isset($_GET['error'])){
                    if($_GET['error']="emptyfields"){
                        echo "Fill all fields!!";
                    }
                    else if($_GET['error']="invaliduidmail"){
                        echo "Not a valid e-mail or username";
                    }
                    else if($_GET['error']="invaliduid"){
                        echo "Username not found";
                    }
                    else if($_GET['error']="invalidmail"){
                        echo "Not a valid Email";
                    }
                    else if($_GET['error']="passwordcheck"){
                        echo "Passwords aren't identical";
                    }
                    else if($_GET['error']="usertaken"){
                        echo "Username is not available!";
                    }
                } 
                else if ($_GET['signup']=="success"){
                    echo "Signup successful!!";
                }
                ?>

            <div class="navbar">
                <form action="/includes/signup.inc.php" method="POST">
                    <input type="text" name="uid" placeholder="Username">
                    <input type="text" name="mail" placeholder="Email">
                    <input type="password" name="pwd" placeholder="Password">
                    <input type="password" name="pwd-repeat" placeholder="repeat-Password">
                    <button type="submit" name="signup-submit">Signup</button>
                </form>
                <!-- </section> -->
            </div>
    </main>
    <?php
    require "footer.php";
?>