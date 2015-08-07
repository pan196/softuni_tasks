<?php
$post = "";
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $sex = $_POST['sex'];
    $post = "My name is $name. I am $age years old. I am $sex.";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Form Data</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <form method="post">
            <input type="text" name="name" value="Name.." /><br/>
            <input type="text" name="age" value="Age.." /><br/>
            <input type="radio" name="sex" value="male" /> Male<br/>
            <input type="radio" name="sex" value="female" /> Female<br/>
            <input type="submit" value="Изпращане" />
        </form>
        <br/>
        <?php echo $post; ?>
    </body>
</html>