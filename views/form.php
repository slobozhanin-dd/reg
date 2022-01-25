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
                <form action="" method="post"k>
                    <label>Заголовок</label>
                    <input type="text" placeholder="Введите заголовок">
                    <label>Комментарий</label>
                    <textarea name="comment" placeholder="Введите комментарий"></textarea>
                    <div class="radio">
                        <p><input type="radio" name="anonim" value="anonim" >  Анонимно</p>
                        <p><input type="radio" name="anonim" value="showName" checked>  Открыто</p>
                    </div>
                    <div>
                        <input type="checkbox" name="#" value="news" >#news
                        <input type="checkbox" name="#" value="moda" >#moda
                        <input type="checkbox" name="#" value="politic" >#politic
                    </div>
                    <select>
                        <option hidden="" >Вложения</option>
                        <option value="photo">Добавить фото</option>
                        <option value="audio">Добавить аудиозапись</option>
                        <option value="file">Добавить файл</option>
                    </select>
                    <button>Отправить</button>
                    <button id="reset" type="reset">Очистить</button>
                </form>
            </div>
        </div>
    </div>


</body>
</html>