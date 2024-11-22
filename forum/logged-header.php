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
                <li><a href="index.php" style="margin-left: 10px; color: white;">Home</a></li>
                <li><a href="forum.php?name=hello" style="color: white;">&ensp; Forum</a></li>
            </ul>
            <div class = "nav-login">
                <?php
                if(isset($_SESSION['u_id'])){
                    echo '<form action="includes/logout.inc.php" method="POST">
                          <button type="submit" name="submit">Log out</button>
                          </form>';
                }
                ?>
                <form method="post" action="includes/logout.inc.php">
                    <button type ="submit" name="submit" >Log out</button>
                </form>
            </div>
        </div>
    </nav>
</header>

