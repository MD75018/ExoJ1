<?php
$annee = readline('entrez une année : ');
$bis = $annee  %  4 === 0;
if ($annee = $bis ) {
    echo $annee.  ' cest une année bissextile';
}

?>