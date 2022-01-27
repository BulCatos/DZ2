<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>



<h2>5.1</h2>
<?php
$a = 20;
$i = 1;
while($i<=10){
    echo $a.' ';
    $i++;
}
?>

<h2>5.2</h2>
<?php
$i = 1;
while($i<=10){
    $a = rand(1,20);
    echo $a.' ';
    $i++;

}
?>

<h2>5.3 (А)</h2>
<?php
for($i=20;$i<=35;$i++){
    echo $i.'<br>';
}
?>

<h2>5.3 (Б)</h2>
<?php
$b = 20;
for($i=10;$i<=$b;$i++){
    echo ($i*$i).'<br>';
}
?>

<h2>5.3 (В)</h2>
<?php
$a = 40;
for($i=50;$i>=$a;$a++){
    echo ($a*$a*$a).'<br>';
}
?>

<h2>5.3 (Г)</h2>
<?php
$i = $a;
$a = 20;
$b = 25;
for($i=$a;$i<=$b;$i++){
    echo $i.'<br>';

}
?>

<h2>5.4 (А)</h2>
<?php
for($i=10;$i<=25;$i++){
    echo $i.' ';
    echo $i+0.4.'<br>';

}

?>

<h2>5.4 (Б)</h2>
<?php
for($i=25;$i<=34;$i++){
    echo $i.' ';
    echo $i+0.5.' ';
    echo $i+0.8.'<br>';
}

?>

<h2>5.5 (А)</h2>
<?php
for($i=21;$i>=10;$i--){
    echo $i.' ';
    echo $i-1.8.'<br>';
}

?>

<h2>5.5 (Б)</h2>
<?php
for($i=45;$i>=25;$i--){
    echo $i.' ';
    echo $i-0.5.' ';
    echo $i-0.8.'<br>';
}

?>

<h2>5.6 (А)</h2>
<?php
for($i=21;$i<=35;$i++){
    echo $i.' ';
    echo $i-0.6.'<br>';
}

?>

<h2>5.6 (Б)</h2>
<?php
for($i=16;$i<=24;$i++){
    echo $i.' ';
    echo $i-0.5.' ';
    echo $i+0.8.'<br>';
}

?>

<h2>5.7 </h2>
<?php
$a = 20.4;
for($i=2;$i<=20;$i++){
    echo $i.' '.'Шт'.'='.($i*$a).' '.'рублей'.'<br>';
}

?>

<h2>5.8 </h2>
<?php
$a = 453;
for($i=1;$i<=10;$i++){
    echo $i.'фунт'.'='.(($a*$i)/1000).'км'.'<br>';
}

?>

<h2>5.9 </h2>
<?php
$a = 25.4;
for($i=10;$i<=22;$i++){
    echo $i.'дюйм'.'='.(($a*$i)/10).'см'.'<br>';
}

?>

<h2>5.10 </h2>
<?php
$a = 73.66;
for($i=1;$i<=20;$i++){
    echo $i.'$'.'='.($i*$a).'рублей'.'<br>';
}

?>

<h2>5.13 </h2>
<?php
$a = 7;
for($i=1;$i<=9;$i++){
    echo $i.' '.'x'.' '.$a.' '.'='.' '.$i*$a.'<br>';
}

?>

<h2>5.14 </h2>
<?php
$a = 9;
for($i=1;$i<=9;$i++){
    echo $a.' '.'x'.' '.$i.' '.'='.' '.$a*$i.'<br>';
}

?>

<h2>5.15 </h2>
<?php
$n = 3;
for($i=1;$i<=9;$i++){
    echo $i.' '.'x'.' '.$n.' '.'='.' '.$i*$n.'<br>';
}

?>

<h2>5.16</h2>
<?php
$a = sin($i);
for ($i=2; $i<=20; $i++){
    echo 'sin'.$i.'='.$i*$a.'<br>';
}
?>

<h2>5.17</h2>
<?php
for ($i=4; $i<=28; $i++){
    $x = $i;
    $t = $x+2;
    $y = 2*($t**2)+5.5+$t-2;
    echo 'x ='.$i.' '.'y ='.' '.$y.'<br>';
}
?>

