<?php
/*
Ejercicio 2: Hacer un formulario que tenga 10 input numéricos y el botón enviar. Con los datos cargados se debe hacer lo siguiente

A. Detectar que todos sean números, si uno no lo es se alerta en pantalla y se borra del grupo
B. Calcular el promedio de todos los números
C. Ordenar de mayor a menor
D. Ordenar de menor a mayor
E. Invertir el orden de los números
F. Buscar el mayor y el menor de todos.
*/
?>

<html>

<head>
</head>

<body>
  <form name="form1" action="" method="post">
  <input type="text" name="n[]"><br>
  <input type="text" name="n[]"><br>
  <input type="text" name="n[]"><br>
  <input type="text" name="n[]"><br>
  <input type="text" name="n[]"><br>

  <input type="submit" name="submit" value="operar">
  </form>
</body>

</html>

<?php 

  if(isset($_POST['submit'])) {
    
    $a = $menmmay = $maymen = $invertido = array();

    // A
    foreach($_POST['n'] as $num) {
      // Si no es numerico, error
      if(!is_numeric($num)) {
        echo "Error, uno no es numerico";
      }
      // Suma todo el array
      $total = array_sum($_POST['n']);
      // B, promedio del array
      $prom = $total/count($_POST['n']);
      
      $a[] = $num;
      $menmay[] = $num;
      $maymen[] = $num;
      $invertido[] = $num;
    }
    echo "<pre>", print_r($a,1), "</pre>";

    // D Menor a Mayor
    sort($menmay);
    
    // C Mayor a Menor
    rsort($maymen);

    echo "<pre>", print_r($menmay,1), "</pre>";
    echo "<pre>", print_r($maymen,1), "</pre>";

    // E invertir array
    echo "<pre>", print_r(array_reverse($invertido),1), "</pre>";

    echo "<pre>", print_r($a,1), "</pre>";
    echo "Sumatoria de todos los numeros: " . $total . "<br>";
    echo "Promedio de todos los numeros: " . $prom . "<br>";

    // F mayor y menor
    echo "Mayor del array: " . max($a) . "<br>";
    echo "Menor del array: " . min($a) . "<br>";
  }

?>