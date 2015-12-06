<?php
require_once'readline.php';
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
$firstUser = readline('����� 1 ������ 4 ������� �����: ');
echo str_repeat(PHP_EOL, 30);
$secondUser = readline('����� 2 ������ 4 ������� �����: ');
echo str_repeat(PHP_EOL, 30);

while(true){
	echo str_repeat('-', 30) , PHP_EOL , '---------- ����� 1: ----------', PHP_EOL;
	$firstNum = readline('������ ������������� �����:');
	$arr = checkNum($secondUser, $firstNum);
	echo '������:', $arr['bull'], PHP_EOL, '�����:', $arr['cow'], PHP_EOL;
	if($arr['bull'] == 4){
		echo '���������!';
		break;
	}
// Second gamer
	echo str_repeat('-', 30) , PHP_EOL , '---------- ����� 2: ----------', PHP_EOL;
	$secondNum = readline('������ ������������� �����:');
	$arr = checkNum($firstUser, $secondNum);
	echo '������:', $arr['bull'], PHP_EOL, '�����:', $arr['cow'], PHP_EOL;
	if($arr['bull'] == 4){
		echo '���������!';
		break;
	}
}