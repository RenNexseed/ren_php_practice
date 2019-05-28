<?php
$i = '';
for($i=1;$i<101;$i++){
  echo $i;

}

//問題2
$i = '';
for($i=1;$i<10;$i++){
  echo $i*3 . \t;
}

//問題3
for($i=0; $i<101; $i++){
  if($i%3 = 0){
    $i = 'Fizz';
  }elseif($i%5=0){
    $i = 'Buzz';
  }elseif(
    $i%3=0&&$i%5=0){
    $i = 'FizzBuzz';
  }
  echo $i;
}

//問題4
$i = '';
for($i=1; $i<101; $i++){
  if($i%10 = 0){
    $i .= . \n;
  }
  echo $i;
}

//問題5
$alpha = ['E', 'A', 'D', 'B', 'A', 'C', 'A', 'B', 'E', 'E', 'A', 'A', 'C'];

echo count($alpha->'A');


//問題6
$math = '';
$english = '';

if($math => 60 && $english => 60 && $math + $english => 140){
  echo '合格！'
}else {
  echo '不合格';
}


//問題7

$lows = [1,2,3,4,5,6,7,8,9];
$i = '';

foreach($lows as $row){
  echo $row * for($i=1;$i<10;$i++){
    if($i % 9 =0){
      $i .= \n;
    }
    echo $i;
  }
}
//問題8




















?>