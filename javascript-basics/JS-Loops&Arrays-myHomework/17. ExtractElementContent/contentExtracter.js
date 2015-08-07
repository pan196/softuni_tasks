function extractContent(value){
    var theStr = "";
    for (var i = 0; i < value.length; i++){
        if (value.charAt(i) === '>'){
            for (var j = i + 1; j < value.length; j++) {
                if (value.charAt(j) !== '<') {
                    theStr += value.charAt(j);
                }
                else{
                    break;
                }
            }
        }
    }
    console.log(theStr);
}

extractContent("\<p>Hello</p><a href='http://w3c.org'>W3C</a>");