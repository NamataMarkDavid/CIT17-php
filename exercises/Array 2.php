<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Array Part 2</title>
</head>
<body>
	<?php
	print "<h4> PHP script to count a total number of duplicate elements in an  array </h4>";
	print "<h4> Test Data: </h4>";
	print "<h4> Input 5 elements in the array:</h4>";

	print "<h4> element - 0: 5</h4>";
	print "<h4> element - 1: 1</h4>";
	print "<h4> element - 2: 1</h4>";


	$text = file ("file.txt");

	$count_values = array();
	foreach ($text as $dups) {
		
		@$count_values[@dups]++;
	} 
        echo 'Total number of duplicate elements found in the array is: '.count($count_values);

	?>


	<?php 
	print "<h4> PHP script to count the frequency of each element of an array</h4>";
	$text = file ("file.txt");

	$n = array_fill(0, count($text), 0);
	$check = -1;
	for($i = 0; $i < count($text); $i++){
		$count = 1;

	for($j = $i+1; $j < count ($text); $j++) {

		if($text[$i] == $text[$j]){
			$count++;
			$n [$j] = $check;
		}
	}

	if($n [$i] != $check)
	    $n [$i] = $count;	
}

print " The frequency of given array elements: ";
for( $i = 0; $i < count($n); $i++){
	if($n [$i] != $check){
		echo("<br>" . $text[$i] ."occurs ");
		echo($n [$i]. " times.");
		echo(" ");
	}
}

	?>


	<?php 
	print "<h4> PHP script to separate odd and even integers in separate arrays </h4>";
	print "<h4> Test Data: </h4>";
	print "<h4> Input 5 elements in the array:</h4>";

	print "<h4> element - 0: 25</h4>";
	print "<h4> element - 1: 47</h4>";
	print "<h4> element - 2: 42</h4>";
	print "<h4> element - 3: 56</h4>";
	print "<h4> element - 4: 32</h4>";

	$text = file ("file.txt");

	echo "<b> The Odd Elements are:</b>" . "<br>";
	for($i = 0; $i < count($text); $i++){
		if(intval($text[$i]) %2!=0){
			print "$text[$i]";
		}
	}

	echo "<br>"."<b> The Even Elements are:</b>" . "<br>";
	    for($i = 0; $i < count($text); $i++){
	    	if(intval($text[$i])%2==0){
	    		print"$text[$i]";
	    	}
	    }


	?>

</body>
</html>