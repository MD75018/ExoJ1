<?php
$user = readline('entrez votre age : ');
if ($user < 12) {
    echo 'vous etes un enfant';
} elseif ($user >= 12 && $user <= 17) {
    echo 'vous etes un ado';
} elseif ($user >= 18 && $user <= 64) {
    echo 'vous etes un adulte';
} else {
    echo 'vous etes un senior';
}
?>