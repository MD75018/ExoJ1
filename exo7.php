<?php
$note1 = readline('ta note 1 : ');
$note2 = readline('ta note 2 : ');
$note3 = readline('ta note 3 : ');
$moyenne =  ($note1 + $note2 + $note3 ) / 3;
if ($moyenne >= 10) {
    echo 'Admis ta moyenne est de : ' .$moyenne. ' sur 20';
} else {
    echo'Refuser ta moyenne est de : ' .$moyenne. ' sur 20';
}



?>