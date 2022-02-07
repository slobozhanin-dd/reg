<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
    <link rel="stylesheet" href="../css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container ">
        <div class="row ">
            <div class="col">

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
                    <label>Логин</label>
                    <input type="text" name="email" placeholder="Введите логин" value="<?php echo $email; ?>">
                    <label>Пароль</label>
                    <input type="password" name="password" placeholder="Введите пароль" value="<?php echo $password; ?>">
                     <input type="submit" name="submit" class="button" value="Войти" />
                    <p>
                        У вас нет аккаунта? <a href="reg">Зарегистрироваться</a>
                    </p>
              </form>
            </div>

        </div>
    </div>

</body>
</html>