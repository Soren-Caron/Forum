<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<table class = "table table-striped table-hover">
    <tr>
        <th>Title</th>
        <th>Year</th>
        <th>Genre</th>
        <th>Director</th>
    </tr>
    <?php
    $jsondata = file_get_contents("movies.json");
    $json = json_decode($jsondata,true);
    foreach($json['posts'] as $key => $value){
        echo "<tr>";
        echo "<td>"."<h4>".$value['title']."</h4>"."</td>";
        echo "<td>"."<h4>".$value['year']."</h4>"."</td>";
        echo "<td>"."<h4>".$value['genre']."</h4>"."</td>";
        echo "<td>"."<h4>".$value['director']."</h4>"."</td>";
        echo "</tr>";
    }
    ?>
</table>
</body>

