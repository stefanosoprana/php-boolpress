<?php

function dateFormat($date) {

  $newdate = DateTime::createFromFormat('d/m/Y H:i:s', $date);

  echo $newdate->format('j F').' at ';
  echo $newdate->format('H');

};

 ?>
