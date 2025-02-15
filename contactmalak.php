<?php  
require 'connection.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // جلب البيانات من النموذج
    $Name = $_POST['name'];
    $email = $_POST['email'];
    $massege = $_POST['message'];

    // استعلام SQL مع علامات الاستفهام (؟) كـ placeholders
    $sql = "INSERT INTO contactme (name, email, massege) VALUES (?, ?, ?)";

    // تحضير الاستعلام
    $stmt = $conn->prepare($sql);

    // ربط المعاملات مع الاستعلام
    $stmt->bind_param("sss", $Name, $email, $massege); // "sss" تعني أن جميع المتغيرات هي من نوع string

    // تنفيذ الاستعلام والتحقق من النجاح
    if ($stmt->execute()) {
        echo "تم تخزين البيانات بنجاح.";
    } else {
        echo "لم يتم تخزين البيانات بنجاح. " . $stmt->error;
    }

    // إغلاق الـ statement
    $stmt->close();
}

// إغلاق الاتصال بعد المعالجة
$conn->close();
?>
