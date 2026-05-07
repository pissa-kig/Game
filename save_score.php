<?php
$host = "localhost";
$user = "root"; // Your DB username
$pass = "";     // Your DB password
$db   = "your_database_name";

$conn = new mysqli($host, $user, $pass, $db);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $conn->real_escape_string($_POST['name']);
    $score = (int)$_POST['score'];

    $sql = "INSERT INTO highscores (name, score) VALUES ('$name', $score)";
    $conn->query($sql);
}
?>