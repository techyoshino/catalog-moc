<?php

require dirname(__FILE__) . '/../config/config.php';

    

try {
    // DB接続
    $pdo = new PDO($connect, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    //echo "<p>DB接続に成功しました。</p>";
    
    // SQL実行
    $sql = "SELECT * FROM presstools WHERE type = 'エアプレス';";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    
    // 結果の取得
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //var_dump($result);
  } catch (Exception $e) {
    echo "<p>DB接続エラー</p>";
    echo $e->getMessage();
    exit();
  }

?>

<table class="section2-1 presslist">


                    
<thead>
    <tr>
        <th class="imgage">画像</th>
        <th class="tdname">種類</th>
        <th class="maker">メーカー</th>
        <th class="model">型式</th>
        <th class="">主な使用</th>
        <th class="buttons reset">比較リスト</th>
        <th class="buttons reset">お気に入り</th>
    </tr>
</thead>

<tbody>



<?php foreach ($result as $row) {?>


    <tr class="machine">
                    
        <td class="img">
            <div class="img_area">
                <a href="item-page.php"><img src="images/noimage.png"></a>
            </div>
        </td>
        <td class="tdname">
        <a href="item-page.php"><?php echo $row['type']; ?></a>
        </td>
        <td class="maker">
        <a href="item-page.php"><?php echo $row['maker']; ?></a>
        </td>
        <td class="model">
        <a href="item-page.php"><?php echo $row['number']; ?></a>
        </td>
        
        <td class="">
            <div><a href="item-page.php"><?php echo $row['mainuse']; ?></a></div>
        </td>

        
         <td class="button">
            <a href="#"><i class="far fa-plus-square"></i></a>
            
        </td>

        <td class="button">
            <a href="<?php echo $row['web']; ?>"><i class="far fa-heart"></i></a>
            
        </td>
    </tr>

   
    <?php } ?>
                            

</tbody>	
</table>