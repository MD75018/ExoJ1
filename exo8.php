<?php
$user = readline("donne un chiffre : ");
$user1 = readline("donne un chiffre : ");
if ($user > $user1) {
    echo $user .' est plus grand que ' .$user1;
}elseif ($user === $user1) {
    echo 'Les deux nombres sont égaux';
}else {
    echo $user1 .' est plus grand que ' .$user;
}
?>