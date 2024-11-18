<?php
$chiffre = readline('choisi un chiffre : ');
$goodChiffre = rand(1 , 10 );
if ($chiffre == $goodChiffre) {
    echo 'cest juste !';
}else {
    echo'cest pas juste';
}

?>