<?php
// from https://punbb.info/t-286.html#p577
require ("DeclensionOfNouns.php");

$apple = new DeclensionOfNouns("яблока", "яблоко", "яблок");
$mail = new DeclensionOfNouns("письма", "письмо", "писем");

for ($i = 0; $i < 40 ; $i++)
{
//  echo $i." ".$mail->get($i)."\n";
  echo $i." ".$apple->get($i)."\n";
}
  echo "111 ".$apple->get(111)."\n";
  echo "92 ".$apple->get(92)."\n";
