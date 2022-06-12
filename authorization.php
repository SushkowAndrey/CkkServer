<title>Авторизация пользователя</title>
<link rel="stylesheet" href="css/bootstrap.css">
<script src="js/react.development.js"></script>
<script src="js/react-dom.development.js"></script>
<script src="js/babel-standalone7.js"></script>
<script type="text/babel" src="js/autorization-script.jsx"></script>

<div id="appAuthorization" class="container"></div>

<?php
if (isset($_POST['authorization'])) {
    if($_POST['emailAuthorization'] == "test@test.ru"&& $_POST['passwordAuthorization'] =="0000") {
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
