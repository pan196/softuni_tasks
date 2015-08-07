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
<br/>
</body>

<?php
if(isset($_GET["tags"])){
    $tags = explode(", ", $_GET["tags"]);?>
    <?php
    $assArr = array();

    for ($i = 0; $i < sizeof($tags); $i++){
        $counter = 0;
        $repeatedWords = 0;
        for ($k = 0; $k <= $i; $k++){
            if ($tags[$i] === $tags[$k]){
                $repeatedWords++;
            }
        }

        if ($repeatedWords < 2){
            for ($j = 0; $j < sizeof($tags); $j++){
            if ($tags[$i] === $tags[$j]){
                $counter++;
            }

            }

            $assArr[$tags[$i]] = $counter;?>
        <?php } ?>
    <?php } ?>
    <?php

    arsort($assArr);
    $isBigger = 0;
    $winnerTag = "";
    foreach ($assArr as $key => &$value) {

        if ($value > $isBigger){
            $isBigger = $value;
            $winnerTag = $key;
        }
        echo $key . " : " . $value . " times";?>
        <br/>

        <?php } ?>
    <br/>
    <?php
    echo "Most Frequent Tag is: " . $winnerTag;
    ?>
<?php } ?><br/>


</html>