<?php
$lePrix = readline("donnez un prix : ");
$tva = $lePrix * 0.20;
$avec = $lePrix + $tva;
echo 'le prix sans tva est de  ' .$lePrix  .' € '."\n" ." avec la tva ça fait " . $avec. ' €' ;


?>
