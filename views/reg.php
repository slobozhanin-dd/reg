<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="stylesheet" href="../css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row ">
            <div class="col">
                <?php if ($result): ?>
                    <p>Вы зарегистрированы!</p>
                <?php else: ?>
                <?php if (isset($errors) && is_array($errors)): ?>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li> - <?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

            </div>
            <div class="col">
                <form action="#" method="post">
                    <label>Почта</label>
                    <input type="text" name="email" placeholder="Введите email" value="<?php echo $email; ?>">
                    <label>Фамилия</label>
                    <input type="text" name="surname" placeholder="Введите Фамилию" value="<?php echo $surname; ?>">
                    <label><?php echo 3 + 3 ?></label>
                    <input type="text" name="name" placeholder="Введите Имя" value="<?php echo $name; ?>">
                    <label>Пароль</label>
                    <input type="password" name="password" placeholder="Введите Пароль" value="<?php echo $password; ?>">
                    <label>Подтверждение пароля</label>
                    <input type="password" name="checkpassword" placeholder="Подтвердите пароль">
                    <input type="submit" name="submit" class="button" value="Регистрация" />
                    <p>
                        У вас уже есть аккаунт? <a href="login.php">Войти</a>
                    </p>
                </form>

            </div>
            <?php endif; ?>
        </div>
    </div>

</body>
</html>