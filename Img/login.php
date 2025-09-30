<?php
session_start(); // بدء الجلسة


$conn = new mysqli("localhost", "root", "", "DigitalSolutions");

// التحقق من الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}

// عند إرسال النموذج
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // استعلام SQL للبحث عن المستخدم
    $sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("خطأ في SQL: " . $conn->error); // يظهر الخطأ إن وجد
    }

    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    // التحقق من وجود المستخدم
    if ($result->num_rows === 1) {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php"); // تحويل المستخدم للصفحة الرئيسية
        exit();
    } else {
        $error = "اسم المستخدم أو كلمة المرور غير صحيحة.";
    }

    $stmt->close();
}
$conn->close();
?>