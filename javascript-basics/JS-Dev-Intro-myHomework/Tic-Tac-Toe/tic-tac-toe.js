var player = 1;
function clickBtn(btn){
    if (player == 1){
        document.getElementById(btn).value = 'X';
        document.getElementById(btn).disabled = 'disabled';
        player -= 1;
        isWinner();
    }
    else{
        document.getElementById(btn).value = 'O';
        document.getElementById(btn).disabled = 'disabled';
        player += 1;
        isWinner();
    }
}
function isWinner(){
    if(
        document.getElementById("one").value == "X" &&
        document.getElementById("two").value == "X" &&
        document.getElementById("three").value == "X"
        ){
        document.getElementById("one").style.color = "green";
        document.getElementById("two").style.color = "green";
        document.getElementById("three").style.color = "green";
        disableAllFields();
        doReset();
    } else if (
        document.getElementById("four").value == "X" &&
        document.getElementById("five").value == "X" &&
        document.getElementById("six").value == "X"
        ){
        document.getElementById("four").style.color = "green";
        document.getElementById("five").style.color = "green";
        document.getElementById("six").style.color = "green";
        disableAllFields();
        doReset();
    } else if(
        document.getElementById("seven").value == "X" &&
        document.getElementById("eight").value == "X" &&
        document.getElementById("nine").value == "X"
        ){
        document.getElementById("seven").style.color = "green";
        document.getElementById("eight").style.color = "green";
        document.getElementById("nine").style.color = "green";
        disableAllFields();
        doReset();
    } else if(
        document.getElementById("one").value == "X" &&
        document.getElementById("four").value == "X" &&
        document.getElementById("seven").value == "X"
        ){
        document.getElementById("one").style.color = "green";
        document.getElementById("four").style.color = "green";
        document.getElementById("seven").style.color = "green";
        disableAllFields();
        doReset();
    } else if(
        document.getElementById("two").value == "X" &&
        document.getElementById("five").value == "X" &&
        document.getElementById("eight").value == "X"
        ){
        document.getElementById("two").style.color = "green";
        document.getElementById("five").style.color = "green";
        document.getElementById("eight").style.color = "green";
        disableAllFields();
        doReset();
    } else if (
        document.getElementById("three").value == "X" &&
        document.getElementById("six").value == "X" &&
        document.getElementById("nine").value == "X"
        ) {
        document.getElementById("three").style.color = "green";
        document.getElementById("six").style.color = "green";
        document.getElementById("nine").style.color = "green";
        disableAllFields();
        doReset();
    } else if(
        document.getElementById("one").value == "X" &&
        document.getElementById("five").value == "X" &&
        document.getElementById("nine").value == "X"
        ){
        document.getElementById("one").style.color = "green";
        document.getElementById("five").style.color = "green";
        document.getElementById("nine").style.color = "green";
        disableAllFields();
        doReset();
    } else if(
        document.getElementById("three").value == "X" &&
        document.getElementById("five").value == "X" &&
        document.getElementById("seven").value == "X"
    ){
        document.getElementById("three").style.color = "green";
        document.getElementById("five").style.color = "green";
        document.getElementById("seven").style.color = "green";
        disableAllFields();
        doReset();
    } else if(
        document.getElementById("one").value == "O" &&
        document.getElementById("two").value == "O" &&
        document.getElementById("three").value == "O"
        ){
        document.getElementById("one").style.color = "green";
        document.getElementById("two").style.color = "green";
        document.getElementById("three").style.color = "green";
        disableAllFields();
        doReset();
    } else if (
        document.getElementById("four").value == "O" &&
        document.getElementById("five").value == "O" &&
        document.getElementById("six").value == "O"
        ){
        document.getElementById("four").style.color = "green";
        document.getElementById("five").style.color = "green";
        document.getElementById("six").style.color = "green";
        disableAllFields();
        doReset();
    } else if(
        document.getElementById("seven").value == "O" &&
        document.getElementById("eight").value == "O" &&
        document.getElementById("nine").value == "O"
        ){
        document.getElementById("seven").style.color = "green";
        document.getElementById("eight").style.color = "green";
        document.getElementById("nine").style.color = "green";
        disableAllFields();
        doReset();
    } else if(
        document.getElementById("one").value == "O" &&
        document.getElementById("four").value == "O" &&
        document.getElementById("seven").value == "O"
        ){
        document.getElementById("one").style.color = "green";
        document.getElementById("four").style.color = "green";
        document.getElementById("seven").style.color = "green";
        disableAllFields();
        doReset();
    } else if(
        document.getElementById("two").value == "O" &&
        document.getElementById("five").value == "O" &&
        document.getElementById("eight").value == "O"
        ){
        document.getElementById("two").style.color = "green";
        document.getElementById("five").style.color = "green";
        document.getElementById("eight").style.color = "green";
        disableAllFields();
        doReset();
    } else if (
        document.getElementById("three").value == "O" &&
        document.getElementById("six").value == "O" &&
        document.getElementById("nine").value == "O"
        ) {
        document.getElementById("three").style.color = "green";
        document.getElementById("six").style.color = "green";
        document.getElementById("nine").style.color = "green";
        disableAllFields();
        doReset();
    } else if(
        document.getElementById("one").value == "O" &&
        document.getElementById("five").value == "O" &&
        document.getElementById("nine").value == "O"
        ){
        document.getElementById("one").style.color = "green";
        document.getElementById("five").style.color = "green";
        document.getElementById("nine").style.color = "green";
        disableAllFields();
        doReset();
    } else if(
        document.getElementById("three").value == "O" &&
        document.getElementById("five").value == "O" &&
        document.getElementById("seven").value == "O"
        ){
        document.getElementById("three").style.color = "green";
        document.getElementById("five").style.color = "green";
        document.getElementById("seven").style.color = "green";
        disableAllFields();
        doReset();
    }
}
function disableAllFields(){
    var f = document.getElementsByTagName('input');
    for(var i=0; i < f.length; i++){
        if(f[i].getAttribute('type')=='button'){
            f[i].setAttribute('disabled',true)
        }
    }
}
function defaultColor(){
    document.getElementById("one").style.color = "black";
    document.getElementById("two").style.color = "black";
    document.getElementById("three").style.color = "black";
    document.getElementById("four").style.color = "black";
    document.getElementById("five").style.color = "black";
    document.getElementById("six").style.color = "black";
    document.getElementById("seven").style.color = "black";
    document.getElementById("eight").style.color = "black";
    document.getElementById("nine").style.color = "black";
}
function reset(){
    document.getElementById("one").value = "";
    document.getElementById("two").value = "";
    document.getElementById("three").value = "";
    document.getElementById("four").value = "";
    document.getElementById("five").value = "";
    document.getElementById("six").value = "";
    document.getElementById("seven").value = "";
    document.getElementById("eight").value = "";
    document.getElementById("nine").value = "";
    document.getElementById("one").disabled = "";
    document.getElementById("two").disabled = "";
    document.getElementById("three").disabled = "";
    document.getElementById("four").disabled = "";
    document.getElementById("five").disabled = "";
    document.getElementById("six").disabled = "";
    document.getElementById("seven").disabled = "";
    document.getElementById("eight").disabled = "";
    document.getElementById("nine").disabled = "";
}
function doReset() {
    if (confirm("Do you want new game?") == true) {
        reset();
        player = 1;
        defaultColor();
    } else {
        alert("Thank you!");
    }
    document.getElementById("demo").innerHTML = x;
}