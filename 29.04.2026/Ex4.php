<?php

function maior_numero(int $a, int $b, int $c) : int {
    return max($a , $b, $c);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
O maior número é: <?=maior_numero(3.5,6,22);?>
</body>
</html>