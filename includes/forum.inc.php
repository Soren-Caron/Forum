<?php
session_start();
include_once 'dbh.inc.php';

$uid = $_SESSION['username'];
$subject = $_POST['subject'];
$content = $_POST['content'];

$content = addslashes($content);
$sql = "INSERT INTO posts(uid, subject, content) VALUES ('$uid', '$subject', '$content');";
$dbServername="localhost";
$dbUsername = "root";
$dbPassword="";
$dbName="user_info";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
mysqli_query($conn, $sql);

header("Location: ../forum.php");