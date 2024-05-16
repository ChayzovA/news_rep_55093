<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body class="reg-body">
    <header>
        <div class="name">
            <h1>Новостной сайт</h1>
        </div>
        <div class="header">
            <a href="reg.php">Регистрация</a>
            <a href="add_news.php">Добавить новости</a>
            <a href=""></a>
            <a href=""></a>
        </div>
    </header>
    <main>
    <article>
        <form class="id" action="script/do_auth.php" method="POST">
            <h2 class="reg">Авторизация</h2>
            <label for="email">Почта</label>
            <input name="email" type="email" placeholder = "email">
            <label for="password">Пароль</label>
            <input name="password" type="password" placeholder = "password">
            <button>Войти</button>
        </form>
    </article>
    </main>
    <footer>
        <div class="subscription">
            <input type="email" placeholder="email"></input>
            <button type="submit">Подписаться</button>
        </div>
    </footer>
</body>
</html>