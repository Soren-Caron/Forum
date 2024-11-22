<html>
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./style.css">

</head>
</html>
<header>
    <?php
    include_once 'forum-header.php';
    echo "<br>";
    ?>
    <form method="post" action="includes/forum.inc.php" style="justify-content: center; display: flex; margin-bottom: 20px;">
        <input type="text" name="subject" placeholder="Subject">
        <input type="text" name="content" placeholder="Content">
        <button type="submit" name ="submit">Submit</button>
    </form>
    <div class="center-box">
    <?php

    $dbServername="localhost";
    $dbUsername = "root";
    $dbPassword="";
    $dbName="user_info";

    session_start();

    $conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

    $sql = "SELECT * FROM posts ORDER BY p_id DESC";

    $result = mysqli_query($conn,$sql);
    $resultcheck = mysqli_num_rows($result);

    if ($resultcheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {

          echo  "<div>".
                "<div class='card' style='width: 600px;'>".
                "<div class='subject'>"."<tr>"."<td>"."<h1 class=card-title, style='text-align: center'>" . $row["subject"] ."</h1>"."</td>"."</div>".
                "<td>"."<h4 style='text-align: center'>". $row["uid"] . " - ". $row["date"]."</h4>"."</td>".
                "<td>"."<h4>" . $row["content"] . "</h4>"."</td>"."</tr>"."<br>"
            ."</div>";
            echo "<br>";

        }
    }
    ?>
    </div>

</header>




