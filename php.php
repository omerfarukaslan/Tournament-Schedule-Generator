<?php

// omeraslan.net/schedule
// tutorial: https://youtu.be/tMQptqtTrpM
// omerfarukaslan@gmail.com
// Thank you

$num_team = $_GET["numteam"];
$num_week = $_GET["numweek"];

if($num_team % 2 != 0){
	$num_team++;
}

$n2 = ($num_team-1)/2;

for($x = 0; $x < $num_team; $x++){
	$teams[$x] = $x+1;
}

for($x = 0; $x < $num_week; $x++){
	for($i = 0; $i < $n2; $i++){
	$team1 = $teams[$n2 - $i];
	$team2 = $teams[$n2 + $i + 1];
	$results[$team1][$x] = $team2;
	$results[$team2][$x] = $team1;
	echo $results[$team1][$x] . " vs " . $results[$team2][$x] . "<br>";
	}
	echo "<br>";
	$tmp = $teams[1]; 
	for($i = 1; $i < sizeof($teams)-1; $i++){
		$teams[$i] = $teams[$i+1];
	}
	$teams[sizeof($teams)-1] = $tmp;
}
?>
