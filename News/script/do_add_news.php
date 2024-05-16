<?php
session_start();

$user_id = $_SESSION['user_id'];

if (isset($_POST['title']) && isset($_POST['description']) && isset($_POST['img'])){
    $title = $_POST['title'];
    $description = $_POST['description'];
    $img = $_POST['img'];

    $user = "root";
    $password = "";

    $conn = new PDO("mysql:host=localhost;dbname=news", $user, $password);
    
    $sql = "INSERT INTO `news` (`title`, `description`, `img`, `author`) VALUES (:title, :description, :img, :author)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':img', $img);
    $stmt->bindParam(':author', $user_id);
    $stmt->execute();
    header("Location: ../index.php");
}
else{
    echo "Не заполненно поле";
    echo "<a href='../add_news.php'>Добавить новость</a>";
}
?>