<h2>5.18</h2>
<?php
for ($i=2; $i<=17; $i++){
    $a = $i;
    $t = $a*4;
    $z = 3.5*($t**2)-7*$t+16;
    echo 'a ='.$i.' '.'z ='.' '.$z.'<br>';
}
?>

<h2>5.19</h2>
<?php
for ($i=1; $i<=11; $i++){
    $a = $i/10;
    $b = sin($a);
    echo 'sin'.$a.' '.'='.' '.$b.'<br>';
}
?>

<h2>5.20</h2>
<?php
for ($i=1; $i<=9; $i++){
    $a=$i/10;
    $b=sqrt($a);
    echo '√'.$a.'='.$b.'<br>';
}
?>

<h2>5.21</h2>
<?php
$a = 250;
for ($i=1; $i<=20; $i++) {
    $b = 50 * $i;
    $c = $b * $a / 1000;
    echo $b.'г сыра'.'='.' '.$c.'грн'.'<br>';
}
?>

<h2>5.22</h2>
<?php
$a = 150;
for ($i=1; $i<=20; $i++) {
    $b = 100 * $i;
    $c = $b * $a / 1000;
    echo $b.'г конфет'.'='.' '.$c.'грн'.'<br>';
}
?>

<h2>5.23</h2>
<?php
for ($i=2.1; $i<2.8;$i=$i+0.1){
    echo $i.'<br>';
}
?>

<h2>5.24</h2>
<?php
for ($i=3.1; $i<3.9;$i=$i+0.1){
    echo $i.'<br>';
}
?>

<h2>5.25</h2>
<?php
for ($i=2.2; $i<4.2;$i=$i+0.2){
    echo $i.'<br>';
}
?>

<h2>5.26</h2>
<?php
for ($i=4.4; $i<6.4;$i=$i+0.2){
    echo $i.'<br>';
}
?>

<h2> 5.27(А)</h2>
<?php
$a=0;
for ($i = 100; $i <=500; $i++) {
    $a = $a+$i;
}
echo $a;
?>

<h2> 5.27(Б)</h2>
<?php
$a= 250;
for ($i = $a; $i <=500; $i++) {
    $a = $a+$i;
}
echo $a;
?>

<h2> 5.27(В)</h2>
<?php
$b = 250;
for ($i = -10; $i <=250; $i++) {
    $b = $b+$i;
}
echo $b;
?>

<h2> 5.27(Г)</h2>
<?php
$a = 100;
$b = 250;

for ($i = $a; $i <=$b; $i++) {
    $a = $a+$i;
}
echo $a;
?>

<h2> 5.28(А)</h2>
<?php


for ($i = 8; $i <=15; $i++) {
    $a = $a*$i;
}
echo $a;
?>

<h2> 5.28(Б)</h2>
<?php
$a = 5;

for ($i = $a; $i <=20; $i++) {
    $a = $a*$i;
}
echo $a;
?>

<h2> 5.28(Б)</h2>
<?php
$b = 16;

for ($i = 1; $i <=16; $i++) {
    $b = $b*$i;
}
echo $b;
?>

<h2> 5.28(Г)</h2>
<?php
$a = 5;
$b = 15;

for ($i = $a; $i <=$b; $i++) {
    $a = $a*$i;
}
echo $a;
?>

<h2> 5.29(А)</h2>
<?php

for ($i = 1; $i <=1000; $i++) {
    $a = $a+$i;
}
echo $a/2;
?>

<h2> 5.29(Б)</h2>
<?php
$b = 250;
for ($i = 100; $i <=250; $i++) {
    $b = $b+$i;
}
    echo $b/2;
?>

<h2> 5.29(В)</h2>
<?php
$a = 100;
for ($i = $a; $i <=250; $i++) {
    $a = $a+$i;
}
echo $a/2;
?>

<h2> 5.29(Г)</h2>
<?php
$a = 100;
$b = 135;

