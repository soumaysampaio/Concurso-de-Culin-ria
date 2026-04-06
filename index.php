<?php
/**
 * EXERCÍCIO DE LÓGICA: CONCURSO DE CULINÁRIA
 */

// Critáerios de Avaliação
$tempo_limite = 60;
$critero_de_qualidade = 6.5;
$criterio_de_apresentacao = 7.0;
$criterio_de_tempo_percentual = 0.15;


// 1. Dados do Competidor
$nome = (string) readline("Digite o seu nome: ");
$idade = (int) readline("Digite a sua idade: ");
$especialidade = (string) readline("Digite a sua especialidade: ");

echo "\n=== Cadastro realizado: $nome ($idade anos), especialista em $especialidade ===\n\n";

// Coleta de Pontuações dos Pratos

echo "\n=== AVALIAÇÃO DOS 3 PRATOS ===\n";

// Qualidade
$qualidadeprato1 = (float) readline("Digite a pontuação de qualidade do prato 1 (0-10): ");
$qualidadeprato2 = (float) readline("Digite a pontuação de qualidade do prato 2 (0-10): ");
$qualidadeprato3 = (float) readline("Digite a pontuação de qualidade do prato 3 (0-10): ");

// Apresentação
$apresentacaoprato1 = (float) readline("Digite a pontuação de apresentação do prato 1 (0-10): ");
$apresentacaoprato2 = (float) readline("Digite a pontuação de apresentação do prato 2 (0-10): ");
$apresentacaoprato3 = (float) readline("Digite a pontuação de apresentação do prato 3 (0-10): ");

// Tempo (em minutos gastos)
$tempprato1 = (int) readline("Digite o tempo gasto para o prato 1 (em minutos): ");
$tempprato2 = (int) readline("Digite o tempo gasto para o prato 2 (em minutos): ");
$tempprato3 = (int) readline("Digite o tempo gasto para o prato 3 (em minutos): ");

//Cálculo das médias
$mediadequalidade = ($qualidadeprato1 + $qualidadeprato2 + $qualidadeprato3) / 3;
$mediaapresentacao = ($apresentacaoprato1 + $apresentacaoprato2 + $apresentacaoprato3) / 3;

// Cálculo do tempo total gasto
$tempostotal = ($tempprato1 + $tempprato2 + $tempprato3); 
$tempopermitido = ($tempolimite * 3);
$tempporcentual = ($tempostotal / $tempopermitido);

// Resultado Final
$notaqualidade = ($mediadequalidade >= $criterodequalidade);
$notaapresentacao = ($mediaapresentacao >= $criteriodeapresentacao);
$notatempo = ($tempporcentual <= $criteriodetempoprcentual);

// Entrega do Resultado
echo "\n=== RESULTADO FINAL ===\n";
echo "Competidor: $nome \n";
echo "Média de Qualidade: " . number_format($mediadequalidade, 2) . "\n";
echo "Média de Apresentação: " . number_format($mediaapresentacao, 2) . "\n";
echo "Tempo Total: $tempostotal minutos (Limite: $tempopermitido minutos) \n";


if ($notaqualidade && $notaapresentacao && $notatempo) {
    echo "Resultado: APROVADO! Parabéns, $nome! Você passou para a próxima fase do concurso de culinária.\n";
} 
else {
    echo "Resultado: REPROVADO. Infelizmente, $nome, você não atendeu aos critérios necessários para avançar no concurso de culinária.\n";
}

?>