<?php
$conn = new mysqli("localhost", "root", "", "DigitalSolutions");
$conn->set_charset("utf8"); // 
if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}

$sql = "SELECT * FROM blog_posts ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>المدونة</title>
    <style>
        body { font-family: 'Arial', sans-serif; direction: rtl; text-align: right; background: #eef1f5; margin: 0; padding: 0; }
        .navbar { background: #007bff; padding: 15px; text-align: center; }
        .navbar a { color: white; text-decoration: none; margin: 15px; font-size: 18px; font-weight: bold; transition: 0.3s; }
        .navbar a:hover { color: #ffdd57; }
        .container { max-width: 900px; margin: 40px auto; background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); }
        .post { border-bottom: 2px solid #ddd; padding: 20px 0; transition: 0.3s; }
        .post:hover { background: #f9f9f9; }
        .post h2 { margin: 0; color: #007bff; }
        .post small { color: gray; }
    </style>
</head>
<body>

<div class="navbar">
    <a href="dashboard.php">الرئيسية</a>
    <a href="blogg.php">المدونة</a>
    <a href="portfolio.php">معرض الأعمال</a>
</div>

<div class="container">
    <h1>📝 مقالاتنا المميزة</h1>
    <?php while ($row = $result->fetch_assoc()) { ?>
        <div class="post">
            <h2><?= $row['title'] ?></h2>
            <p><?= $row['content'] ?></p>
            <small>✍ الكاتب: <?= $row['author'] ?> | 🕒 <?= $row['created_at'] ?></small>
        </div>
    <?php } ?>
</div>

</body>
</html>