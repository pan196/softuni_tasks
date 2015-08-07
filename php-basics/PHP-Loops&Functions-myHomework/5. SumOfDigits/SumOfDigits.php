<!DOCTYPE html>
<html>
<head>
    <title>Sum of Digits</title>
    <style>
        table, td, th{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <form action="" method="get">
        <label for="string">Input string</label>
        <input id="string" type="text" name="string" />
        <input type="submit" value="Show result" />
    </form>
    <?php if(isset($_GET["string"])):
        echo "<table>" . "<tr>";
        $stringArr = explode(", ", $_GET["string"]);
        for ($i = 0; $i < sizeof($stringArr); $i++){
            echo "<td>". $stringArr[$i] . "</td>";
            for ($j = 0; $j < strlen($stringArr[$i]); $j++) {
                $isInteger = str_split($stringArr[$i]);
                $sumOfDigits = array_sum(str_split($stringArr[$i]));


            }
            if (ctype_digit($stringArr[$i])){
                echo "<td>" . $sumOfDigits . "</td>";
            } else {
                echo "<td>" . "I cannot sum that" . "</td>";
            }
            echo "</tr>" . "";
        }
        echo "</table>" . "";
    ?>
    <?php endif ?>
</body>
</html>

<?php ?>