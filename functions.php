<?php

//calculo salário anual
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

//anos para se aposentar


//transfornmar um numero em valor monetario
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