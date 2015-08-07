var counter = "0";

function btn(){
    if (counter % 2 == 0){
        document.getElementById("button").innerHTML = "Unlike";
    } else {
        document.getElementById("button").innerHTML = "Like";
    }
    counter++;
}