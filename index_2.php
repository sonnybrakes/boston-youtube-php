<?php
$name = 'Mitch';
$age = 21;
if (strtolower($name)==='mitch') {
  if ($age>=21) {
    echo 'You\'re over 21';
    if (1===1) {
      echo 'Yes, 1 is equal to 1!';
    }
  } else {
    echo 'Not over 21.';
  }
} else {
  echo 'You\'re not Mitch!';
}?>
