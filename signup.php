<!html>
<head>
    <meta charset="UTF-8">
    <title>Login System</title>
    <link rel="stylesheet" href="./style.css">
</head>
<?php
include_once 'header.php';
?>
<section class="main-container">
    <div class ="main-wrapper">
        <h2>Sign Up</h2>
        <form class="signup-form" method="post" action="includes/signup.inc.php">
            <input type="text" name="first" placeholder="First Name">
            <input type="text" name="last" placeholder="Last Name">
            <input type="text" name="email" placeholder="Email">
            <input type="text" name="uid" placeholder="User Name">
            <input type="password" name="pwd" placeholder="Password">
            <button type="submit" name ="submit">Sign up</button>
        </form>
    </div>
</section>

<?php
include_once 'footer.php';
?>
