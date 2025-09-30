<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>اتصل بنا</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .btn {
            background: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
        .btn:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>اتصل بنا</h2>
    <form action="submit_inquiry.php" method="POST">
        <label>الاسم:</label>
        <input type="text" name="name" required>
        
        <label>البريد الإلكتروني:</label>
        <input type="email" name="email" required>
        
        <label>الرسالة:</label>
        <textarea name="message" required></textarea>
        
        <input type="submit" class="btn" value="إرسال">
    </form>
</div>

</body>
</html>