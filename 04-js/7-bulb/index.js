document.querySelector("#on").addEventListener('click', function () {
    console.log("you clicked me");
    document.querySelector("#myImage").src = "bulbon.gif";

});

document.querySelector("#off").addEventListener('click', function () {
    console.log("you clicked me");
    document.querySelector("#myImage").src = "bulboff.gif";

});