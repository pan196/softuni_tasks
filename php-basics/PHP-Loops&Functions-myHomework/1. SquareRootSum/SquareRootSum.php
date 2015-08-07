<!DOCTYPE html>
<html>
<head>
    <title>Square Root Sum</title>
    <style>
        table, td, th{
            border: 1px solid black;
            text-align: left;
        }

    </style>
</head>
<body>
    <table>
        <thead>
            <th>Number</th>
            <th>Square</th>
        </thead>
        <?php
            $sum = 0;
        ?>
        <?php for ($i = 0; $i <= 100; $i+=2): ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo round(sqrt($i), 2) ?></td>
            </tr>
            <?php $sum += round(sqrt($i), 2) ?>
        <?php endfor; ?>
        <tr>
            <th>Total:</th>
            <td><?php echo $sum ?></td>
        </tr>
    </table>

</body>
</html>
<?php ?>