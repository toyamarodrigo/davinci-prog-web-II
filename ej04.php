<?php

/**
 * Ejercicio 4: Repetir el ejercicio 2, se deberá poner cada operación con checkbox permitiendo seleccionar 
 * más de una operación, al presionar el botón se deberán hacer las solicitadas.
 */

/**
 * Detectar que todos sean números, si uno no lo es se alerta en pantalla y se borra del grupo
 * Calcular el promedio de todos los números
 * Ordenar de mayor a menor
 * Ordenar de menor a mayor
 * Invertir el orden de los números
 * Buscar el mayor y el menor de todos
 * 
 */


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

    <input type="checkbox" name="op1"> Detectar numeros, sino se borra<br>
    <input type="checkbox" name="op2"> Calcular promedio<br>
    <input type="checkbox" name="op3"> Mayor a menor<br>
    <input type="checkbox" name="op4"> Menor a Mayor<br>
    <input type="checkbox" name="op5"> Invertir orden<br>
    <input type="checkbox" name="op6"> Mayor y Menor<br><br>

    <input type="submit" name="submit" value="operar">
  </form>
</body>

</html>

<?php
if (isset($_POST['submit'])) {

  $a = $menmmay = $maymen = $invertido = array();
  $txt = "Son todos numeros";

  foreach ($_POST['n'] as $num) {

    if (!is_numeric($num)) {
      $txt = "Error, uno no es numerico";
    }

    // Suma todo el array
    $total = array_sum($_POST['n']);
    // B, promedio del array
    $prom = $total / count($_POST['n']);

    $a[] = $num;
    $menmay[] = $num;
    $maymen[] = $num;
    $invertido[] = $num;
  }
  echo "Array Original <br>";
  echo "<pre>", print_r($a,1), "</pre>";

  if (isset($_POST["op1"])) {
    // A
    echo $txt . "<br>";
  } 
  
  if (isset($_POST["op2"])) {
    // B
    echo "Sumatoria de todos los numeros: " . $total . "<br>";
    echo "Promedio de todos los numeros: " . $prom . "<br><br>";
  } 
  
  if (isset($_POST["op3"])) {
    // C Mayor a Menor
    rsort($maymen);
    echo "Array Ordenado de Mayor a Menor <br>";
    echo "<pre>", print_r($maymen,1), "</pre>";
  } 
  
  if (isset($_POST["op4"])) {
    // D Menor a Mayor
    sort($menmay);
    echo "Array Ordenado de Menor a Mayor <br>";
    echo "<pre>", print_r($menmay,1), "</pre>";
  } 
  
  if (isset($_POST["op5"])) {
    // E invertir array
    echo "Array con orden Invertido <br>";
    echo "<pre>", print_r(array_reverse($invertido), 1), "</pre>";
  } 
  
  if (isset($_POST["op6"])) {
    // F mayor y menor
    echo "Mayor del array: " . max($a) . "<br>";
    echo "Menor del array: " . min($a) . "<br>";
  }
}

?>