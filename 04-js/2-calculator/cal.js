function sum() {
    let n1 = parseInt(document.getElementById('number1').value);
    console.log(typeof n1);
    let n2 = parseInt(document.getElementById('number2').value);
    console.log(n2);
    let sumResult = n1+n2;
    console.log(sumResult);
    document.getElementById('result').value = sumResult;
    
    
}