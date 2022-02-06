<?php
function auth_check($form_login, $form_password) : bool{
    require __DIR__ .'/config.php';


    if (password_verify($form_login, $login) && password_verify($form_password, $password)) return true;
    return false;
}

function check_cookie(){
    $login = $_COOKIE['login'];
    $password = $_COOKIE['password'];
    if(auth_check($login, $password)){
        return $login;
    }

    return null;
}