for ($i = $a; $i <=$b; $i++) {
    $a = $a+$i;
}
echo $a/2;
?>

<h2> 5.30(А)</h2>
<?php

for ($i = 20; $i <=40; $i++) {
    $a = ($a+$i)**3;
}
echo $a;
?>

<h2> 5.48</h2>
<?php
$a=0;
for ($i = 1; $i <=10; $i++) {
    $a = $a+$i**3;
}
echo $a;
?>

<h2> 6.88 (А)</h2>
<?php

$i = 9;
While ($i++ < 30) {
    echo $i . '<br>';
}
?>

<h2> 6.88 (Б)</h2>
<?php
$i = 10;
do{
    echo $i.'<br>';
} While ($i++ < 30);

?>

<h2> 6.89 (А)</h2>
<?php

$i = 101;
While ($i-- > 80) {
    echo $i . '<br>';
}
?>

<h2> 6.89 (Б)</h2>
<?php
$i = 100;
do{
    echo $i.'<br>';
} While ($i-- > 80);

?>

<h2>6.90</h2>
<?php
$a = 3;
$b = 7;
while($a++ < $b) {
    echo $a**2 .'<br>';
}


?>

<h2>6.90</h2>
<?php
$a = 3;
$b = 7;
do{
    echo $a**2 . '<br>';
}
while($a++ < $b)
?>

<h2>6.92 (1)</h2>
<?php

$arr = [5,5,5,5,5,5,4,4,4,4,4,3,3,3,3,3,3,2,2,2];
$max = $arr[0];
$i = 1;
while ($arr[$i] == $max){
    $i++;
}
echo 'Ученики с оценкой "5" - ' . $i;
?>

<h2>6.92(2)</h2>
<?php

$arr = [5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5];
$max = $arr[0];
$i = 1;
while ($arr[$i] == $max){
    $i++;
}
echo 'Ученики с оценкой "5" - ' . $i;
?>

<h2>6.93(1)</h2>
<?php

$arr = [0,0,0,0,0,0,53,98,100,100,34,25,0,0,0,0,14,25,39,66,43,0,0,0,0,35,36,0,0];
$osandkov_nebilo = $arr[0];
$i = 1;
while ($arr[$i] == $osandkov_nebilo){
    $i++;
}
echo 'Первые'.' '.$i.' '.'дней мая осадков не наблюдалось.';


?>

<h2>6.93(2)</h2>
<?php

$arr = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
foreach ($arr as $key=>$value);
echo 'В течении '.' '.$key.' '.'дня мая осадков не наблюдалось'.'<br>';


?>

<h2>6.94</h2>
<?php

$a = 200;
while ($a++)
    if ($a % 17 == 0){
        break;
    }
echo 'Минимальное число, большее 200, которое нацело делится на 17 = '.$a.'<br>';

?>

<h2>6.95</h2>
<?php

$a = 5000;
while ($a--)
    if ($a % 39 == 0){
        break;
    }
echo 'Максимальное из натуральных чисел, не превышающих 5000, которое
нацело делится на 39 = '.$a.'<br>';

?>

<h2>6.95</h2>
<?php
$student_height = [210,205,201,199,192,178,177,173,169,168,167,165,161,158,157];
$height_new_student = 173;
$i = 0;
$serial_number = 1;
    while($student_height[$i] != $height_new_student){
        $i++;
        $serial_number++;
}
echo 'Новый ученик занимает '.$serial_number.' по росту, среди 15 учеников'.'<br>';
?>

<h2>6.96</h2>
<?php
$points = [35,34,33,32,30,27,25,24,22,21,20,18,16,15,14,13,12,11,10,9];
$team_n = 22;
$i = 0;
$serial_number = 1;
    while($points[$i] != $team_n){
        $i++;
        $serial_number++;
    }
echo 'Команда "N" набрала '.$team_n.' очка и занимает '.$serial_number.' место , среди 20 команд'.'<br>';


?>

<h2>8.1(а)</h2>
<?php

