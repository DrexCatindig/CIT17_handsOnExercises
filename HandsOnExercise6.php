<!DOCTYPE html>
<html>
<head>
	<title>HandsOnExercise6</title>
</head>
<body>
<table align="center" border="5" cellpadding="5" cellspacing="1">

<?php
for($i=1;$i<=12;$i++)
{
echo "<tr>";
for ($j=1;$j<=12;$j++)
  {
  echo "<td>$i * $j = ".$i*$j."</td>";
  }
  echo "</tr>";
  }
?>

</body>
</html>