<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Coloring Texts</title>
</head>
<body>
    <form>
        <textarea name="text">What a wonderful world!</textarea><br/>
        <input type="submit" value="Color text">
    </form>
    <?php
    if(isset($_GET["text"])){
        $text = $_GET["text"];

        for ($i = 0; $i < strlen($text); $i++) {
            if (ord($text[$i]) % 2 == 0){
                echo "<span style='color: red'>$text[$i] </span>";
            } else {
                echo "<span style='color: blue'>$text[$i] </span>";
            }
        }
    }
    ?>
</body>
</html>
<?php ?>