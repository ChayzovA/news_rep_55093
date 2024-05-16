<?php
$user = "root";
$password = "";

$conn = new PDO ("mysql:host=localhost;dbname=news", $user, $password);


$email = $_POST['email'];
$password=$_POST['password'];

$sql = "SELECT * FROM `users` WHERE `email` = :email AND `password` = :password";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':password', $password);
$stmt->execute();

$user = $stmt->fetchAll(PDO::FETCH_ASSOC);

if(count($user)>0){
    echo "Вошел";
    session_start();
    $_SESSION['user_id']= $user[0]['id']; 
    $_SESSION['name']= $user[0]['name'];
    $_SESSION['email']= $user[0]['email'];
    header("Location: ../index.php");
}
else{
    echo "Не правильные данные";
?>
<a href="../auth.php">Авторизация</a>
<?php
}
?>