<?php
function typeOF($variable){
    if (is_numeric($variable)){
        var_dump($variable);
    } else {
        echo $type = gettype($variable) . "\n";
    }
}
typeOF("hello");
typeOF(15);
typeOF(1.234);
typeOF(array(1, 2, 3));
typeOF((object)[2, 34]);
?>
