<!DOCTYPE html>
<html>
    <head>
        <title>HTML Table</title>
        <link href="InformationTable.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
<!--        --><?php
//        $name = "Gosho";
//        $number = "0882-321-423";
//        $age = 24;
//        $address = "Hadji Dimitar";
//        ?>
        <?php
        $name = "Pesho";
        $number = "0884-888-888";
        $age = 67;
        $address = "Suhata Reka";
        ?>
        <table>
            <tr>
                <th>Name</th>
                <td><?php echo $name ?></td>
            </tr>
            <tr>
                <th>Phone number</th>
                <td><?php echo $number ?></td>
            </tr>
            <tr>
                <th>Age</th>
                <td><?php echo $age ?></td>
            </tr>
            <tr>
                <th>Address</th>
                <td><?php echo $address ?></td>
            </tr>
        </table>
    </body>
</html>