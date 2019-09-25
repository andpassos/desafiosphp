<?php

$altura = 1.70;
$peso = 70;


$imc = ($peso/ ($altura * $altura));

if ($imc >40 ){
    echo " O resultado do " . "$imc" . "é  Obesidade grau 3.";

}elseif ($imc > 35 &&  $imc < 39.9 ){
    echo " O resultado do " . "$imc" . " é Obesidade grau 2.";

}elseif ($imc > 30 &&  $imc <34.9 ){
    echo " O resultado do " . "$imc" . " é Obesidade grau 1.";

}elseif ($imc > 25 &&  $imc <29.9 ){
    echo " O resultado do " . "$imc" . " é Sobrepeso.";

}elseif ($imc > 18.5 && $imc <24.9){
    echo " O resultado do " . "$imc" . " Peso normal";

}else{
    echo " O resultado do " . "$imc" . " é Abaixo do peso.";

}

?>