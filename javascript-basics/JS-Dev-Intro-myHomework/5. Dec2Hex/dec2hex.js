function number() {
    var num = prompt("Enter a number", "Your number!");
    var hex = Number(num).toString(16).toUpperCase();
    if (num != null){
        return alert(hex);
    }
}

document.body.innerHTML = number();