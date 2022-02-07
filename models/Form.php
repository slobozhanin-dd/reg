<?php

Class Form
{
    public static function createForm($options)
    {
        // Соединение с БД
        $db = Db::getConnection();

// Текст запроса к БД
        $sql = 'INSERT INTO form '
            . '(email, heading, comment, anonim, teg,'
            . 'gender)'
            . 'VALUES '
            . '(:email, :heading, :comment, :anonim, :teg,'
            . ':gender)';

// Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':email', $_SESSION['user'], PDO::PARAM_STR);
        $result->bindParam(':heading', $options['heading'], PDO::PARAM_STR);
        $result->bindParam(':comment', $options['comment'], PDO::PARAM_STR);
        $result->bindParam(':anonim', $options['anonim'], PDO::PARAM_INT);
        $result->bindValue(':teg', $options['teg'], PDO::PARAM_STR);
        $result->bindParam(':gender', $options['gender'], PDO::PARAM_STR);
        return $result->execute();

    }

    public static function checkHeading($heading)
    {
        if (!empty($heading)) {
            return true;
        }
        return false;
    }

    public static function checkComment($comment)
    {
        if (strlen($comment) >= 5) {
            return true;
        }
        return false;
    }

    public static function checkGender($gender)
    {
        if (!empty($gender)) {
            return true;
        }
        return false;
    }
}

