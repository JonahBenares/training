<?php

	$var = "henne";
	$var1="tanan";
	$var2 = 1;

	echo $var . "<br>";
	echo $var2 . "<br>";

	echo strlen($var) . "<br>";
	echo strrev($var) . "<br>";

	for($x=1; $x<=10; $x++){
		echo $x. "<br>";
	}
		
	

	$one_array = array("jonah", "henne", "bev", "tepen", "jason", "glenn");
	print_r($one_array);

	echo "<br>";

	foreach($one_array AS $name){
		echo $name . " ";

		if($name == 'jason'){
			echo "graphic artist";
		}
		if($name == 'jonah'){
			echo "supervisor";
		}
		echo "<br>";
	}

	echo $one_array[1] . "<br>";
	

	$two_array = array(
		"supervisor"=>"jonah",
		"systems implementer"=>"henne",
		"backend developer 1"=>"tepen",
		"backend developer 2"=>"glenn",
		"frontend developer"=>"jason",
		"encoder"=>"bev",
	);

	foreach($two_array AS $key=>$value){
		echo $key . " = " .$value. "<br>";
	}

	echo $two_array["systems implementer"] . "<br>";

	print_r($two_array);
	echo "<br>";

	$cars = array (
		  array("Volvo",22,18), 
		  array("BMW",15,13), 
		  array("Saab",5,2),
		  array("Land Rover",17,15)
		);

	print_r($cars);

	echo "<br>";

	echo $cars[1][0] . "<br>";

	foreach($cars AS $c){
		echo $c[1] . "<br>";
	}
?>