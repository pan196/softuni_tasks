<!DOCTYPE html>
<html>
<head>
    <title>Square Root Sum</title>
    <style>
        table, td, th{
            border: 1px solid black;
        }
        table{
            width: 250px;
            margin: 10px 40px;
        }
        form{
            width: 325px;
            margin: 10px 10px;
        }
        div{
            width: 330px;
        }

    </style>
</head>
<body>
    <?php
    $colors = array("red", "purple", "pink", "awesome");
    $amount = array(1, 2, 3, 4, 5);
    ?>
<div>
    <form action="" method="get">
        <label for="cars">Enter cars</label>
        <input id="cars" type="text" name="cars" />
        <input type="submit" value="Show result" />
    </form>
    <?php if(isset($_GET["cars"])):
        $cars = explode(", ", $_GET["cars"]); ?>
        <table>
            <thead>
            <th>Car</th>
            <th>Color</th>
            <th>Count</th>
            </thead>
            <?php foreach ($cars as $car): ?>
                <?php shuffle($colors); ?>
                <?php shuffle($amount); ?>
                <tr>
                    <td><?php echo $car ?></td>
                    <td><?php echo $colors[0] ?></td>
                    <td><?php echo $amount[0] ?></td>
                </tr>
            <?php endforeach ?>
        </table>
    <?php endif ?>
</div>
</body>
</html>

<?php ?>