<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    echo "<div class='alert'>";
    echo "<h2>Thank You!</h2>";
    echo "<p>Name: $name</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Subject: $subject</p>";
    echo "<p>Message: $message</p>";
    echo "</div>";
}
?>
