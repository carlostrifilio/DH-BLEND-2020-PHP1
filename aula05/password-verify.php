<?php
// hashcriado para palavra rasmuslerdorf.
$hash = '$2y$07$BCryptRequires22Chrcte/VlQH0piJtjXl.0t1XkA8pw9dMXTpOq';

if (password_verify('rasmuslerdorf', $hash)) {
    echo 'senha é valida!';
} else {
    echo 'senha inválida.';
}
?>