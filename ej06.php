<?php

// Ejercicio 6: Ingresar una serie de 10 números e indicar cuales son números primos y cuáles no.

?>

<html>

<head>
</head>

<body>
  <form name="form1" action="" method="post">
    n1<input type="text" name="n[]"><br><br>
    n2<input type="text" name="n[]"><br><br>
    n3<input type="text" name="n[]"><br><br>
    n4<input type="text" name="n[]"><br><br>
    n5<input type="text" name="n[]"><br><br>
    n5<input type="text" name="n[]"><br><br>
    n5<input type="text" name="n[]"><br><br>
    n5<input type="text" name="n[]"><br><br>
    n5<input type="text" name="n[]"><br><br>
    n5<input type="text" name="n[]"><br><br>
    n5<input type="text" name="n[]"><br><br>
    n5<input type="text" name="n[]"><br><br>
    n5<input type="text" name="n[]"><br><br>
    n5<input type="text" name="n[]"><br><br>
    n5<input type="text" name="n[]"><br><br>
    n5<input type="text" name="n[]"><br><br>
    n5<input type="text" name="n[]"><br><br>

    <input type="submit" name="submit" value="operar">
  </form>
</body>

</html>


<?php

$n = array();

if (isset($_POST['submit'])) {
  foreach ($_POST['n'] as $num) {
    $n[] = $num;
    $arrlength = count($n);
  }
  echo "<pre>", print_r($n, 1), "</pre>";

  for ($i = 0; $i < $arrlength; $i++) {
    if ($n[$i] == 1) {

      echo $n[$i] . " 1 no es primo<br>";
    } elseif ($n[$i] == 2) {

      echo $n[$i] . " 2 es primo<br>";
    } elseif ($n[$i] % 2 == 0) {

      echo $n[$i] . " no es primo<br>";
    } else {

      for ($j = 3; $j <= ceil(sqrt($n[$i])); $j = $j + 2) {
        if ($n[$i] % $j == 0) {
          echo $n[$i] . " 3no es primo<br>";
        }
      }
      if ($n[$i] % $j != 0) {
        echo $n[$i] . " Aes primo<br>";
      }
    }
  }
}





?>