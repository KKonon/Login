<?php
if(isset($_COOKIE)){
    setcookie('login', $login, time() -10, '/');
    setcookie('password', $password, time () -10, '/');

    header('Location: /login.php');
}