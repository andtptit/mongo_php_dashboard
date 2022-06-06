<?php 

$a = 'admin';
echo password_hash($a, PASSWORD_DEFAULT);

$b = '$2y$10$JM1nRvA36KYJYBNTCX7AQ.hOhP6IBtKC.B8ux4ELJ1k8rXfEPI6yy';

var_dump(password_verify($a, $b));
?>