

<form action="#" method="post" enctype="multipart/form-data">
    
    <label for="text_id">種類:</label>
    <select name="type">
        <option value="旋　盤">旋盤</option>
        <option value="マシニングセンタ">マシニングセンタ</option>
        <option value="NCフライス盤">NCフライス盤</option>
        <option value="NC研削盤">NC研削盤</option>
        <option value="歯車加工機">歯車加工機</option>
        <option value="放電加工機">放電加工機</option>
        <option value="その他">その他</option>
    </select>

    <label for="text_id">メーカー:</label>
    <input type="text" name="maker" size="30">

    <label for="text_id">型式:</label>
    <input type="text" name="number" size="30">

    <label for="text_id">主な使用:</label>
    <input type="text" name="mainuse" size="30">

    <label for="text_id">お気に入り:</label>
    <input type="text" name="web" size="30">

 


    <button type="submit" name="button">登録する</button>
</form>




<?php

// (1) 登録するデータを用意
// date_default_timezone_set('Asia/Tokyo');
// $type = '旋盤';
// $maker = '旋盤';
// $number = '旋盤';
// $mainuse = '旋盤旋盤旋盤旋盤旋盤旋盤旋盤旋盤';
// $web = 'https://teratail.com/';



// (2) データベースに接続



$pdo = new PDO('mysql:charset=UTF8;dbname=catalog;host=localhost', 'root', 'root');

//input_post.phpの値を取得
$type = $_POST['type'];
$maker = $_POST['maker'];
$number = $_POST['number'];
$mainuse = $_POST['mainuse'];
$web = $_POST['web'];


// (3) SQL作成
$stmt = $pdo->prepare("INSERT INTO machinetools2 (
	type, maker, number, mainuse, web
) VALUES (
	:type, :maker, :number, :mainuse, :web
)");

// (4) 登録するデータをセット
$stmt->bindParam( ':type', $type, PDO::PARAM_STR);
$stmt->bindParam( ':maker', $maker, PDO::PARAM_STR);
$stmt->bindParam( ':number', $number, PDO::PARAM_STR);
$stmt->bindParam( ':mainuse', $mainuse, PDO::PARAM_STR);
$stmt->bindParam( ':web', $web, PDO::PARAM_STR);


// (5) SQL実行
$res = $stmt->execute();

// (6) データベースの接続解除
$pdo = null;

//var_dump(mysqli_error($db));


/*

try {
    //DB名、ユーザー名、パスワード
    // $dsn = 'mysql:dbname=catalog;host=localhost';
    // $user = 'root';
    // $password = 'root';

    $PDO = new PDO('mysql:charset=UTF8;dbname=catalog;host=localhost', 'root', 'root');//MySQLのデータベースに接続
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //PDOのエラーレポートを表示

    //input_post.phpの値を取得
    $type = $_POST['type'];
    $maker = $_POST['maker'];
    $number = $_POST['number'];
    $mainuse = $_POST['mainuse'];
    $web = $_POST['web'];


    $sql = "INSERT INTO contents (type, maker, number, mainuse, web) VALUES (:type, :maker, :number, :mainuse, :web)"; // INSERT文を変数に格納。:nameや:categoryはプレースホルダという、値を入れるための単なる空箱
    $stmt = $PDO->prepare($sql); //挿入する値は空のまま、SQL実行の準備をする
    $params = array(':type' => $type, ':maker' => $maker, ':number' => $number, ':mainuse' => $mainuse, ':web' => $web); // 挿入する値を配列に格納する
    $stmt->execute($params); //挿入する値が入った変数をexecuteにセットしてSQLを実行

    echo "<p>type: ".$type."</p>";
    echo "<p>maker: ".$maker."</p>";
    echo "<p>number: ".$number."</p>";
    echo "<p>mainuse: ".$mainuse."</p>";
    echo "<p>web: ".$web."</p>";
    echo '<p>で登録しました。</p>'; // 登録完了のメッセージ
  } catch (PDOException $e) {
  exit('データベースに接続できませんでした。' . $e->getMessage());
  }

*/


?>