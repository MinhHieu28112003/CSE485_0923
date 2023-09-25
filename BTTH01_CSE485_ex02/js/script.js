function moveImage1() {
    var image1 = document.getElementById("image1");
    var right = 0;
    var top = 0;
    var interval = setInterval(frame, 10);
    function frame() {
        if (right >= window.innerWidth) {
            clearInterval(interval);
        } else {
            right++;
            image1.style.right = right + "px";
        }
        if (top >= window.innerHeight) {
            clearInterval(interval);
        } else {
            top++;
            image1.style.top = top + "px";
        }
    }
}
setInterval(moveImage1, 10);