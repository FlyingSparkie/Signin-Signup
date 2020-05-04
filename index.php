<?php
        require "header.php";
?>

<main>
    <?php
if (isset($_SESSION['userId'])){
        echo '<p class="login-status" > You are logged IN</p>';
}
else {
        echo '<p class="login-status"> You are logged OUT</p>';
}
        ?>

</main>

<?php
        require "footer.php";
?>