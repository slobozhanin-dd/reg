<?php

class FormController
{
    public function actionPost()
    {

        $userId = User::checkLogged();

        $heading = false;
        $comment = false;
        $gender = false;
        $successfulResult = '';


        if (isset($_POST['submit'])) {

            $options['heading'] = $_POST['heading'];
            $options['comment'] = $_POST['comment'];
            $options['anonim'] = $_POST['anonim'];
            $options['teg'] = implode(',' ,$_POST['teg']);
            $options['gender'] = $_POST['gender'];


            $errors = false;
            $heading = $_POST['heading'];
            $comment = $_POST['comment'];
            $gender = $_POST['gender'];

            if (!Form::checkHeading($heading)) {
                $errors[] = 'Введите заголовок';
            }
            if (!Form::checkComment($comment)) {
                $errors[] = 'Комментарий не может быть короче 5 символов';
            }
            if (!Form::checkGender($gender)) {
                $errors[] = 'Укажите ваш пол';
            }


            if ($errors == false) {
                Form::createForm($options);

                $successfulResult = "Комментарий отправлен!";
            }
        }

        require_once(ROOT . '/views/form.php');
        return true;
    }


}
