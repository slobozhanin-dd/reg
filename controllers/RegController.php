<?php

class RegController
{
    //Добавление нового пользователя
    public function actionReg()
    {


        $name = false;
        $surname = false;
        $email = false;
        $password = false;
        $result = false;


        if (isset($_POST['submit'])) {

            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;

            if (!User::checkName($name)) {
                $errors[] = 'Имя не должно быть короче 2-х символов';
            }
            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильный email';
            }
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }
            if (User::checkEmailExists($email)) {
                $errors[] = 'Такой email уже используется';
            }

            if ($errors == false) {

                $result = User::register($name, $surname, $email, $password);

                header("Location: /views/login.php");
            }
        }

        require_once(ROOT . '/views/reg.php');
        return true;
    }
}