<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cities</title>
</head>
<body>
<h1 style="color: forestgreen; font-weight: bold;"> List of the Large Cities in the World</h1><br>
<?php
$cities=array("Tokyo","Mexico City","New York City","Mumbai","Seoul","Shanghai","Lagos","Buenos Aires","Cairo","London");

	print $cities[0]."<br>";
	print $cities[1]."<br>";
	print $cities[2]."<br>";
	print $cities[3]."<br>";
	print $cities[4]."<br>";
	print $cities[5]."<br>";
	print $cities[6]."<br>";
	print $cities[7]."<br>";
	print $cities[8]."<br>";
	print $cities[9]."<br>";

	"<br>";

sort($cities);

echo "\n<ul>\n" ;
foreach($cities as $c){
  echo "<li>$c</li>\n";
}
echo "</ul>" ;

array_push($cities, "Los Angeles", "Calcutta", "Osaka", "Beijing") ;

sort($cities);
echo "\n<ul>\n";
foreach($cities as $c){
  echo "<li>$c</li>\n";
}
echo "</ul>";
?>

<pre>
	<?php

	print_r($cities);

	?>	
	</pre>
</body>
</html>