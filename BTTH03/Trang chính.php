<style>
    /* Thiết kế chung */
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
    /* Trang chính */
    #song-list {
        margin-top: 20px;
    }
    /* Menu điều hướng */
    #navigation {
        background-color: #f4f4f4;
        padding: 10px;
    }
    #navigation li {
        display: inline;
        margin-right: 10px;
    }
    /* Trang thêm mới bài hát và trang chỉnh sửa thông tin bài hát */
    form {
        margin-top: 20px;
    }
    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }
    input[type="text"] {
        width: 200px;
        padding: 5px;
    }
    button[type="submit"] {
        padding: 5px 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        cursor: pointer;
    }
</style>
<!-- Trang chính -->
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
<!-- Trang thêm mới bài hát -->
<h1>Thêm mới bài hát</h1>
<form action="Thêm mới.php" method="POST">
    <label for="song-name">Tên bài hát:</label>
    <input type="text" id="song-name" name="song-name" required>
    <button type="submit">Thêm</button>
</form>
<!-- Trang chỉnh sửa thông tin bài hát -->
<h1>Chỉnh sửa thông tin bài hát</h1>
<form action="Chỉnh sửa.php" method="POST">
    <label for="song-name">Tên bài hát:</label>
    <input type="text" id="song-name" name="song-name" value="" required>
    <button type="submit">Lưu</button>
</form>
<ul>
    <?php
    // Kết nối đến CSDL
    $servername = "DESKTOP-HGO9CMN";
    $conn = mysqli_connect('localhost', 'sa', '1234', 'QuanLyBaiHat','1433');

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

    // Hàm để lấy danh sách bài hát
    function get_song_list()
    {
        global $songs;
        return $songs;
    }

    // Hàm để lấy danh sách thể loại
    function get_category_list()
    {
        global $categories;
        return $categories;
    }
    ?>
</ul>
