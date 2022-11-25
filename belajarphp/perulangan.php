<?php
echo "Perulangan  <hr>";
    //perulangan 'for' untuk mencetak angka 1-10
for($j = 1; $j <= 7; $j++){
    echo $j . "<br>";
}
echo "<br>";
echo "<br>";
echo "<br>";
    //perulangan for untuk mencetak 10-0  (hitung mund+ur)
for($b = 10; $b >= 0; $b--){
    echo $b . "<br>";
}
echo "<br>";
echo "<br>";
echo "<br>";


// menggunakan array
$list = [ 'Siti', 'Najwa', 'Sakila']; 
echo "<br>";
for ($a = 0 ; $a < count($list); $a++){
    echo  $list[$a];
}
echo "<br>";
echo "<br>";
echo "<br>";

//break dam continue menggunakan for
for ($a = 1; $a <= 50; $a++){
    if ($a % 10 === 0 ){
        continue; //skip kondisi diatas
    }
    echo "perulangan ke - {$a} <br>";

    if ($a > 40){
        break; //memberhentikan jika kondisi diatas berjalan
    }
}
echo "<br>";
echo "<br>";
echo "<br>";



//perulangan while
$f = 1;

while($f <= 10){
    echo $f . "<br>";

    $f++;
}
echo "<br>";
echo "<br>";
echo "<br>";

//perulangan do while
while(false){
    echo "perulangan while <br>";
}
do{
    echo "perulangan do while <br>";
}
while(false);
echo "<br>";
echo "<br>";
echo "<br>";

//perulangan foreach
$list = ['RPL', 'Wajib', 'Ngulik'];

foreach($list as $kunci => $l){
    echo "[{$kunci}] Nama : {$l} <br>";
}
echo "<br>";
echo "<br>";
echo "<br>";

//tugas : Buatlah Sebuah Program Untuk Mencetak Bilangan Genap Dan Ganjil Menggunakan For Atau While ! (1-100)


?>
