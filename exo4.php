<?php
$nombre = readline('donnez-nous un nombre : ');
if ($nombre > 0) {
    echo 'cest positif';
}elseif ($nombre == 0) {
    echo 'cest egale a 0';
}else {
    echo 'cest negatif';
}
?>