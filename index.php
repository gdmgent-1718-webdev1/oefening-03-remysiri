<?php
    
    $title = "phpoefening";
	$x = 7;
	$y = 10;
	$add = $x + $y;
	$min = $x - $y;
	$multi = $x * $y;
	$divide = $y / $x;
	$percent = $y % $x;


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $title;?></title>
</head>
<body>

<p><?= $y . ' + ' . $x . ' = ' . $add;?></p>
<p><?= $y . ' - ' . $x . ' = ' . $min;?></p>
<p><?= $y . ' * ' . $x . ' = ' . $multi;?></p>
<p><?= $y . ' / ' . $x . ' = ' . $divide;?></p>
<p><?= $y . ' % ' . $x . ' = ' . $percent;?></p>
</body>
</html>