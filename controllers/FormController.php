<?php

class FormController
{
    public function actionPost()
    {
        $userId = User::checkLogged();

        require_once(ROOT . '/views/form.php');
        return true;
    }
}
