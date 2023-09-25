function Button() {
        if (name == 0 && password == 0) {
            alert("Vui lòng nhập thông tin");
            }
        else if (name =! 0 && password == 0) {
            alert("Vui lòng nhập mật khẩu");
            }
        else if (name == 0 && password =! 0) {
            alert("Vui lòng nhập tên");
            }
        else {
            alert("Đăng nhập thành công");
        }
    }