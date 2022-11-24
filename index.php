<?php

    $password = '123XF*#.';

    // password_hash

    $hash = password_hash($password, PASSWORD_DEFAULT, ['cost' => 10]);
    echo $hash . '<br/>';

    //password_verify()
    if(password_verify($password, $hash)){
        echo 'El password es correcto';
    }

?>