<?php
include 'readline.php';
function checkNum($userNum, $newNum){
	$arr['bull'] = 0;
	$arr['cow'] = 0;
	for($i = 0; $i <4; $i++){
		if ($newNum[$i] == $userNum[$i]){
			$arr['bull']++;
		} else if (strpos($userNum, $newNum[$i])!==false){
			$arr['cow']++;
		}
	}
	return $arr;
} 