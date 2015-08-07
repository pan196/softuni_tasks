document.getElementById("textarea").style.width = "800px";
document.getElementById("textarea").style.height = "600px";

function mouseCoordinates(point){
    document.getElementById("textarea").innerHTML += 'X: ' + point.pageX + '; Y: ' + point.pageY + '; Time: ' + new Date() + '\n';
}
document.addEventListener('mouseover', mouseCoordinates, false);