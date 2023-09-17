<?php
require "input.php";
for ($i = 0; $i < count($matriks); $i++):
for ($j = 0; $j < count($matriks[$i]); $j++):
echo $matriks[$i][$j];
endfor;
echo "<br>";
endfor;
?>