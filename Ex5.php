<?php

function temTamanhoMinimo($senha) {
    return strlen($senha) >= 8;
}


function temNumero($senha) {
    for ($i = 0; $i < strlen($senha); $i++) {
        if (is_numeric($senha[$i])) {
            return true;
        }
    }
    return false;
}


function temMaiuscula($senha) {
    for ($i = 0; $i < strlen($senha); $i++) {
        if (ctype_upper($senha[$i])) {
            return true;
        }
    }
    return false;
}


function senhaValida($senha) {
    return temTamanhoMinimo($senha) &&
           temNumero($senha) &&
           temMaiuscula($senha);
}


$senha = "Senha123";

if (senhaValida($senha)) {
    echo "Senha válida meu rei!";
} else {
    echo "Senha inválida cabaço!";
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
    
</body>
</html>