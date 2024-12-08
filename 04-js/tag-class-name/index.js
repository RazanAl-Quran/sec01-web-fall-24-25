function changeBackground() {
    // let allPs = document.getElementsByTagName('p');
    // let allPs = document.getElementsByClassName('matrix');
    let allPs = document.querySelectorAll('.matrix');

    console.log(typeof allPs);
    
    console.log(allPs[0]);

    allPs[0].style.backgroundColor = 'aqua';
    allPs[1].style.backgroundColor = 'blue';
    allPs[2].style.backgroundColor = 'brown';
    

}

function reset() {
    let allPs = document.getElementsByClassName('matrix');

    allPs[0].style.backgroundColor = '';
    allPs[1].style.backgroundColor = '';
    allPs[2].style.backgroundColor = '';
}