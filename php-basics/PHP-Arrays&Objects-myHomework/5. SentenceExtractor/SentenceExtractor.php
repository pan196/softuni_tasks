<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sentence Extractor</title>
</head>
<body>
<form action="" method="get">
    <textarea name="text">This is my cat! And this is my dog. We happily live in Paris – the most beautiful city in the world! Isn’t it great? Well it is :)
    </textarea>
    <br/>

    <label for="word">Word: </label>
    <input type="text" id="word" name="word" />
    <br/>

    <input type="submit" value="Filter"/>
    <br/>
    <?php
    if(isset($_GET["text"]) && isset($_GET["word"])){
        $text = $_GET["text"];
        $word = $_GET["word"];
        $sentences = preg_split('/(?<=[.?!])\s+(?=[a-z])/i', $text);

        for ($i = 0; $i < count($sentences); $i++) {
            $lastChar = strlen($sentences[$i]) - 1;
            $isWord = preg_match('/\b' . $word . '\b/', $sentences[$i]);

            if ($sentences[$i][$lastChar] == "."
                || $sentences[$i][$lastChar] == "!"
                || $sentences[$i][$lastChar] == "?"){
                if ($isWord > 0){
                    echo $sentences[$i];
                }

            }
            echo "<br/>";
        }

    }
    ?>

</form>
</body>
</html>
<?php ?>