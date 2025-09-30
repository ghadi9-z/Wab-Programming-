<?php
$conn = new mysqli("localhost", "root", "", "DigitalSolutions");

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO inquiries (name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "تم إرسال الرسالة بنجاح!";
} else {
    echo "خطأ: " . $conn->error;
}

$conn->close();
?>