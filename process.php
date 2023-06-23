<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #fff;
            color: #FFFFFF;
        }
        .container {
            margin-top: 50px;
        }
        .result {
            background-color: #007566;
            padding: 20px;
            border-radius: 5px;
        }
        .error {
            background-color: #589A8D;
            padding: 20px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
<?php
// เชื่อมต่อกับฐานข้อมูล MySQL
$servername = "localhost";
$username = "root";   
$password = ""; 
$dbname = "pade";     

$conn = new mysqli($servername, $username, $password, $dbname);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("การเชื่อมต่อกับฐานข้อมูลล้มเหลว: " . $conn->connect_error);
}

// รับข้อมูลจากฟอร์ม
$target_analysis = $_POST['target_analysis'];
$strengths = $_POST['strengths'];
$weaknesses = $_POST['weaknesses'];
$opportunities = $_POST['opportunities'];
$threats = $_POST['threats'];
$tourist_attractions = $_POST['tourist_attractions'];
$economic_crops = $_POST['economic_crops'];
$resources = $_POST['resources'];
$community = $_POST['community'];
$reporter_name = $_POST['reporter_name'];
$report_date = $_POST['report_date'];

// เตรียมคำสั่ง SQL สำหรับการเพิ่มข้อมูลลงในตาราง reports
$sql = "INSERT INTO reports (target_analysis, strengths, weaknesses, opportunities, threats, tourist_attractions, economic_crops, resources, community, reporter_name, report_date) 
        VALUES ('$target_analysis', '$strengths', '$weaknesses', '$opportunities', '$threats', '$tourist_attractions', '$economic_crops', '$resources', '$community', '$reporter_name', '$report_date')";

if ($conn->query($sql) === TRUE) {
    echo '<div class="alert alert-success" role="alert">บันทึกข้อมูลเรียบร้อยแล้ว</div>';
    echo '<a href="index.php" class="btn btn-primary">กลับสู่หน้าหลัก</a>'; 
} else {
    echo '<div class="alert alert-danger" role="alert">การบันทึกข้อมูลล้มเหลว: ' . $conn->error . '</div>';
    echo '<a href="index.php" class="btn btn-primary">กลับสู่หน้าหลัก</a>'; 
}

$conn->close();
?>
</div>
</body>
</html>