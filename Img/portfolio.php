<?php
// الاتصال بقاعدة البيانات
$conn = new mysqli("localhost", "root", "", "DigitalSolutions");
$conn->set_charset("utf8"); // 
if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}

// استعلام جلب المشاريع
$sql = "SELECT * FROM portfolio ORDER BY id DESC";
$result = $conn->query($sql);

// التحقق من نجاح تنفيذ الاستعلام
if (!$result) {
    die("خطأ في الاستعلام: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>معرض الأعمال</title>
    <style>
        body { font-family: 'Arial', sans-serif; direction: rtl; text-align: right; background: #eef1f5; margin: 0; padding: 0; }
        .navbar { background: #007bff; padding: 15px; text-align: center; }
        .navbar a { color: white; text-decoration: none; margin: 15px; font-size: 18px; font-weight: bold; transition: 0.3s; }
        .navbar a:hover { color: #ffdd57; }
        .container { max-width: 900px; margin: 40px auto; background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); }
        .project { padding: 20px; border-bottom: 2px solid #ddd; transition: 0.3s; }
        .project:hover { background: #f9f9f9; }
        .project img { width: 100%; max-width: 400px; border-radius: 5px; box-shadow: 0 4px 8px rgba(0,0,0,0.2); }
    </style>
</head>
<body>

<div class="navbar">
    <a href="index.php">الرئيسية</a>
    <a href="blog.php">المدونة</a>
    <a href="portfolio.php">معرض الأعمال</a>
</div>

<div class="container">
    <h1>🎨 أعمالنا السابقة</h1>

    <?php 
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) { 
    ?>
        <div class="project">
            <h2><?= htmlspecialchars($row['project_name']) ?></h2>
            <p><?= nl2br(htmlspecialchars($row['description'])) ?></p>
            <?php if (!empty($row['image_url'])) { ?>
                <img src="<?= htmlspecialchars($row['image_url']) ?>" alt="<?= htmlspecialchars($row['project_name']) ?>">
            <?php } ?>
        </div>
    <?php 
        } 
    } else {
        echo "<p>لم يتم العثور على مشاريع.</p>";
    }
    ?>

</div>

</body>
</html>

<?php
// إغلاق الاتصال بقاعدة البيانات
$conn->close();
?>