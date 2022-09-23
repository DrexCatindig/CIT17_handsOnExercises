<!DOCTYPE html>
<html>
<head>
	<title>HandOnExecise7</title>
</head>
<body>

<?php
echo "<table border =\"0\" cellspacing='29' cellpadding='5' align='center'>";
	for ($row=1; $row <= 7; $row++) { 
	echo "<tr> \n";
	for ($col=1; $col <= 7; $col++) { 
		 $p = $col * $row;
		   echo "<td>$p</td> \n";
		   	}
	  	    echo "</tr>";
		}
		echo "</table>";
?>

</body>
</html>