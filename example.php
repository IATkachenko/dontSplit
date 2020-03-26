#!/usr/bin/php
<?php
  include "./sum.php";
  $a = 5;
  $b = 5;
  $c = 5;
  $d = 1;
  $e = 4;

  echo "Result is: ";
  echo sum($a, $b)*$c/sum($d,$e);
  echo "\n"
?>
