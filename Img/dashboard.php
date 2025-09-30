<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>حلول رقمية مبتكرة</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .navbar {
            background: #222;
            padding: 15px;
            text-align: center;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-size: 18px;
        }
        .hero {
            background: url('hero-bg.jpg') no-repeat center center/cover;
            color: white;
            text-align: center;
            padding: 100px 20px;
        }
        .hero h1 {
            font-size: 3rem;
        }
        .container {
            max-width: 1000px;
            margin: 20px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .service-box {
            background: #f9f9f9;
            padding: 20px;
            margin: 10px 0;
            border-left: 5px solid #007bff;
            transition: 0.3s;
            display: flex;
            align-items: center;
        }
        .service-box img {
            width: 60px;
            height: 60px;
            margin-right: 15px;
        }
        .service-box:hover {
            background: #e9ecef;
        }
        .footer {
            background: #222;
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: 20px;
        }
        .logo {
            width: 120px;
            vertical-align: middle;
        }
    </style>
</head>
<body>

<div class="navbar">
   
    <a href="dashboard.php">الرئيسية</a>
    <a href="services.html">خدماتنا</a>
    <a href="portfolio.php">معرض الأعمال</a>
    <a href="blogg.php">المدونة</a>
    <a href="contact.html">اتصل بنا</a>
</div>

<div class="hero">
    <h1>حلول رقمية مبتكرة لتطوير أعمالك!</h1>
    <p>نقدم لك أحدث الحلول التقنية لتطوير أعمالك بأفضل الأسعار</p>
</div>

<div class="container">
    <h2>خدماتنا</h2>
    <div class="service-box">
        <img src="s1.jpeg" alt="تطوير المواقع">
        <div>
            <h3>تطوير المواقع</h3>
            <p>تصميم مواقع احترافية تلبي احتياجات عملك.</p>
        </div>
    </div>
    <div class="service-box">
        <img src="s2.jpeg" alt="التسويق الرقمي">
        <div>
            <h3>التسويق الرقمي</h3>
            <p>استراتيجيات تسويق فعالة لزيادة العملاء.</p>
        </div>
    </div>
    <div class="service-box">
        <img src="s3.jpeg" alt="تحليل البيانات">
        <div>
            <h3>تحليل البيانات</h3>
            <p>استخدام الذكاء الاصطناعي لتحليل بيانات عملك.</p>
        </div>
    </div>
</div>

<div class="footer">
    <p> Digital Solutions..</p>
</div>

</body>
</html>