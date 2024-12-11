document.addEventListener('DOMContentLoaded', function() {

    function displayBluePurple() {
        let purpleBlueRadio = document.querySelectorAll("input[name='color']");
        console.log(purpleBlueRadio);
    
        if (purpleBlueRadio[0].checked) {
            document.getElementById('blue-div').style.display = "block";
            document.getElementById('purple-div').style.display = "none";
    
            let allImgs = document.querySelectorAll("#blue-div img");
    
            allImgs.forEach(function (item) {
                console.log(item);
                item.addEventListener('mouseover', function () {
                    console.log(item);
                    document.querySelector('#bigimg1').src = item.src;
                })
            })
    
    
    
        } else {
            document.getElementById('blue-div').style.display = "none";
            document.getElementById('purple-div').style.display = "block";
    
            let allImgs = document.querySelectorAll("#purple-div img");
    
            allImgs.forEach(function (item) {
                console.log(item);
                item.addEventListener('mouseover', function () {
                    console.log(item);
                    document.querySelector('#bigimg2').src = item.src;
                })
            })
        }
    
    }
}

)