for ($i=1;$i<=4;$i++){
    echo '<br>';
        for ($j=1;$j<=6;$j++){
            echo '5'.' ';
        }

}

?>

<h2>8.1(б)</h2>
<?php

for ($i=1;$i<=4;$i++){
    echo '<br>';
    for ($j=1;$j<=10;$j++){
        echo $j.' ';
    }

}

?>

<h2>8.1(в)</h2>
<?php

for ($i=41;$i<=80;$i++){
    echo $i.' ';
   if ($i%10==0){
       echo'<br>';
   }
}

?>

<h2>8.2(а)</h2>
<?php
for ($i=1;$i<=5;$i++){
    echo '<br>';
    for ($j=1;$j<=$i;$j++){
        echo '5'.' ';
    }

}
?>

<h2>8.2(в)</h2>
<?php
for ($i=1;$i<=5;$i++){
    echo '<br>';
    for ($j=5;$j>=$i;$j--){
        echo '1'.' ';
    }

}
?>

<h2>8.3(а)</h2>
<?php
for ($i=1;$i<=5;$i++){
    echo '<br>';
    for ($j=1;$j<=$i;$j++){
        echo$i.' ';
    }

}
?>

<h2>8.3(б)</h2>
<?php
for ($i=1;$i<=5;$i++){
    echo '<br>';
    for ($j=5;$j>=$i;$j--){
        echo ($i+4).' ';
    }

}
?>

<h2>8.3(в)</h2>
<?php
for ($i=1;$i<=5;$i++){
    echo '<br>';
    for ($j=1;$j<=$i;$j++){
        echo$i.' ';
    }

}
?>

<h2>8.3(в)</h2>
<?php
for ($i=10;$i<=50;$i+=10) {
    echo '<br>';
    for ($j=10;$j<=$i;$j+=10) {
        echo $i.' ';
    }
}
?>

<h2>8.3(г)</h2>
<?php
for ($i=5;$i<=25;$i+=5) {
    echo '<br>';
    for ($j=25;$j>=$i;$j-=5) {
        echo $i.' ';
    }
}
?>

<h2>8.4(а)</h2>
<?php

for ($i=0;$i<5;$i++) {
    echo '<br>';
        for ($j=$i;$j>=0;$j--) {
         echo $j . "  ";
    }
}
?>

<h2>8.4(б)</h2>
<?php

for ($i=6;$i>1;$i--) {
    echo '<br>';
    for ($j=$i;$j>1;$j--) {
        echo $j.' ';
    }
}
?>

<h2>8.4(в)</h2>
<?php

for ($i=30;$i>25;$i--) {
    echo '<br>';
    for ($j=$i;$j<31;$j++) {
        echo $j.' ';
    }
}
?>

<h2>8.4(г)</h2>
<?php

for ($i=20;$i<=16;$i++) {
    echo '<br>';
    for ($j=$i;$j<=16;$j--) {
        echo $j.' ';
    }
}
?>

<h2>8.5</h2>
<?php

for ($i=1;$i<=9;$i++) {
    for ($j=1;$j<=9;$j++) {
        echo "$j + $i = " . ($j + $i);
        echo '<br>';
        if ($j==9) {
            echo '<br>';
        }
    }
}
?>

<h2>8.6</h2>
<?php

for ($i=1;$i<=9;$i++) {
    for ($j=1;$j<=9;$j++) {
        echo "$i + $j = " . ($i + $j);
        echo '<br>';
        if ($j==9) {
            echo '<br>';
        }
    }
}
?>

<h2>8.7</h2>
<?php
for ($i=1;$i<=9;$i++) {
    for ($j=1;$j<=9;$j++) {
        echo "$i x $j = " . ($i * $j);
        echo '<br>';
        if ($j==9) {
            echo '<br>';
        }
    }
}
?>

<h2>8.8</h2>
<?php
for ($i=1;$i<=9;$i++) {
    for ($j=1;$j<=9;$j++) {
        echo "$j x $i =" . ($j * $i);
        echo '<br>';
        if ($j==9) {
            echo '<br>';
        }
    }
}
?>



</body>
</html>