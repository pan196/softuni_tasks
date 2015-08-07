function removeOddRows(){
    var counter = 1;
    var tRows = document.getElementsByTagName('tr');

    for(var i = 0; i < tRows.length; i++)
    {
        var element = tRows[i];
        if(counter % 2 === 1){
            element.parentNode.removeChild(element);
            counter--;
        }
        counter++
    }

}
