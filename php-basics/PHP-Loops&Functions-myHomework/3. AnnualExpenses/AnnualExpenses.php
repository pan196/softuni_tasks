<!DOCTYPE html>
<html>
<head>
    <title>Annual Expenses</title>
    <style>
        table, td, th{
            border: 1px solid black;
        }
    </style>
</head>
<body>
<div>
    <form action="" method="get">
        <label for="years">Enter number of years</label>
        <input id="years" type="text" name="years" />
        <input type="submit" value="Show costs" />
    </form>
    <?php if(isset($_GET["years"])):
        $years = $_GET["years"];
        $year = date("Y");

        ?>

        <table>
            <thead>
            <th>Year</th>
            <th>January</th>
            <th>February</th>
            <th>March</th>
            <th>April</th>
            <th>May</th>
            <th>June</th>
            <th>July</th>
            <th>August</th>
            <th>September</th>
            <th>October</th>
            <th>November</th>
            <th>December</th>
            <th>Total:</th>
            </thead>
            <?php for ($i = 0; $i < $years; $i++): ?>
                <tr>
                    <td><?php echo $year; ?></td>
                <?php
                $rand = [];
                ?>
                <?php for ($j = 0; $j < 12; $j++):
                    array_push($rand, rand(0, 99));?>
                    <td><?php echo $rand[$j]; ?></td>
                <?php endfor ?>
                <?php
                $sum = array_sum($rand);
                ?>
                    <td><?php echo $sum; ?></td>


                </tr>
                <?php $year--; ?>
            <?php endfor ?>
        </table>
    <?php endif ?>
</div>
</body>
</html>

<?php ?>