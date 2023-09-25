<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
    <title>Bài 1</title>
</head>
<?php
$serverName = "Tên máy chủ SQL"; // Thay thế bằng tên máy chủ SQL Server của bạn
$connectionOptions = array(
    "Database" => "BTTH01_CSE485", // Thay thế bằng tên cơ sở dữ liệu trong SQL Server
    "Uid" => "sa", // Thay thế bằng tên đăng nhập SQL Server
    "PWD" => "1234" // Thay thế bằng mật khẩu SQL Server
);

// Thiết lập kết nối
$conn = sqlsrv_connect($serverName, $connectionOptions);

if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}
?>
</body>
</html>