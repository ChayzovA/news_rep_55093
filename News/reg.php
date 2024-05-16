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
            <a href="auth.php">Авторизация</a>
            <a href="add_news.php">Добавить новости</a>
            <a href=""></a>
            <a href=""></a>
        </div>
    </header>
    <main>
    <article>
        <form class="id" action="script/do_reg.php" method="POST">
            <h2 class="reg">Регистрация</h2>
            <label for="name">Имя</label>
            <input name="name" type="text" placeholder = "name">
            <label for="email">Почта</label>
            <input name="email" type="email" placeholder = "email">
            <label for="password">Пароль</label>
            <input name="password" type="password" placeholder = "password">
            <button>Зарегистрироваться</button>
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