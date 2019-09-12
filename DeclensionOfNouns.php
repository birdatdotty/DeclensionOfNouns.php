<?php
// from https://punbb.info/t-286.html#p577
class DeclensionOfNouns
{
  function get($count)
  {
    $rest = $count % 10;
    $number = (int) substr($count, -2, 2);
    if ($rest == 1 && $number != 11) return $this->form2;
    if (in_array($rest, array(2, 3, 4)) && !in_array($number, array(12, 13, 14)))
      return $this->form1;
    
    return $this->form3;
  }
  
  function __construct($form1='', $form2='', $form3='')
  {
    $this->form1 = $form1;
    $this->form2 =  $form2;
    $this->form3 = $form3;
  }
}
?>
