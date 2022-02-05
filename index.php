<?php require __DIR__ . '/auth.php';
    $loginCheck = auth_check($login, $password);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php if($loginCheck === null): ?>
<?php require_once('/login.php'); ?>

<?php else: ?>
    <h1>УРА</h1> <?php echo($loginCheck);?>
    <a href='/logout.php'>Выйти</a>
<?php endif; ?>
</body>
</html>