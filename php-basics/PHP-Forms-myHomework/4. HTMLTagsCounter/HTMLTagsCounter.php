<!DOCTYPE html>
<?php
$tagArr = array("html", "head", "body", "div", "span", "html", "DOCTYPE", "titele",
    "link", "meta", "style", "p", "h1", "h2", "h3", "h4", "h5", "h6", "strong", "em",
    "abbr", "acronym", "address", "bdo", "blockquote", "cite", "q", "code", "ins", "del",
    "dfn", "kbd", "pre", "samp", "var", "br", "a", "base", "ul", "ol", "li", "dl", "dt", "dd",
    "table", "tr", "td", "th", "tbody", "thead", "tfoot", "col", "colgroup", "caption", "form", "input",
    "textarea", "select", "option", "optgroup", "button", "label", "fieldset", "legend", "script", "noscript",
    "b", "i", "tt", "sub", "sup", "big", "small", "hr");

    session_start();
    if (!isset($_SESSION["score"])){
        $_SESSION["score"] = 0;
    }

    if (isset($_GET["inputTag"])){

        $isValid = false;
        for ($i = 0; $i < sizeof($tagArr); $i++)
        if ($_GET["inputTag"] == $tagArr[$i]){
            $isValid = true;
            $_SESSION["score"]++;
            break;
        }
    }
?>
<html>
<head>
    <title>HTML Tags Counter</title>
</head>
<body>
    <form action="HTMLTagsCounter.php" method="get">
        <label for="inputTag">Enter HTML tags: </label>
        <br/>
        <br/>

        <input type="text" id="inputTag" name="inputTag"/>
        <input type="submit" />
        <br/>
        <br/>

        <h1 id="isValid" style="padding: 0; margin: 0;">
            <?php
            if (isset($isValid)){
                if ($isValid === true){
                    echo "Valid HTML tag!";
                    unset($isValid);
                } else {
                    echo "Invalid HTML tag!";
                }
            }
            ?>
        </h1>
        <h1 id="score" style="padding: 0; margin: 0;">Score:
            <?php
                echo $_SESSION["score"];
            ?>
        </h1>
    </form>
</body>
</html>