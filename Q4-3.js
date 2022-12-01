var s = prompt("enter number to reverse to change");

function reversedNum(num) {
return (parseFloat(num.toString().split('').reverse().join('')) * Math.sign(num)) 
}







document.getElementById("demo").innerHTML = reversedNum(s);
