<style>
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
<?php
// Kiểm tra xem có tham số id trong URL không
if (isset($_GET['id'])) {
    // Kết nối đến CSDL
    $servername = "DESKTOP-HGO9CMN";
    $conn = mysqli_connect('localhost', 'sa', '1234', 'QuanLyBaiHat');
    // Kiểm tra kết nối
    if (!$conn) {
        die("Kết nối đến CSDL thất bại: " . mysqli_connect_error());
    }
    // Lấy id từ URL
    $id = $_GET['id'];
    // Xóa bài hát từ CSDL
    $query = "DELETE FROM songs WHERE id = $id";
    $result = mysqli_query($conn, $query);
    // Kiểm tra xem xóa thành công hay không
    if ($result) {
        echo "Xóa bài hát thành công!";
    } else {
        echo "Xóa bài hát thất bại: " . mysqli_error($conn);
    }
    // Đóng kết nối
    mysqli_close($conn);
}

// Mảng để lưu trữ danh mục thể loại và danh sách bài hát
$categories = [];
$songs = [];

// Hàm để xóa một thể loại khỏi danh mục thể loại
function remove_category($category)
{
    global $categories;
    $index = array_search($category, $categories);
    if ($index !== false) {
        array_splice($categories, $index, 1);
    }
}

// Hàm để xóa một bài hát khỏi danh sách bài hát
function remove_song($song)
{
    global $songs;
    $index = array_search($song, $songs);
    if ($index !== false) {
        array_splice($songs, $index, 1);
    }
}
?>