<!DOCTYPE html>
<html>
<head>
    <title>Modify String</title>
</head>
<body>
<div>
    <form action="" method="get">
        <input id="string" type="text" name="string" />
        <input type="radio" name="modify" value="isPalindrome" id="isPalindrome" /><label for="isPalindrome">Check Palindrome</label>
        <input type="radio" name="modify" value="reverse" id="reverse"/><label for="reverse">Reverse String</label>
        <input type="radio" name="modify" value="split" id="split"/><label for="split">Split</label>
        <input type="radio" name="modify" value="hash" id="hash"/><label for="hash">Hash String</label>
        <input type="radio" name="modify" value="shuffle" id="shuffle"/><label for="shuffle">Shuffle String</label>
        <input type="submit" value="Show result" />
    </form>
    <?php if(isset($_GET["string"]) && isset($_GET["modify"])): ?>
        <?php
        $string = $_GET["string"];
        $modify = $_GET["modify"];
        if($modify == "isPalindrome") {
            $reverse = strrev($string);
            if ($reverse == $string){
                echo $string . " is a palindrome";
            } else {
                echo $string . " is not a palindrome";
            }
        } elseif ($modify == "reverse"){
            $reverse = strrev($string);
            echo $reverse;
        } elseif ($modify == "split"){
            $splitArr = str_split($string);
            for ($i = 0; $i < sizeof($splitArr); $i++){
                if(ctype_alpha($splitArr[$i])){
                    echo $splitArr[$i] . " ";
                }
            }
        } elseif ($modify == "hash"){
            $hash = crypt($string);
            echo $hash;
        } else {
            $shuffle = str_shuffle($string);
            echo $shuffle;
        }

        ?>

    <?php endif ?>
</div>
</body>
</html>

<?php ?>