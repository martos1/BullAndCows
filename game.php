<?php
require_once'readline.php';
require_once'function.php'; 
$firstUser = readline('Èãðà÷ 1 âúâåäè 4 öèôðåíî ÷èñëî: ');
echo str_repeat(PHP_EOL, 30);
$secondUser = readline('Èãðà÷ 2 âúâåäè 4 öèôðåíî ÷èñëî: ');
echo str_repeat(PHP_EOL, 30);

while(true){
	echo str_repeat('-', 30) , PHP_EOL , '---------- Èãðà÷ 1: ----------', PHP_EOL;
	$firstNum = readline('Âúâåäè ïðåäïîëàãàåìî ÷èñëî:');
	$arr = checkNum($secondUser, $firstNum);
	echo 'Áèêîâå:', $arr['bull'], PHP_EOL, 'Êðàâè:', $arr['cow'], PHP_EOL;
	if($arr['bull'] == 4){
		echo 'ÏÎÁÅÄÈÒÅË!';
		break;
	}
// Second gamer
	echo str_repeat('-', 30) , PHP_EOL , '---------- Èãðà÷ 2: ----------', PHP_EOL;
	$secondNum = readline('Âúâåäè ïðåäïîëàãàåìî ÷èñëî:');
	$arr = checkNum($firstUser, $secondNum);
	echo 'Áèêîâå:', $arr['bull'], PHP_EOL, 'Êðàâè:', $arr['cow'], PHP_EOL;
	if($arr['bull'] == 4){
		echo 'ÏÎÁÅÄÈÒÅË!';
		break;
	}
}
