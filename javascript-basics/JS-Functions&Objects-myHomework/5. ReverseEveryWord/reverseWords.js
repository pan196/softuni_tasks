function reverseWordsInString(str){
    var arrStr = str.split(" ");
    var returnedStr = "";
    var reversing = "";
    for (var i = 0; i < arrStr.length; i++){
        reversing = arrStr[i].split("").reverse().join("");
        returnedStr += reversing + " ";
    }
    console.log(returnedStr);

}

reverseWordsInString("Hello, how are you.");
reverseWordsInString("Life is pretty good, isn’t it?");