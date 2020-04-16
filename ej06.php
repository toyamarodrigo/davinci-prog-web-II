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

    <input type="submit" name="submit" value="operar">
  </form>
</body>

</html>


<?php

$n = array();

if (isset($_POST['submit'])) {

  foreach ($_POST['n'] as $num) {

    $n[] = $num;
    $c = count($n);

  }

  echo "<pre>", print_r($n,1), "</pre>";


}





?>