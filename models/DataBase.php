<?php
class DataBase
{
    public static function conn(){
        $hostname = "localhost";
        $port = "3306";
        $database = "sga";
        $username = "root";
        $password = "";

        $pdo = new PDO("mysql:host=$hostname;port=$port;dbname=$database;charset=utf8", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
    // public static function conn()
    // {
    //     $hostname = "localhost:3306";
    //     $port = "3306";
    //     $database = "sga";
    //     $username = "root";
    //     $password = "";

    //     $pdo = new PDO("mysql:host=$hostname;port=$port;dbname=$database;charset=utf8", $username, $password);
    //     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //     return $pdo;
    // }

    // public static function conn(){
    //     $hostname = "localhost";
    //     $port = "3306";
    //     $database = "id21977688_sga";
    //     $username = "id21977688_root";
    //     $password = "Sga2024*";

    //     $pdo = new PDO("mysql:host=$hostname;port=$port;dbname=$database;charset=utf8", $username, $password);
    //     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //     return $pdo;
    // }
}
