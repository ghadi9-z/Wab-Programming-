<?php
$conn = new mysqli("localhost", "root", "", "DigitalSolutions");
$services = $conn->query("SELECT * FROM services");
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>خدماتنا</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .service-card {
            background: #f9f9f9;
            padding: 15px;
            margin: 10px 0;
            border-left: 5px solid #007bff;
            transition: 0.3s;
        }
        .service-card:hover {
            background: #e9ecef;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="text-center">خدماتنا</h2>
    <?php while ($row = $services->fetch_assoc()) { ?>
        <div class="service-card">
            <h3><?php echo $row['title']; ?></h3>
            <p><?php echo $row['description']; ?></p>
        </div>
    <?php } ?>
</div>

</body>
</html>