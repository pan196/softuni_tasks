<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Word Mapping</title>
    <style>
        table, td{
            border: 1px solid black;
            background-color: lightgray;
        }
    </style>
</head>
<body>
    <form>
        <textarea name="words">The quick brows fox.!!! jumped over..// the lazy dog.!</textarea><br/>
        <input type="submit" value="Count words">
    </form>
    <?php
    if(isset($_GET["words"])){
        $words = $_GET["words"];
        $pattern = '|[^\w]+|';
        $wordsArr = preg_split($pattern, $words, -1, PREG_SPLIT_NO_EMPTY); ?>
        <table>
        <?php for ($i = 0; $i < count($wordsArr); $i++): ?>
            <tr>
                <td><?php echo strtolower($wordsArr[$i]); ?></td>
            <?php $counter = 1;
            for ($j = $i + 1; $j < count($wordsArr); $j++) : ?>

                <?php if (strtolower($wordsArr[$i]) == strtolower($wordsArr[$j])): ?>
                    <?php
                    $counter++;
                    array_splice($wordsArr, $j, 1);
                    ?>

                <?php endif ?>

            <?php endfor ?>
                <td><?php echo $counter; ?></td>
            </tr>
         <?php endfor ?>
    <?php } ?>
</body>
</html>
<?php ?>