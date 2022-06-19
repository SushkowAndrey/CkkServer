<?php

include_once('php/user-model.php');

class ConnectAutorization
{
    private $host = '',
        $user = '',
        $pass = '',
        $dbname = '';
    function connect()
    {
        $link = new mysqli($this->host, $this->user, $this->pass, $this->dbname) or die('Ошибка подключения к БД');
        mysqli_select_db($link, $this->dbname) or die('Ошибка открытия БД');
        mysqli_query($link, "set names 'utf8'");
        return $link;
    }
    function AddUser($name, $login, $password){
        $sql = "INSERT INTO table_users_server (name, login, password) VALUES ('".$name."', '".$login."','".md5($password)."')";
        $conn = $this->connect();
        if(mysqli_query($conn, $sql)){
            return true;
        } else{
            echo "Ошибка: " . mysqli_error($conn);
            return false;
        }
        mysqli_close($conn);
    }
    function CheckUser($login, $password){
        $user = null;
        $sql = "SELECT id, name, login FROM table_users_server WHERE login = '".$login."' AND password = '".md5($password)."'";
        $conn = $this->connect();
        if($result = $conn->query($sql)){
            while($row = $result->fetch_array()){
                $user = new User($row["id"], $row["name"], $row["login"]);
            }
        }
        return $user;
    }
    function CheckUniqueness($login): bool
    {
        $sql = "SELECT id FROM table_users_server WHERE login = '".$login."'";
        $conn = $this->connect();
        if($result = $conn->query($sql)){
            while($row = $result->fetch_array()){
                return true;
            }
        }
        return false;
    }
}