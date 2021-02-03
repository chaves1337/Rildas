<?php

    $usuarios_app = array(
        array('email' => 'adm@teste.com.br', 'password' => '123456'),
        array('email' => 'adm2@teste.com.br', 'password' => '123456')
    );

/*
echo '<pre>';
print_r($usuarios_app);
echo'</pre>';
*/

    foreach($usuarios_app as $user){
        $user['email'];
        $user['password'];
        echo'<hr>';
    }

?>