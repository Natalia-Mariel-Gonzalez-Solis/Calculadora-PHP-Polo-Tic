<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
    <link rel="icon" type="image/png" href="Calculator-Icon.png">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<h1 align="center">Calculadora PHP Simple</h1>
<form action="index.php" method="post">
  <input type="number" name="n1" value="0">
  <select class="" name="opciones">
  <option value="+">+</option>
  <option value="-">-</option>
  <option value="*">*</option>
  <option value="/">/</option>
</selec>
 <input type="number" name="n2" value="0">
 <input type="submit"  value="Calcular">
</form>  

<?php
if(isset($_POST["n1"]) && isset($_POST["n2"]) && isset($_POST["opciones"])){
    $numero1 = $_POST["n1"];
    $numero2 = $_POST["n2"];
    $opciones = $_POST["opciones"];
    $resultado = 0;
    if ($opciones == "+"){
        $resultado = $numero1 + $numero2;
    }

    else if ($opciones == "-"){
        $resultado = $numero1 - $numero2;
    }

    else if ($opciones == "*"){
        $resultado = $numero1 * $numero2;
    }

    else
    {
        $resultado = $numero1 / $numero2;
    }
    echo "<center><h2>RESULTADO:  $resultado</h2>";
}
?>
    
</body>
</html>