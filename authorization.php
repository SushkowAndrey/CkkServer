<title>Авторизация пользователя</title>
<link rel="stylesheet" href="css/bootstrap.css">
<script src="js/react.development.js"></script>
<script src="js/react-dom.development.js"></script>
<script src="js/babel-standalone7.js"></script>
<script type="text/babel" src="js/autorization-script.jsx"></script>

<div id="appAuthorization" class="container"></div>

<?php

include_once('php/db-connect-autorization.php');

$connect = new ConnectAutorization();
$connect -> connect();
if ($connect === false) {
    die("Ошибка: " . mysqli_connect_error());
    return;
}

if (isset($_POST['authorization'])) {

    if($connect -> CheckUser($_POST['emailAuthorization'], $_POST['passwordAuthorization']) != null) {
        session_start();
        $_SESSION["nameUser"] = $_POST['emailAuthorization'];
        $new_url = '/index.php';
        header('Location: '.$new_url);
    }
    else{
        echo '<script>alert("Неверный логин или пароль")</script>';
    }
}
?>
