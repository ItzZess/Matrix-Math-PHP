<?php
// $matriksA = array(
// array(10,7,5),
// array(3,19,3),
// array(8,3,0)
// );
// $matriksB = array(
// array(8,-6,2),
// array(13,-9,4),
// array(2,2,20)
// );
require "input.php";
for ($i = 0; $i < count($matriks); $i++):
for ($j = 0; $j < count($matriks[$i]); $j++):
echo $matriks[$i][$j]+$matriks[$i][$j];
echo ",";
endfor;
echo "<br>";
endfor;
?>