<?php  
$servername = "localhost";
$username = "root"; // استبدل باسم المستخدم الخاص بك
$password = ""; // استبدل بكلمة المرور الخاصة بك
$dbname = "profile"; // استبدل باسم قاعدة البيانات الخاصة بك


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}?>
