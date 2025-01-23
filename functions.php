<?php

/**
 * Calcula o salário anual baseado no mensal
 * 
 * @param float $salarioMensal Salário mensal
 * 
 * @return string $salarioAnual Salário anual 
 */
function calcularSalarioAnual(float $salarioMensal): string
{
    //13 salario, + 1/3 de férias
    $tercoDeFerias = $salarioMensal / 3;
    $salarioAnual = ($salarioMensal * 13) + $tercoDeFerias;
    return convertNumbertoBRL($salarioAnual);
}


/**
 * Calcula a quantidade de anos que falta para alguem se aposentar
 * 
 * @param int $idade Idade da pessoa
 * @param string $sexo Sexo da pessoa
 * 
 * @return int Quantidade de anos que falta para se aposentar
 */
function calcularFaltanteParaAposentadoria(int $idade, string $sexo): int 
{
    $total_para_aposentar = $sexo == 'M' ? IDADE_APOSENTADORIA_MASCULINA : IDADE_APOSENTADORIA_FEMININA;
    return $total_para_aposentar - $idade;
}

/**
 * Recebe um valor numerico e retorna um valor monetário
 * 
 * @param float $number Valor numérico
 * 
 * @return string Valor monetário
 */
function convertNumberToBRL (float $number): string 
{
    return number_format($number, 2 , ',', '.');
}