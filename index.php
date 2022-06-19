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
<div id="header" data-name="<?php $_SESSION["nameUser"] ?>"></div>
<div id="wrapper"></div>
<div id="counterfeitControl"></div>
<div id="footer"></div>
<script src="js/react.development.js"></script>
<script src="js/react-dom.development.js"></script>
<script src="js/babel-standalone7.js"></script>
<script type="text/babel" src="js/main-script.jsx"></script>
<script>
    <div id="nameUser"><?php if(isset($_SESSION["nameUser"])) {echo $_SESSION["nameUser"];} ?></div>



</script>
</body>
</html>

