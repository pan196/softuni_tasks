<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Text Filter</title>
</head>
<body>
<form action="" method="get">
    <textarea name="text"><p>Come and visit <a href="http://softuni.bg">the Software University</a> to master the art of programming. You can always check our <a href="www.softuni.bg/forum">forum</a> if you have any questions.</p></textarea>
    <br/>

    <input type="submit" value="Replace"/>
    <br/>
    <?php
    if(isset($_GET["text"])){
        $text = $_GET["text"];

        $text = str_replace('<a href="', "[URL=", $text);
        $text = str_replace('">', "]", $text);
        $text = str_replace('</a>', "[/URL]", $text);

        echo $text;
    }
    ?>

</form>
</body>
</html>
<?php ?>