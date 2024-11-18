<?php
$price = readline('Quel est le prix du produit? ');
$remise = $price * 0.1;
if ($price > 100) {
    echo 'vous avez  droit à une reduction de 10 %  avec le code promo << md7 >> au lieu de ' .$price. ' cest ' . $price - $remise .' €';
  
} else {
    echo 'vous devez payer '.$price .' €';
}
?>