 <!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <title>Operator</title> 
</head>
<body>
    <h2>Menghitung luas Bangun Datar</h2>
    <br>


    <?php

      $a = 5;
      $b = 2;
      echo "Materi Awal :";
      echo "<br>";

      //Penjumlahan
      $c = $a + $b;
      echo "$a + $b = $c";
      echo "<cr>";

      //Pengurangan
      $c = $a - $b;
      echo "$a - $b = $c";
      echo "<br>";
      echo "<br>";


      //Perkalian
      $c = $a * $b;
      echo "$a * $b = $c";
      echo "<br>";
      echo "<br>";


      //Pembagian
      $c = $a / $b;
      echo "$a / $b = $c";
      echo "<br>";
      echo "<br>";


      //Sisa bagi
      $c = $a % $b;
      echo "$a % $b = $c";
      echo "<br>";
      echo "<br>";


      //Pangkat
      $c = $a ** $b;
      echo "$a ** $b = $c";
      echo "<br>";
      echo "<hr>";


      //-------------------------------------------------------


    //menghitung luas segitiga
    $alas= 8;
    $tinggi= 2;
    //rumus luas segitiga
    $luassegitiga= ($alas * $tinggi)/2;
    //tampilkan
   echo "Menghitung Luas Persegi :";
    echo "<br>";
   echo "alas =" . $alas;
   echo "<br>";
   echo "tinggi =" . $tinggi;
   echo "<br>";
   echo "penyelesaian =" . "(" . $alas. "*" . $tinggi . ")/". 2 . "<br>";
   echo "hasil =" . $luassegitiga;
   echo "<br>";
   echo "<hr>";



//luas persegi
$sisi = 4;
$luaspersegi = ($sisi * $sisi);
echo "Menghitung Luas Persegi :";
echo"<br>";
echo "$sisi" . $sisi;
echo "<br>";
echo "sisi=" . $sisi;
echo "<br>";
echo "penyelesaian =" . "(" . $sisi. "*" .$sisi . ")";
echo "<br>";
echo "hasil=" .$luaspersegi;
echo "<br>";
echo "<hr>";





//persegi panjang
$panjang = 5;
$lebar = 2;
//rumus luas persegi panjang
$luaspersegipanjang = ($panjang * $lebar);
echo "Menghitung Luas Persegi Panjang :";
echo "<br>";
echo "panjang =" . $panjang;
echo "<br>";
echo "lebar =" . $lebar;
echo "<br>";
echo "penyelesaian =" . "(" . $panjang. "*" . $lebar . ")/";
echo "hasil =" . $luaspersegipanjang;
echo"<br>";
echo"<hr>";




//jajar genjang
$alas= 7;
$tinggi= 3;

    //rumus luas jajr genjang
    $luasjajargenjang= ($alas * $tinggi);

    //tampilkan
   echo "Menghitung Luas Jajar genjang :";
   echo "<br>";
   echo "alas =" . $alas;
   echo "<br>";
   echo "tinggi =" . $tinggi;
   echo "<br>";
   echo "penyelesaian =" . "(" . $alas. "*" . $tinggi . ")";
   echo "<br>";
   echo "hasil =" . $luasjajargenjang;
   echo "<br>";
   echo "<hr>";



   //luaslingkaran
$r= 4;
$v= "3,14";
//rumusluaslingkaran
$luaslinkaran= "($r *$r * $v)";

//tampilkan
echo "Menghitung Luas Lingkaran :";
echo "<br>";
echo "r =" . $r;
echo "<br>";
echo "r =" . $r;
echo "<br>";
echo "v =" . $v;
echo "<br>";
echo "penyelesaian =" . "(" . $r."*" . $r."*" . $v . ")";
echo "<br>";
echo "hasil =" . $luaslinkaran;
echo "<br>";
echo "<hr>";



$setengah= 2;
$sisiatas=8;
$sisibawah=6 ;
$tinggi= 4;
$luastrapesium= ($sisiatas + $sisibawah * $tinggi)/$setengah;
//menghitungluastrapsium
echo "Menghitung Luas Trapesium :";
echo "<br>";
echo "sisiatas=" . $sisiatas;
echo "<br>";

echo "sisibawah=" . $sisibawah;
echo "<br>";
echo "tinggi" . $tinggi;
echo "<br>";
echo "penyelesaian =" . "(" . $sisiatas. "+" . $sisibawah. "*" . $tinggi .")/.2."; 
echo "<br>";
echo "hasil=" . $luastrapesium;
echo "<hr>";




   ?>

</body>
</html>