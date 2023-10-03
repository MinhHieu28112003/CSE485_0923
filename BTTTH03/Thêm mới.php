<!DOCTYPE html>
<html>
<head>
    <title>Trang chủ</title>
    <link rel="stylesheet">
</head>
<style>
    /* styles.css */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }
    h1 {
        color: #333;
    }
    ul {
        list-style-type: none;
        padding: 0;
    }
    li {
        margin-bottom: 10px;
    }
    a {
        text-decoration: none;
        color: #007bff;
        margin-left: 10px;
    }
</style>
<body>
<h1>Danh sách bài hát</h1>
<ul>
    <!-- Lặp qua danh sách bài hát và hiển thị mỗi bài hát -->
    <!-- Liên kết để chỉnh sửa bài hát -->
    <li><a href="Chỉnh sửa.php">Chỉnh sửa</a></li>
    <!-- Liên kết để xóa bài hát -->
    <li><a href="Xóa.php">Xóa</a></li>
    <!-- Menu điều hướng -->
    <li><a href="Trang chính.php">Trang chủ</a></li>
    <li><a href="Thêm mới.php">Thêm mới bài hát</a></li>
</ul>
<ul>
    <?php
    // Kết nối đến CSDL
    $servername = "DESKTOP-HGO9CMN";
    $conn = mysqli_connect('localhost', 'sa', '1234', 'QuanLyBaiHat');

    // Kiểm tra kết nối
    if (!$conn) {
        die("Kết nối đến CSDL thất bại: " . mysqli_connect_error());
    }

    // Truy vấn danh sách bài hát
    $query = "SELECT * FROM songs";
    $result = mysqli_query($conn, $query);

    // Lặp qua các bài hát và hiển thị
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<li>' . $row['song_name'] . ' - ' . $row['artist'] . '</li>';
    }

    // Đóng kết nối
    mysqli_close($conn);

    // Mảng để lưu trữ danh mục thể loại và danh sách bài hát
    $categories = [];
    $songs = [];

    // Hàm để thêm một bài hát vào danh sách bài hát
    function add_song($song)
    {
        global $songs;
        $songs[] = $song;
    }

    // Hàm để thêm một thể loại vào danh mục thể loại
    function add_category($category)
    {
        global $categories;
        $categories[] = $category;
    }
    ?>
</ul>
</body>
</html>
