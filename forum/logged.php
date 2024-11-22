<html>
<head>
    <meta charset="UTF-8">
    <title>Login System</title>
    <link rel="stylesheet" href="style.css">

</head>
<?php
include_once 'logged-header.php';
?>
<img src="house.png" alt="house-img" style="position: absolute; left: 550px;  top: 300px; height: 400px; width: auto;">
<section class="main-container">
    <div class ="main-wrapper">

        <h2>You are logged in, welcome!</h2>
        <?php
        if(isset($_SESSION['u_id'])){
            echo $_SESSION['u_id'];
        }
        ?>
    </div>
</section>
<?php
include_once 'footer.php';


?>
