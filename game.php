<?php
require_once'readline.php';
require_once'function.php'; 
$firstUser = readline('Играч 1 въведи 4 цифрено число: ');
echo str_repeat(PHP_EOL, 30);
$secondUser = readline('Играч 2 въведи 4 цифрено число: ');
echo str_repeat(PHP_EOL, 30);

while(true){
	echo str_repeat('-', 30) , PHP_EOL , '---------- Играч 1: ----------', PHP_EOL;
	$firstNum = readline('Въведи предполагаемо число:');
	$arr = checkNum($secondUser, $firstNum);
	echo 'Бикове:', $arr['bull'], PHP_EOL, 'Крави:', $arr['cow'], PHP_EOL;
	if($arr['bull'] == 4){
		echo 'ПОБЕДИТЕЛ!';
		break;
	}
// Second gamer
	echo str_repeat('-', 30) , PHP_EOL , '---------- Играч 2: ----------', PHP_EOL;
	$secondNum = readline('Въведи предполагаемо число:');
	$arr = checkNum($firstUser, $secondNum);
	echo 'Бикове:', $arr['bull'], PHP_EOL, 'Крави:', $arr['cow'], PHP_EOL;
	if($arr['bull'] == 4){
		echo 'ПОБЕДИТЕЛ!';
		break;
	}
}
