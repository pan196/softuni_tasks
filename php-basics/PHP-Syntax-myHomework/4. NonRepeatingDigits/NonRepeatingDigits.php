<?php
function noneRepeatingDigits($n){
    // create variable that contains all digits
    $allNumbers = "102";
    // if there is no correct result print "no"
    if ($n < 102){
        echo "no" . "\n";
    } else {
        // we need only 3-digit numbers... 987 is the last number that satisfies the requirements
        if ($n > 987){
            $n = 987;
        }

        for ($i = 100; $i <= $n; $i += 100) {
            //taking the first digit of the number
            $digitOne = substr($i, 0, 1);
            for ($j = $i; $j < $i + 100; $j += 10) {
                //taking the second digit of the number
                $digitTwo = substr($j, 1, 1);
                for ($k = $j; $k < $j + 10; $k++) {
                    //taking the third digit of the number
                    $digitThree = substr($k, 2, 1);
                    //checking if the k loop is bigger than our number "n"
                    if ($k > $n){
                        break;
                    }
                    //checking if all digits are different => push them in the main string
                    if ($digitOne !== $digitTwo && $digitOne !== $digitThree && $digitTwo !== $digitThree){
                        //102 is the first number that satisfies the requirements
                        //it's already in the string. This allow us to put comma before the next result (not after)
                        //and in the end we have not comma in the last result
                        if ($k === 102){
                            continue;
                        }
                        $allNumbers .= ", " . $k;
                    }

                }
            }
        }
        //print the result
        echo $allNumbers . "\n";

    }
}


noneRepeatingDigits(1234);
noneRepeatingDigits(145);
noneRepeatingDigits(15);
noneRepeatingDigits(247);
