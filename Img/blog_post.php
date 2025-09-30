<?php
$conn = new mysqli("localhost", "root", "", "DigitalSolutions");

if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // منع أي هجمات محتملة عن طريق تحويله إلى رقم صحيح
    $post = $conn->query("SELECT * FROM blog_posts WHERE id=$id")->fetch_assoc();

    if (!$post) {
        echo "المقال غير موجود.";
        exit();
    }
} else {
    echo "المقال غير موجود.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $post['title']; ?></title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            text-align: center;
        }
        .container {
            max-width: 800px;
            margin: 40px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: right;
        }
        h1 {
            color: #007bff;
        }
        .meta {
            color: #666;
            font-size: 14px;
            margin-bottom: 20px;
        }
        p {
            font-size: 18px;
            line-height: 1.6;
            color: #333;
            text-align: justify;
        }
        .btn-back {
            display: inline-block;
            background: #007bff;
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 5px;
            margin-top: 20px;
        }
        .btn-back:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <h1><?php echo $post['title']; ?></h1>
    <p class="meta"><em>بقلم: <?php echo $post['author']; ?> | تاريخ: <?php echo $post['created_at']; ?></em></p>
    <p><?php echo nl2br($post['content']); ?></p>

    <a href="blog.php" class="btn-back">العودة إلى المدونة</a>
</div>

</body>
</html>