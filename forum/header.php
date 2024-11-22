<html>
<head>
    <meta charset="UTF-8">
    <title>Login System</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<header>
    <nav>
        <div class = "main wrapper">
            <ul>
                <li style="color=white"><a href="index.php" style="margin-left: 10px; color=white;">Home</a></li>
            </ul>
            <div class = "nav-login">
                <?php
                if(isset($_SESSION['u_id'])){
                    echo '<form action="includes/logout.inc.php" method="POST">
                          <button type="submit" name="submit">Log out</button>
                          </form>';

                }

                ?>
                <form method="post" action="includes/login.inc.php?name=">
                    <input type="text" name="uid" placeholder="Username/email">
                    <input type="password" name="pwd" placeholder="Password">
                    <button type ="submit" name="submit" >Login</button>
                </form>
                <a href="signup.php" style="height: 0; width: auto; margin-right:10px; color=white;">Sign Up</a>
            </div>
        </div>
    </nav>
</header>
