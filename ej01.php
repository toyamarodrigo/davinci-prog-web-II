<?php

/*
Ejercicio 1: Hacer un formulario que contenga un input donde escribir números, un selector, otro input y un botón de enviar.  El selector debe tener los siguientes elementos

Suma
Resta
División
Multiplicación
Potencia

	Al presionar enviar se debe hacer el cálculo seleccionado
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
    <select name="calculo">
      <option value="suma">suma</option>
      <option value="resta">resta</option>
      <option value="multi">multi</option>
      <option value="divi">divi</option>
      <option value="pote">pote</option>
    </select>
    <br>
    Ingrese segundo valor:
    <input type="text" name="n2">
    <br>
    <input type="submit" name="boton1" value="operar">
  </form>
</body>

</html>

<?php

if(isset($_POST["calculo"]) && $_POST["calculo"] == 'suma') {
  $suma = $_POST['n1'] + $_POST['n2'];
  echo "La suma es $suma <br>";
}
if (isset($_POST["calculo"]) && $_POST["calculo"] == "resta") {
  $dif = $_POST['n1'] - $_POST['n2'];
  echo "La resta es $dif <br>";
}
if (isset($_POST["calculo"]) && $_POST["calculo"] == "multi") {
  $mul = $_POST['n1'] * $_POST['n2'];
  echo "La multiplicacion es $mul <br>";
}
if (isset($_POST["calculo"]) && $_POST["calculo"] == "divi") {
  $div = $_POST['n1'] / $_POST['n2'];
  echo "La division es $div <br>";
}
if (isset($_POST["calculo"]) && $_POST["calculo"] == "pote") {
  $pote = pow($_POST['n1'] , $_POST['n2']);
  echo "La potencia es $pote <br>";
}

?>