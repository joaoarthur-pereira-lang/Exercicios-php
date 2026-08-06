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

function classificarSeguranca(senha) {
  const tamanho = obterTamanho(senha);
  const temMaiuscula = contarMaiusculas(senha) > 0;
  const temMinuscula = contarMinusculas(senha) > 0;
  const temNumero = contarNumeros(senha) > 0;
  const temEspecial = contarCaracteresEspeciais(senha) > 0;
 
  const criteriosAtendidos = [
    temMaiuscula,
    temMinuscula,
    temNumero,
    temEspecial,
  ].filter(Boolean).length;
 
  const tamanhoMinimo = tamanho >= 8;

  if (!tamanhoMinimo || criteriosAtendidos <= 1) {
    return "Fraca";
  }
 
  if (criteriosAtendidos === 2) {
    return "Média";
  }
 
  if (criteriosAtendidos === 3) {
    return "Forte";
  }

  return "Muito Forte";
}

function analisarSenha(senha) {
  return [
    { criterio: "Letras maiúsculas", valor: contarMaiusculas(senha) },
    { criterio: "Letras minúsculas", valor: contarMinusculas(senha) },
    { criterio: "Números", valor: contarNumeros(senha) },
    { criterio: "Caracteres especiais", valor: contarCaracteresEspeciais(senha) },
    { criterio: "Tamanho da senha", valor: obterTamanho(senha) },
    { criterio: "Nível de segurança", valor: classificarSeguranca(senha) },
  ];
}



