<?php
  echo "Soal no.1 - String";
  $string = "D3 Rekayasa Perangkat Lunak Aplikasi";

  echo "<br>".substr($string, 3);
  echo "<br>".substr($string, -8);
  echo "<br>".substr($string, 3,24);

  echo "<br> -------------------------------- <br>";

  echo "Soal no.2 - Array, Replace <br>";
  $strings = array (
    'Saya adalah Abdullah',
    'Saya punya seekor kucing yang sangat lucu',
    'Setiap hari ku ajak dia bermain'
    );
  $search = array (
    'Abdullah',
    'kucing',
    'lucu',
    'bermain'
    );
  $replace = array (
    'Abdurrahman',
    'bebek',
    'gemuk',
    'berenang'
    );
  $replaced = str_replace ( $search, $replace, $strings );
  
  foreach ($replaced as $key => $value) {
  echo $value."<br>";
  }

  echo "<br> -------------------------------- <br>";

  echo "Soal no.3 - Enkripsi String <br>";
  $str = 'My Password';
  $user = 'username';
  echo sprintf("Enkripsi md5 pada %s is: %s\n", $str, md5($str.$user));
  echo '<br>';
  echo sprintf("Enkripsi sha1 pada %s is: %s\n",$str, sha1($str.$user));
  echo '<br>';
  echo sprintf("Enkripsi hash pada %s is: %s\n",$str, hash('gost',
  $str.$user));
  echo '<br>';

  echo "<br> -------------------------------- <br>";

  echo "Soal no.4 - Function <br>";
  function is_prime ($angka){
    if ($angka == 1){
    return false;
    }
    if ($angka == 2){
      return true;
    }

    $x = sqrt ($angka);
    $x = floor($x);


    for ($i = 2 ; $i<=$x ; ++ $i){
      if ( $angka % $i == 0){
        break;
      }
    }
    if ($x == $i-1){
      return true ;
    }else{
      return false;
    }
  }
  function cekPrima($n,$m){
    $jumlah = 0;
    for($i = $n; $i <= $m; $i ++){


      if(is_prime($i))
      {
        echo $i. ', ';
        $jumlah++;
      }
    }
    echo "<br> jumlah bilangan prima ".$jumlah." <br>";
  }
  cekPrima(0, 100);
?>