function checkBrackets(value){
    var leftBracket = 0;
    var rightBracket = 0;


    for (var i = 0; i < value.length; i++){
        if (value.charAt(i) == "(") {
            leftBracket++;
        }
        if (value.charAt(i) == ")"){
            if(value.charAt(i - 1) == "" || value.charAt(i - 1) == "+" || value.charAt(i - 1) == "-"
                || value.charAt(i - 1) == "/" || value.charAt(i - 1) == "*"){
                return console.log("incorrect");
            }
            rightBracket++;
        }
    }
    if (rightBracket != leftBracket){
        console.log("incorrect");
    }
    else {
        console.log("correct");
    }
}

checkBrackets('( ( a + b ) / 5 – d )');
checkBrackets(') ( a + b ) )');
checkBrackets('( b * ( c + d *2 / ( 2 + ( 12 – c / ( a + 3 ) ) ) )')