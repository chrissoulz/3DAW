<?php
$v1 = $_GET["a"];
 $v2 = $_GET["b"];
 $op = $_GET["op"];

 switch ($op) {
    case "+":
        $resultado = $v1 + $v2;
        break;
    case "-":
        $resultado = $v1 - $v2;
        break;
    case "*":
        $resultado = $v1 * $v2;
        break;
    case "/":
        $resultado = $v1 / $v2;
        break;
}
?>
<!DOCTYPE html>
<head>
    <title>Resultado</title>
</head>
<body>
    <?php echo "<h1>Resultado: $resultado</h1>"; ?>
</body>
</html>

