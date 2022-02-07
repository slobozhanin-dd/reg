<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>forma</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <?php if (isset($errors) && is_array($errors)): ?>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li> - <?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                <form action="" method="post" enctype="multipart/form-data">
                    <label>Заголовок</label>
                    <input type="text" name="heading" placeholder="Введите заголовок">
                    <label>Комментарий</label>
                    <textarea name="comment" placeholder="Введите комментарий"></textarea>
                    <div class="radio">
                        <p><input type="radio" name="anonim" value="0" >  Анонимно</p>
                        <p><input type="radio" name="anonim" value="1" checked>  Открыто</p>
                    </div>

                    <div>
                        <input name="teg[]" value="" type="hidden">
                        <input type="checkbox" name="teg[]" value="1" >#news
                        <input type="checkbox" name="teg[]" value="2" >#moda
                        <input type="checkbox" name="teg[]" value="3" >#politic
                    </div>
                    <select name="gender">
                        <option hidden="" value="">Ваш пол</option>
                        <option type="text" value="male" >Мужской</option>
                        <option type="text" value="female">Женский</option>
                        <option type="text" value="another">Другое</option>
                    </select>
                    <input type="submit" name="submit" class="button" value="Отправить" />
                    <button id="reset" type="reset">Очистить</button>
                </form>
                <p id="result"><?php print_r($successfulResult); ?></p>

            </div>
        </div>
    </div>


</body>
</html>