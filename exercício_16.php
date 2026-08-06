<?php


function contarMaiusculas(senha){
    const match = senha.match(/[A-Z]/g);
    return match ? match.length : 0;
}

