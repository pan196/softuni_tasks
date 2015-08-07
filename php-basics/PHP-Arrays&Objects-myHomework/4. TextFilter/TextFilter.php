<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Text Filter</title>
</head>
<body>
    <form action="" method="get">
        <textarea name="text">It is not Linux, it is GNU/Linux. Linux is merely the kernel, while GNU adds the functionality. Therefore we owe it to them by calling the OS GNU/Linux! Sincerely, a Windows client</textarea>
        <br/>

        <label for="banlist">Ban list: </label>
        <input type="text" id="banlist" name="banlist" />
        <br/>

        <input type="submit" value="Filter"/>
        <br/>
        <?php
        if(isset($_GET["text"]) && isset($_GET["banlist"])){
            $text = $_GET["text"];
            $banlist = explode(", ", $_GET["banlist"]);

            for ($i = 0; $i < count($banlist); $i++) {
                $text = str_replace($banlist[$i], str_repeat("*", strlen($banlist[$i])), $text);
            }


            echo $text;

        }
        ?>

    </form>
</body>
</html>
<?php ?>