<!-- Trang chỉnh sửa thông tin bài hát -->
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
<h1>Chỉnh sửa thông tin bài hát</h1>
<form action="Chỉnh sửa.php" method="POST">
    <label for="song-name">Tên bài hát:</label>
    <input type="text" id="song-name" name="song-name" value="" required>
    <label for="song-artist">Nghệ sĩ:</label>
    <input type="text" id="song-artist" name="song-artist" value="" required>
    <label for="song-genre">Thể loại:</label>
    <select id="song-genre" name="song-genre" required>
        <!-- Lặp qua danh sách thể loại và hiển thị mỗi thể loại -->
        <option value="">Tự chọn</option>
    </select>
    <button type="submit">Lưu</button>
    <?php

    // Mảng để lưu trữ danh mục thể loại và danh sách bài hát
    $categories = [];
    $songs = [];

    // Hàm để sửa tên một thể loại trong danh mục thể loại
    function edit_category($old_category, $new_category)
    {
        global $categories;
        $index = array_search($old_category, $categories);
        if ($index !== false) {
            $categories[$index] = $new_category;
        }
    }

    // Hàm để sửa tên một bài hát trong danh sách bài hát
    function edit_song($old_song, $new_song)
    {
        global $songs;
        $index = array_search($old_song, $songs);
        if ($index !== false) {
            $songs[$index] = $new_song;
        }
    }
    ?>
</form>