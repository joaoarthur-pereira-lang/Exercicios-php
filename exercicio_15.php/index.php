<?php

include "funcoes.php";

echo "<h1>Biblioteca de Funções</h1>";

echo "<h2>1. Calcular IMC</h2>";
$imc = calcularIMC(70, 1.75);
echo "IMC: " . $imc;

echo "<h2>2. Validar e-mail</h2>";
$email = "teste@gmail.com";

if (validarEmail($email)) {
    echo "E-mail válido";
} else {
    echo "E-mail inválido";
}

echo "<h2>3. Gerar senha aleatória</h2>";
echo gerarSenha(10);

echo "<h2>4. Contar vogais</h2>";
echo contarVogais("Olá mundo");

echo "<h2>5. Inverter texto</h2>";
echo inverterTexto("Olá mundo");

echo "<h2>6. Calcular idade</h2>";
echo calcularIdade(2007) . " anos";

echo "<h2>7. Converter moeda</h2>";
echo "Valor convertido: R$ " . converterMoeda(100, 5);

echo "<h2>8. Formatar telefone</h2>";
echo formatarTelefone("47999999999");

echo "<h2>9. Saudação</h2>";
echo gerarSaudacao();

echo "<h2>10. Validar senha forte</h2>";

$senha = "Senha123";

if (validarSenhaForte($senha)) {
    echo "Senha forte";
} else {
    echo "Senha fraca";
}

?><?php

include "funcoes.php";

echo "<h1>Biblioteca de Funções</h1>";

echo "<h2>1. Calcular IMC</h2>";
$imc = calcularIMC(70, 1.75);
echo "IMC: " . $imc;

echo "<h2>2. Validar e-mail</h2>";
$email = "teste@gmail.com";

if (validarEmail($email)) {
    echo "E-mail válido";
} else {
    echo "E-mail inválido";
}

echo "<h2>3. Gerar senha aleatória</h2>";
echo gerarSenha(10);

echo "<h2>4. Contar vogais</h2>";
echo contarVogais("Olá mundo");

echo "<h2>5. Inverter texto</h2>";
echo inverterTexto("Olá mundo");

echo "<h2>6. Calcular idade</h2>";
echo calcularIdade(2007) . " anos";

echo "<h2>7. Converter moeda</h2>";
echo "Valor convertido: R$ " . converterMoeda(100, 5);

echo "<h2>8. Formatar telefone</h2>";
echo formatarTelefone("47999999999");

echo "<h2>9. Saudação</h2>";
echo gerarSaudacao();

echo "<h2>10. Validar senha forte</h2>";

$senha = "Senha123";

if (validarSenhaForte($senha)) {
    echo "Senha forte";
} else {
    echo "Senha fraca";
}

?>