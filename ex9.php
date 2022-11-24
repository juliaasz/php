<?php
// O Maia adora vender figurinhas do pokemon
//Ele tem 420 figurinhas repetidas
// Ele está vendendo cada figurinha por R$ 2 cada
// Quanto ele vai ganhar se vender 305 figurinhas?
// Quanto ele ainda pode lucrar com elas?


$totalfigurinhas = 420;
$vendidas= 305;
$lucro = $vendidas * 2;
$sobraram = ($totalfigurinhas - $vendidas) * 2;

echo 'Quanto ele vai ganhar se vender 305 figurinhas? R$' . $lucro;
echo '<br>';
echo 'Quanto ele ainda pode lucrar com elas? R$' . $sobraram;


?>