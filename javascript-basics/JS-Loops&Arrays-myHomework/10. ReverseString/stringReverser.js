function reverseString(value){
    var revStr = "";

    for (var i = value.length; i >= 0; i--){
        revStr += value.charAt(i);
    }
    console.log(revStr);
}

reverseString('sample');
reverseString('softUni');
reverseString('java script');