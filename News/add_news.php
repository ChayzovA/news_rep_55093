<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="name">
            <h1>Новостной сайт</h1>
        </div>
        <div class="header">
            <a href="auth.php">Авторизация</a>
            <a href="index.php">Главная</a>
            <a href=""></a>
            <a href=""></a>
        </div>
        <div class="user-data">
            <?php
                session_start();

                if (!isset($_SESSION['user_id'])){
                    header("Location: index.php");
                    exit();
                }

                if (isset($_SESSION['user_id'])){
                    $name = $_SESSION['name'];
                    $email = $_SESSION['email'];
                    echo "<p>Имя: $name </p>";
                    echo "<p>Почта: $email </p>"; 
                }
                else{
                    echo "<p>Имя: </p>";
                    echo "<p>Почта: </p>";
                }
            ?>
        </div>
        
    </header>
    <main>
    <article>
        <div>
            <h2 class="add-news">Добавление новости</h2>
        </div>
        <form class="form-add-news id" action="script/do_add_news.php" method="POST">
            <label for="title">Название новости</label>
            <input class="news-item" name="title" type="text">
            <label for="description">Описание новости</label>
            <textarea class="news-item-area" name="description"></textarea>
            <label for="img">Ссылка на изображение</label>
            <input class="news-item" name="img" type="text">
            <button class="button-add-news" type="submit">Добавить</button>
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
<?php

?>