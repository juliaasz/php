<?php

/*  Faça um programa para uma loja de tintas. O programa deverá pedir o tamanho 
em metros quadrados da área a ser pintada. Considera que a cobertura da tinta é de 1 litro para cada 3 metros quadrados e que a tinta é vendida em latas de 18 litros, que custam R$ 80,00. informe ao usuário a quantidade de latas de tinta a serem compradas e o preço total.




o programa deverá pedir o tamanho em metros quadrados da área a ser pintada
1 litro para cada 3 metros quadrados
18 litros   -  80,00

*/


$metro = '3000';
$tinta = ($metro / 3)/18;
echo 'Você terá que comprar ' . intval($tinta) . 'latas de tintas de 18 Litros';













?>