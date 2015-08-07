<!DOCTYPE html>
<?php
if(isset($_GET["amount"]) && isset($_GET["currency"]) && isset($_GET["compound"]) && isset($_GET["period"])){

    $amount = $_GET["amount"];
    $currency = $_GET["currency"];
    $compound = $_GET["compound"];
    $period = $_GET["period"];

    if ($currency == "usd"){
        $currency = "$";
    } elseif ($currency == "eur"){
        $currency = "&#8364;";
    } elseif ($currency == "bgn"){
        $currency = "lv.";
    }

    if ($period == "halfYear"){
        $period = 6;
    } elseif ($period == "oneYear"){
        $period = 12;
    } elseif ($period == "twoYears"){
        $period = 24;
    } elseif ($period == "fiveYears"){
        $period = 60;
    }

    $monthlyPercent = (($compound / 12) / 100);

    for ($i = 0; $i < $period; $i++){
        $amount += ($amount * $monthlyPercent);
    }

    $amount = round($amount, 2);

    if ($currency == "$" || $currency == "&#8364;"){
        $amount = $currency . " " . $amount;
    } elseif ($currency == "lv."){
        $amount = $amount . " " . $currency;
    }
}
?>

<html>
    <head>
        <title>Calculate Interest</title>
    </head>
    <body>
        <form action="" method="get">
            <label for="amount">Enter Amount</label>
            <input type="text" id="amount" name="amount"/>
            <br/>

            <input type="radio" name="currency" id="usd" value="usd"/><label for="usd">USD</label>
            <input type="radio" name="currency" id="eur" value="eur"/><label for="eur">EUR</label>
            <input type="radio" name="currency" id="bgn" value="bgn"/><label for="bgn">BGN</label>
            <br/>

            <label for="compound">Compound Interest Amount</label>
            <input type="text" id="compound" name="compound"/>
            <br/>

            <select name="period">
                <option value="halfYear">6 Months</option>
                <option value="oneYear">1 Year</option>
                <option value="twoYears">2 Years</option>
                <option value="fiveYears">5 Years</option>
            </select>
            <input type="submit" value="Calculate" />
            <span>
            <?php
            if (isset($amount)){
                echo $amount;
            }
            ?>
            </span>
        </form>
    </body>
</html>
