<?php
// DB接続情報

/*
$user = 'root';
$pass = 'root';
$dbnm = 'catalog';
$host = 'localhost';
// 接続先DBリンク
$connect = "mysql:host={$host};dbname={$dbnm}";
*/
/*

function db($catalog){//DB名を引数として受け取る
    //DB接続
    try {
    $pdo = new PDO($connect, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $pdo;

    }catch (PDOException $e) {
    echo $e->getMessage();
    return $db = null;
    }
    }
    */

    $user = 'root';
    $pass = 'root';
    $dbnm = 'catalog';
    $host = 'localhost';
    // 接続先DBリンク
    $connect = "mysql:host={$host};dbname={$dbnm}";
    

?>



