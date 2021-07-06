<?php
  //Deret Bilangan Fibonaci
  $angka_sebelumnya=0;
  $angka_sekarang=1;

  echo "$angka_sebelumnya $angka_sekarang";

  for ($i=0; $i<20; $i++)
  {
    $output = $angka_sekarang + $angka_sebelumnya;
    echo " $output";

    $angka_sebelumnya = $angka_sekarang;
    $angka_sekarang = $output;
  }

  echo "<br>=======================================<br>";

  //Deret Bilangan Prima
  for($i=1;$i<=200;$i++){
         $a = 0;
         for($j=1;$j<=$i;$j++){
             if($i % $j == 0){
                 $a++;
             }
         }
         if($a == 2){
          echo $i.' ';
         }
     }
?>
