<?php
Class DataBase{
    public static function conn(){
        $hostname = "127.0.0.1:3307";
        $port = "3306";
        $database = "sga";
        $username = "root";
        $password = "";

        $pdo = new PDO("mysql:host=$hostname;port=$port;dbname=$database;charset=utf8", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
}