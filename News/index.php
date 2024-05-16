<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
    $user = "root";
    $password = "";
    $conn = new PDO ("mysql:host=localhost;dbname=news", $user, $password);

    $sql = "SELECT `title`, `description`, `img`, `name`, `email` FROM `news` `n` JOIN `users` `u` ON `u`.`id` = `n`.`author`";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $news = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>
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
        <div class="user-data">
            <?php
                session_start();
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
            <h2 class="card-news-title">Главная</h2>
        </div>
        <div class="news">
            <?php
            for ($i = 0; $i < count($news); $i++){
            $img = $news[$i]['img']; 
            ?>
                <div class="news-card">
                    <div class="title"><h3><?php echo $news[$i]['title']?></h3></div>
                    <div class="news-item"><?php echo $news[$i]['description']?></div>
                    <div class="image-news"><?php echo "<img class='image-news-png' src='$img'>"?></div>
                    <div class="author"><?php echo $news[$i]['name']?></div>
                    <div class="author"><?php echo $news[$i]['email']?></div>
                </div>
            <?php
            }
            ?>
        </div>
    </article>
    </main>
    <footer>
        <div class="subscription">
            <form action="script/do_email.php" method="POST">
                <input type="email" placeholder="email"></input>
                <button type="submit">Подписаться</button>
            </form>
        </div>
    </footer>
</body>
</html>