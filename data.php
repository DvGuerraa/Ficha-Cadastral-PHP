<?php

$nome = "Davi";
$idade = "18";
$sexo = "M";
$salário_mensal = 1500.00;
$esta_empregado = true;
$habilidades = ['PHP', 'HTML', 'CSS', 'Java'];

$situaçãoEmprego = null;
$situaçãoEmprego = $esta_empregado == true ? 'Empregado' : 'Desempregado';


$total_para_aposentar = $sexo == 'M' ? IDADE_APOSENTADORIA_MASCULINA : IDADE_APOSENTADORIA_FEMININA;


?>