<?php
/**
 * Created by PhpStorm.
 * User: Anna
 * Date: 20.03.14
 * Time: 0:29
 */
    $types = array("double","int","string","boolean");
    $number = 5.2;

    for($count = 0;$count < count($types); ++$count)
    {
        $variable = $number;
        settype($variable,$types{$count});
        var_dump($variable);
        echo($variable);
        echo "\n";
        print($variable);
    }
?>