<?php

  for ($i=1; $i <= 100 ; $i++) {

    if ($i % 3 == 0 and $i % 5 == 0) {
      echo "FizzBuzz!!";
    }else
    if ($i % 3 == 0) {
      echo "Fizz!";
    }else
    if ($i % 5 == 0) {
      echo "Buzz!";
    }
    else {
      echo $i;
    }
    echo "<br>";

  }
?>

<!-- http://localhost/LetsEngineer/PHPjob/3-1/index.php -->
