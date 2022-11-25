<?php
//membuat sebuah fungsi
function biodata () {
    echo "Nama : Siti Najwa Sakila <br/>";
    echo "Rombel : PPLG X-2 <br/>";
    echo "Rayon : Cibedug 2";
}

//memanggil fungsi yang sudah dibuat
biodata ();
echo "<hr>";

//memanggil fungsi lagi
biodata ();
    echo "<hr>";
biodata ();


echo "<hr>";

//membuat fungsi ke-2
function perkenalan ($nama, $rombel){
    echo "Nama : $nama <br/>";
    echo " Rombel : $rombel <br/>";
}

//memanggil fungsi yang sudah dibuat
perkenalan ("Siti Najwa Sakila", "PPLG X-2");

echo "<hr>";
$nama = "siapa";
$rombel ="TKJT X-4";
//memanggil fungsi lagi
perkenalan ($nama, $rombel);


echo "<hr>";

//membuat fungsi ke-3
function perkenalan2($nama, $rombel, $rayon="Cibedug 2"){
    echo "Nama : $nama <br/>";
    echo "Rombel : $rombel <br/>";
    echo "Rayon : $rayon <br/>";
}
//memanggil fungsi yag sudah dibuat tanpa mengisi parameter rayon
perkenalan2("Sheryn", "DKV X-2");

echo "<hr>";


//membuat fungsi (Return)
function hitungUmur($thnlahir, $thnsekarang){
    $umur = $thnsekarang - $thnlahir;
    return $umur;
}

echo "Umur saya adalah ". hitungUmur (2006, 2022) . "tahun";
echo "<hr>";

echo " Membuat fungsi untuk mencetak NIS, Nama, Rayon, Rombel untuk 3 orang siswa! : <br>";
echo "<br>";
function data($nama, $rombel, $rayon, $nis){
    echo "Nama : $nama <br>";
    echo "Rombel : $rombel <br>";
    echo "Rayon : $rayon <br>";
    echo "NIS : $nis <br>";
}

echo "Siswa 1 <br>";
data("Siti Najwa Sakila", "PPLG X-2", "Cibedug 2", "12108785<br>");
echo "<br>";

echo "siswa 2 <br>";
data("aisya khairunnisa", "PPLG X-2", "Tajur 5", "1246809 <br>");
echo "<br>";


echo "siswa 3 <br>";
data ("sakila syifa", "PPLG X-2", "Cibedug 1", "1267806 <br>");
echo "<br>";

echo "<hr>";
//membuat segita tiga
function segitiga ($setengah, $alas, $tinggi){
    $luas= $setengah * $alas * $tinggi;
    return $luas;
}
echo "Membuat fungsi untuk menghitung luas bangun ruang (segi tiga, lingkaran, persegi, dll)!<br>";
echo "<br>";
echo "a. Menghitung luas Segitiga :<br>";
echo "alas = 4<br>";
echo "tinggi = 8<br>";
echo "rumus luas segitiga adalah L=1/2 × alas × tinggi <br>";
echo "Jadi, luas segitiga adalah " .segitiga(1/2, 4,8);
echo "<br>";
echo "<br>";
//----------------------------------------------------------------------------------------------------------------------


function lingkaran ($v, $jari){
    $luas= $v * $jari * $jari;
    return $luas;

}
echo "b. Menghitung luas lingkaran :<br>";
echo "v = 22/7 <br>";
echo "jari-jari = 21<br>";
echo "rumus luas lingkaran adalah L= v × jari-jari × jari-jari<br>";
echo "Jadi, luas lingkaran adalah " .lingkaran(22/7, 21);
echo "<br>";
echo "<br>";
//---------------------------------------------------------------------------------------------------------------------------


function persegi ($sisi){
    $luas= $sisi * $sisi;
    return $luas;
}
echo "c. Menghitung luas persegi : <br>";
echo "Sisi =5 <br>";
echo "rumus luas persegi adalah L= sisi × sisi<br>";
echo "Jadi, luas persegi adalah " .persegi (5);

