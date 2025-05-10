<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ApareloSchoolDB";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$question = $_POST['question'];
$answer = $_POST['answer'];

$sql = "INSERT INTO answers (question, answer) VALUES ('$question', '$answer')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>