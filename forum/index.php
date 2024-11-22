<html>
<head>
    <meta charset="UTF-8">
    <title>Login System</title>
    <link rel="stylesheet" href="style.css">

</head>
<div class="top-part"></div>
<section id="ABC">
<?php
include_once 'header.php';
?>
<section class="main-container">
    <div class ="main-wrapper">
        <h2 class="title">Home Page</h2>
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
