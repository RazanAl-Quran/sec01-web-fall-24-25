let allImgs = document.querySelectorAll("img");

allImgs.forEach(function (item) {
    console.log(item);
    item.addEventListener('click',function(){
        console.log(item);
        document.querySelector('#bigimg').src = item.src;
    })
})