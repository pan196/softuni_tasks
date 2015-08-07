function countDivs(html){
    var count = 0;
    for (var i = 0; i < html.length; i++){
        if (html.charAt(i) === "<" && html.charAt(i + 1) === "d" && html.charAt(i + 2) === "i" && html.charAt(i + 3) === "v"){
            count++;
        }
    }
    console.log(count);
}

countDivs("<!DOCTYPE html>\n<html>\n  <head lang='en'\n    <meta charset='UTF-8'>\n    <title>index</title>\n    <script src='/yourScript.js' defer></script>\n  </head>\n  <body>\n    <div id='outerDiv'>\n      <div\n      class='first'>\n        <div><div>hello</div></div>\n      </div>\n      <div>hi<div></div></div>\n      <div>I am a div</div>\n    </div>\n  </body>\n</html>");
