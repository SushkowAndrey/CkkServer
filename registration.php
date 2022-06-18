<title>Регистрация пользователя</title>
<link rel="stylesheet" href="css/bootstrap.css">
<script src="js/react.development.js"></script>
<script src="js/react-dom.development.js"></script>
<script src="js/babel-standalone7.js"></script>
<script type="text/babel" src="js/registration-script.jsx"></script>

<div id="appRegistration" class="container"></div>

<?php

include_once('php/db-connect-autorization.php');

if (isset($_POST['registration'])) {

    $connect = new ConnectAutorization();
    if(!$connect->CheckUniqueness ($_POST['emailRegistration']))
    {
        return;
    }
    if (Register($_POST['nameRegistration'], $_POST['emailRegistration'], $_POST['passwordRegistration'], $_POST['passwordRepeatRegistration'])) {

        $resultAdd = $connect->AddUser($_POST['nameRegistration'], $_POST['emailRegistration'], $_POST['passwordRegistration']);
        if($resultAdd){
            '<div class="alert alert-success" role="alert">Регистрация успешна<a href="#" class="alert-link">Вернуться на главную</a></div>';
        }
    }
}

function Register($name, $login, $password, $confpass) {
    if($name == '' || $login == '' || $password == '' || $confpass =='') {
        echo '<h3><span class="alert alert-danger">Все поля должны быть заполнены!</span></h3>';
        return false;
    }
    if(strlen($login) < 4 || strlen($login) > 30 ||
        strlen($password) < 4 || strlen($password) > 30 ||
        strlen($confpass) < 4 || strlen($confpass) > 30) {
        echo '<h3><span class="alert alert-danger">Длина имени и пароля должна от 4 до 30 символов!</span></h3>';
        return false;
    }
    //Проверка повтора пароля
    if($confpass != $password) {

        echo '<h3><span class="alert alert-danger">Пароли не совпадают</h3>';
        return false;
    }
    return true;
}

function CheckUniqueness ($login){
    $file = fopen('users.txt', 'a+');
    while($line = fgets($file, 128)) {
        $readName = substr($line, 0, strpos($line, ':'));
        if($readName == $login) {
            echo '<h3><span class="alert alert-danger">Такой логин уже существует!</span></h3>';
            return false;
        }
    }
    return true;
}