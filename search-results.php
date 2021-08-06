<?php include('./temp/flame/head.php'); ?>

<?php include('./temp/flame/header.php'); ?>


<?php

    $user = 'root';
    $pass = 'root';
    $dbnm = 'catalog';
    $host = 'localhost';
    // 接続先DBリンク
    $connect = "mysql:host={$host};dbname={$dbnm}";
    


    try {
        // DB接続
        $pdo = new PDO($connect, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //echo "<p>DB接続に成功しました。</p>";
        
        // SQL実行
        $sql = "SELECT * FROM machinetools2";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        
        // 結果の取得
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($result);
      } 
      
      
        catch (Exception $e) {
        echo "<p>DB接続エラー</p>";
        echo $e->getMessage();
        exit();
      }
      
    

?>




    <div class="sub-page-contents search-results">

        <div class="container">

            <div class="search-results-btn">

                <a href="search.php"><span>検索条件を設定</span></a>
               
            </div><!-- //search-results-btn -->
        
        </div><!-- //container -->


        <div class="search-results_list">

            <div class="container">

                <div class="search-results_list_table">

                
                    

                    <table class="secList">


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

                        <?php
                        /*        
                        <tr class="machine">
                                        
                            <td class="img">
                                <div class="img_area">
                                    <img src="images/noimage.png">
                                </div>
                            </td>
                            <td class="tdname">
                                <?php echo $row['type']; ?>
                            </td>
                            <td class="maker">
                                <?php echo $row['maker']; ?>
                            </td>
                            <td class="model">
                                <?php echo $row['number']; ?>
                            </td>
                            
                            <td class="">
                                <div><?php echo $row['mainuse']; ?></div>
                            </td>

                            
                            <td class="button">
                                <a href="#"><i class="far fa-plus-square"></i></a>
                                
                            </td>

                            <td class="button">
                                <a href="<?php echo $row['web']; ?>"><i class="far fa-heart"></i></a>
                                
                            </td>
                        </tr>
                        */
                        ?>


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
                            <a href="item-page.php"><div><?php echo $row['mainuse']; ?></a></div>
                            </td>

                            
                            <td class="button">
                                <a href="#"><i class="far fa-plus-square"></i></a>
                                
                            </td>

                            <td class="button">
                                <a href="<?php echo $row['web']; ?>"><i class="far fa-heart"></i></a>
                                
                            </td>
                        </tr>


                        <?php } ?>


                        <?php for ($x=1; $x <= $pagination ; $x++) { ?>
                            <a href="?page=<?php echo $x ?>"><?php echo $x; ?></a>
                        <?php } // End of for ?>
                  
 

                      

                                            

                        </tbody>	
                        
                    </table>

                  

                </div>
            </div><!-- //container -->

        </div><!-- //search-results_list -->

        
        

        <div class="container">

            <div class="search-results-btn">

                <a href="search.php"><span>検索条件を設定</span></a>
               
            </div><!-- //search-results-btn -->
        
        </div><!-- //container -->
     
        

    </div><!-- //search_main -->

  

 




  
<?php include('./temp/flame/footer.php'); ?>