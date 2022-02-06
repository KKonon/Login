<?php
if(!empty($_POST)){
    require_once("./auth.php");
    $login = $_POST['login'];
    $password = $_POST['password'];

    if(auth_check($login, $password)){
        setcookie('login', time() +1800);
        setcookie('password', time() +1800);

        header('Location: /index.php');
    } else {
        $error = 'Вы ввели неверные данные!';
    }
}

?>

<?php 
    if($error){
        echo $error;
    }
?>

    <form action="/login.php" method="POST">
        <input type ="text" name = "login" placeholder="Введите логин" />
        <input type ="password" name = "password" placeholder="*******" />
        <button>Вход</button>
    </form>
</body>
</html>