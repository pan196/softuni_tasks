<!DOCTYPE html>
<html>
<head>
    <title>Primes In Range</title>

</head>
<body>


    <form action="" method="get">
        <label for="start">Starting Index: </label>
        <input id="start" type="text" name="start" />
        <label for="end">End: </label>
        <input id="end" type="text" name="end" />
        <input type="submit" />
    </form>
    <?php if(isset($_GET["start"]) && isset($_GET["end"])): ?>
        <?php
        $start = $_GET["start"];
        $end = $_GET["end"];
        ?>
        <?php

            $primeArr = [];
            for($i = $start; $i <= $end; $i++){  //numbers to be checked as prime
                $counter = 0;
                for($j = 1; $j <= $i; $j++){ //all divisible factors
                    if($i % $j == 0){
                        $counter++;
                    }
                }
                //prime requires 2 rules ( divisible by 1 and divisible by itself)
                if($counter == 2){
                    array_push($primeArr, $i);
                }
            }
        ?>

        <?php for ($i = $start; $i <= $end; $i++): ?>
            <?php $isPrime = 0; ?>
            <?php for ($j = 0; $j < sizeof($primeArr); $j++){
                if ($primeArr[$j] === $i){
                    $isPrime++;
                }
            } ?>
            <?php
            if ($i == $end && $isPrime == 0){
                echo $i;
            } elseif ($isPrime != 0 && $i != $end){
                echo "<b>". $i . ", " . "</b>";
            } elseif ($isPrime != 0 && $i == $end){
                echo "<b>". $i ."</b>";
            } elseif ($isPrime == 0 && $i != $end){
                echo $i . ", ";
            }
//            ($isPrime === 0 && $i == $end)
            ?>
        <?php endfor ?>
    <?php endif ?>

</body>
</html>

<?php ?>