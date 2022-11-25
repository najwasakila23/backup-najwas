<?php

$baju = true;

if($baju){
	echo "Variable baju bernilai true"; 
}
$nilai = 50;
echo "<br>";
echo "<br>";


if ($nilai > 70) {
    echo "Selamat, anda lulus!"; //1
} else {
    echo "Mohon maaf, anda harus mengulang";
}

echo "<br>";
echo "<br>";


$nilai = 50;

echo $nilai > 70 ? "Selamat, anda lulus!" : "Mohon maaf, anda harus mengulang";
echo "<br>";
echo "<br>";


$nilai = 45;
echo "Variable tersebut bernilai : {$nilai} <br>";

if ($nilai >= 50) {
    echo "GOOD JOB !";
} elseif (40 <= $nilai && $nilai < 50) {
    echo "Jangan Menyerah !";
} else {
    echo "Coba Lagi !";
}
echo "<br>";
echo "<hr>";



echo "Percabangan:<br>";
echo "<br>";


$nilai = 90;
echo "Variable tersebut bernilai : {$nilai} <br>";

if ($nilai > 50) {
    echo "GOOD JOB!";
} elseif (45 <= $nilai && $nilai <= 50) {
    echo "Jangan Menyerah";
} else {
    echo "Coba Lagi";
}

echo "<br>";
echo "<br>";


$nilai = 7;
//ganjil atau genap
if ($nilai % 2 == 0) {
    echo "genap";
} else {
    echo "ganjil";
}
echo "<br>";


$nilai = 80;
echo "Variable ini bernilai : {$nilai} = ";

if ($nilai >= 90) {
    echo "A";
} elseif ($nilai >= 80) {
    echo "B";
} elseif ($nilai >= 70) {
    echo "C";
} else {
    echo "D";
}
/*Ubah nilai jika ingin melihat perubahannya */

