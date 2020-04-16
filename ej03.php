<?php

/*

Ejercicio 3: Repetir el ejercicio 1 sin poner el selector, se deberá poner cada operación con 
checkbox permitiendo seleccionar más de una operación, al presionar el botón se deberán hacer las solicitadas.

*/

?>

<html>

<head>
</head>

<body>
  <form name="form1" action="" method="post">
    Ingrese primer valor:
    <input type="text" name="n1">
    <br>
    Seleccione la operacion:
    <input type="checkbox" name="suma">suma
    <input type="checkbox" name="resta">resta
    <input type="checkbox" name="multi">multi
    <input type="checkbox" name="divi">divi
    <input type="checkbox" name="pote">pote
    <br>
    Ingrese segundo valor:
    <input type="text" name="n2">
    <br>
    <input type="submit" name="boton1" value="operar">
  </form>
</body>

</html>

<?php

if(isset($_POST["suma"])) {
  $suma = $_POST['n1'] + $_POST['n2'];
  echo "La suma es $suma <br>";
}
if (isset($_POST["resta"])) {
  $dif = $_POST['n1'] - $_POST['n2'];
  echo "La resta es $dif <br>";
}
if (isset($_POST["multi"])) {
  $mul = $_POST['n1'] * $_POST['n2'];
  echo "La multiplicacion es $mul <br>";
}
if (isset($_POST["divi"])) {
  $div = $_POST['n1'] / $_POST['n2'];
  echo "La division es $div <br>";
}
if (isset($_POST["pote"])) {
  $pote = pow($_POST['n1'] , $_POST['n2']);
  echo "La potencia es $pote <br>";
}

?>