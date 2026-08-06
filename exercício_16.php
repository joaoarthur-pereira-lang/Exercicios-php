<?php


 function contarMaiusculas(senha) {
    const match = senha.match(/[A-Z]/g);
    return match ? match.length : 0;
}

function contarMinusculas(senha) {
    const match = senha.match(/[a-z]/g);
    return match ? match.length : 0;
}

function contarNumeros(senha) {
    const match = senha.match(/[0-9]/g);
    return match ? match.length : 0;
}

function contarCaracteresEspeciais(senha) {
    const match = senha.match(/[^a-zA-Z0-9]/g);
    return match ? match.length : 0;
}

function obterTamanhoSenha(senha) {
    return senha.length;
}

function classificarSegurança


