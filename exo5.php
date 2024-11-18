<?php
$connexion = readline( 'mettez le mot magique :' );
$goodMot = "ici c'est Paris !!!";

if ($connexion === $goodMot) {
    echo 'connexion réussi !';
} else {
    echo 'connexion echouée ';
}
?>