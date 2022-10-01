<!DOCTYPE html>
<html>
<head>
	<title>Array Exercises Part 2</title>
</head>
<body>
	<h1> Frequency Count</h1>
<?php

$FC = array(25,12,43);
            echo "<br/><br/>Test Data: ";
            for ($i = 0; $i < count($FC); $i++) {
                echo $FC[$i].", ";
            }
            echo "</br>Frequency :</br>";
            for ($i = 0, $unique = array(); $i < count($FC); $i++) {
                $frequency = 0;
                if (!in_array($FC[$i], $unique)) {
                    array_push($unique, $FC[$i]);
                }
                for ($j = 0; $j < count($FC); $j++) {
                    if ($unique[$i] == $FC[$j]) {
                        $frequency++;
                    }
                }
                if ($unique[$i]) {
                    echo "$unique[$i] occurs $frequency times<br/>";
                }
            }

?>
</body>
</html>