<!DOCTYPE html>
<html>
<head>
	<title>Array Exercises Part2</title>
</head>
<body>
	<h1>Duplicate Count</h1>
<?php
     

    $DC = array(5,1,1);
    echo "Test Data: ";
          for ($i = 0; $i < count($DC); $i++) {
               echo "$DC[$i], ";
            }
    echo "</br>Total number of duplicate elements found in the array is : ";
        for ($i = 0; $i < count($DC); $i++) {
             for ($j = $i + 1; $j < count($DC); $j++) {
                if ($DC[$i] == $DC[$j])
                    echo "$DC[$j]";
                }
            }
?>
</body>
</html>