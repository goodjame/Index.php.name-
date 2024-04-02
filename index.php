<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $name = $_GET['name'];
    $email = $_GET['email'];

    echo "<h2>Submitted Information:</h2>";
    echo "<p>Name: $name</p>";
    echo "<p>Email: $email</p>";
}
?>
