index = 0;
changeImg = function () {
    var imgs = ["./asset/img/ad/advance/thegian.jpg", "./asset/img/ad/advance/coduyen.jpg", "./asset/img/ad/advance/chuyentau.jpg","./asset/img/ad/advance/emla.jpg"];
    document.getElementById('changeImg').src = imgs[index];  
    index++;
    if(index==4){
        index = 0;
    }
}
setInterval(changeImg,2000);

