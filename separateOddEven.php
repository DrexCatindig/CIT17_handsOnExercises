<!DOCTYPE html>
<html>
<head>
	<title>Array Exercises Part 2</title>
</head>
<body>
	<h1>Separate Odd Even</h1>
<?php
$oe = array(25,47,42,56,32);
            echo "<br/>Test Data: ";
            for ($i = 0; $i < count($oe); $i++) {
                echo $oe[$i].", ";
            }
            $oe_odd = array();
            $oe_even = array();
            for ($i = 0; $i < count($oe); $i++) {
                if ($oe[$i] % 2 == 0) {
                    array_push($oe_even, $oe[$i]);
                }
                else {
                    array_push($oe_odd, $oe[$i]);
                }
            }
            echo "<br/>The Even elements are :<br/>";
            for ($i = 0; $i < count($oe_even); $i++) {
                echo "$oe_even[$i] ";
            }
            echo "<br/>The Odd elements are :<br/>";
            for ($i = 0; $i < count($oe_odd); $i++) {
                echo "$oe_odd[$i] ";
            }
?>
</body>
</html>