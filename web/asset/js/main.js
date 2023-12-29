// Slide
var kichThuoc = 1200;
var chuyen = 0;
var MAX = 4800;
MAX -= kichThuoc;
function next() {
    chuyenSlide = document.getElementsByClassName('chuyen-slide')[0];
    if(chuyen < MAX) chuyen += kichThuoc;
    else chuyen = 0;
    chuyenSlide.style.marginLeft = '-'+ chuyen +'px';
}
function back() {
    chuyenSlide = document.getElementsByClassName('chuyen-slide')[0];
    if(chuyen == 0) chuyen = MAX;
    else chuyen -= kichThuoc;
    chuyenSlide.style.marginLeft = '-'+ chuyen +'px';
}
setInterval(function() {
    next();
},3000);