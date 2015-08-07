function calcCircleArea(r) {
    return (Math.PI * (r * r));
}

document.getElementById("seven").innerHTML = "r = 7; area = " + calcCircleArea(7);
document.getElementById("onePointFive").innerHTML = "r = 7; area = " + calcCircleArea(1.5);
document.getElementById("twenty").innerHTML = "r = 7; area = " + calcCircleArea(20);

