<?php

function gerarSenha($quantidade) {
    $letrasMinusculas = 'abcdefghijklmnopqrstuvwxyz';
    $letrasMaiusculas = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numeros = '0123456789';
    $caracteresEspeciais = '!@#$%^&*()_-+=<>?';

    $todosCaracteres = $letrasMinusculas . $letrasMaiusculas . $numeros . $caracteresEspeciais;

    $senha = '';
    $tamanhoTotal = strlen($todosCaracteres);

    for ($i = 0; $i < $quantidade; $i++) {
        $indiceAleatorio = random_int(0, $tamanhoTotal - 1);
        $senha .= $todosCaracteres[$indiceAleatorio];
    }

    return $senha;
}


echo gerarSenha(12) . "\n";
?>