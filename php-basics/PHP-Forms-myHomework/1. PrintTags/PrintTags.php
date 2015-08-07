<!DOCTYPE html>
<html>
    <head>
        <title>Print Tags</title>
    </head>
    <body>
        <form>
            <h4>Enter Tags: </h4>
            <input type="text" name="tags" />
            <input type="submit">
        </form>
    </body>
    <?php
        if(isset($_GET["tags"])){
            $tags = explode(", ", $_GET["tags"]);?>
            <?php
            for ($i = 0; $i < sizeof($tags); $i++){
                echo $i . " : " . $tags[$i] . "\n";
            ?>
            <br/>
            <?php } ?>
    <?php } ?>
</html>