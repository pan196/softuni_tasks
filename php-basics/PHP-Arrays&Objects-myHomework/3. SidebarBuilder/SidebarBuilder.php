<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sidebar Bulder</title>
</head>
<body>
    <form action="" method="get">
        <label for="categories">Categories: </label>
        <input type="text" id="categories" name="categories" />
        <br/>

        <label for="tags">Categories: </label>
        <input type="text" id="tags" name="tags" />
        <br/>

        <label for="months">Categories: </label>
        <input type="text" id="months" name="months" />
        <br/>

        <input type="submit" value="Generate">
    </form>

    <?php if(isset($_GET["categories"]) && isset($_GET["tags"]) && isset($_GET["months"])){
        $categories = explode(", ", $_GET["categories"]);
        $tags = explode(", ", $_GET["tags"]);
        $months = explode(", ", $_GET["months"]);
        ?>
        <div>
            <h3>Categories</h3>
            <ul type="circle">
        <?php for ($i = 0; $i < count($categories); $i++) : ?>
            <li><?php echo $categories[$i]; ?></li>
        <?php endfor ?>
            </ul>
        </div>

        <div>
            <h3>Tags</h3>
            <ul type="circle">
        <?php for ($i = 0; $i < count($tags); $i++) : ?>
            <li><?php echo $tags[$i]; ?></li>
        <?php endfor ?>
            </ul>
        </div>

        <div>
            <h3>Months</h3>
            <ul type="circle">
        <?php for ($i = 0; $i < count($months); $i++) : ?>
            <li><?php echo $months[$i]; ?></li>
        <?php endfor ?>
            </ul>
        </div>
    <?php } ?>

</body>
</html>
<?php ?>