
        <?php
        $names=array("appu","ammu","arya","nithin","kohli","geralt","machester");
        echo "The original array is :<br>";
        print_r($names);
        asort($names);
        echo "<br>AFTER SORTING : <br>";
        print_r($names);
        arsort($names);
        echo "<br>AFTER REVERSE SORTING : <br>";
        print_r($names);
        ?>
