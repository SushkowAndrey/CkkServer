<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Фарм-Ревизор Онлайн</title>
    <link rel="stylesheet" href="css/common-styles-main.css">
    <link rel="stylesheet" href="css/common-styles-classes.css">
    <link rel="stylesheet" href="css/common-styles-identifiers.css">
    <link rel="shortcut icon" href="/img/main.ico" type="image/x-icon">

</head>
<body>
<div id="header">
    <div id="nameUser">
        <?php
        if(isset($_SESSION["nameUser"]))
        {
            echo $_SESSION["nameUser"];
        }
        ?>
    </div>
    <h1>ФАРМ-РЕВИЗОР ОНЛАЙН</h1>
    <div id="navigation">
        <ul>
            <li><a href="#">Интернет-магазин</a></li>
            <li><a href="/authorization.php">Авторизация</a></li>
            <li><a href="#">Для организаций</a></li>
            <li><a href="#">Форум</a></li>
            <li><a href="#">Контакты</a></li>
            <li><a href="#">Администратор</a></li>
            <li><a href="/for-developer.php">Для разработчика</a></li>
        </ul>
    </div>
</div>
<div class="wrapper">
    <div id="sidebarleft" class="aside">
        <h2>КОНТРОЛЬ-ФАЛЬСИФИКАТ</h2>
        <p>Содержит информацию по фальсифицированным и запрещенным к продаже медицинским препаратам,
            нормативным документам по контролю качества лекарственных средств, фальсификатам,
            обнаруженным в розничной сети. Обновление информации в программе обычно происходит 3-4 раза в день.<br></p>
    </div>
    <div id="sidebarright" class="aside">
        <h2>ФАРМ-РЕВИЗОР</h2>
        <p>Программа для учета в аптеке, проверки лекарств на брак, контроля сроков годности,
            подготовки отчетов. Позволяет автоматизировать выполнение операций от поступления,
            наценки товара и подготовки ценников до оформления продажи покупателю со скидкой,
            при этом не требует специализированных знаний по работе с торговыми системами и длительного обучения.</p>
    </div>
    <div id="article">
        <h2>О сайте</h2>
        <p>Онлайн-бронирование лекарственных препаратов
            <a href="http://www.consultant.ru/document/cons_doc_LAW_352724/" target="_blank">
                Постановление Правительства РФ от 16.05.2020 N 697 (ред. от 31.05.2021)
                "Об утверждении Правил выдачи разрешения на осуществление розничной
                торговли лекарственными препаратами для медицинского применения дистанционным способом,
                осуществления такой торговли и доставки указанных лекарственных препаратов гражданам и
                внесении изменений в некоторые акты Правительства Российской Федерации по вопросу
                розничной торговли лекарственными препаратами для медицинского применения дистанционным способом"
            </a>
        </p>
    </div>
</div>
<div id="counterfeitСontrol">Контроль-Фальсификат - <a href="http://www.medbrak.ru/" target="_blank">Перейти</a></div>
<div id="footer">
    <p>Contacts: andreysushkow@mail.ru</p>
    <p>Copyright © andreysushkow@mail.ru, 2022</p>
</div>
<script src="js/autorization-script.jsx"></script>
</body>
</html>

