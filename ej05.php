<?php

// Ejercicio 5: Ingresar una serie de 10 números e indicar cuales son pares y cuáles impares

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

if (isset($_POST['submit'])) {

  foreach($_POST['n'] as $num) {
    if($num % 2 == 0) {
      echo $num . " es par <br>";
    } else {
      echo $num . " es impar <br>";
    }
  }


}
?>