<?php
function auth_check($login, $password) : bool{
    $users = require __DIR__ .'/config.ini';

    foreach($users as $user){
        if($login === $user['login'] && $password === $user['password']){
            return true;
        } 
    }

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