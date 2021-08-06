<?php include('./temp/flame/head.php'); ?>

<?php include('./temp/flame/header.php'); ?>




    <div class="sub-page-contents head-search">
        <div class="container">
            <div class="row">
                <div class="head-search">

                    <h2>フリーワード検索</h2>

                    <form method="get" action="#" class="search_container">
                        <input type="text" size="25" placeholder="キーワード検索">
                        <input type="submit" value="&#xf002;" class="fas">
                    </form>

                </div> 
            </div><!-- end .row -->
        </div><!-- end .container -->
    </div><!-- end .sub-page-contents -->

    <div class="heade-carousel">

        <div class="container">

        <?php
        /*

            <div id="history-images2" class="owl-carousel owl-theme">
                <div class="item"><img class="img-responsive center-block" src="img/about_img.jpg" alt="About"></div><!-- .item -->
                <div class="item"><img class="img-responsive center-block" src="img/about_img2.jpg" alt="About"></div><!-- .item -->
                <div class="item"><img class="img-responsive center-block" src="img/about_img3.jpg" alt="About"></div><!-- .item -->
                <div class="item"><img class="img-responsive center-block" src="img/about_img.jpg" alt="About"></div><!-- .item -->
                <div class="item"><img class="img-responsive center-block" src="img/about_img2.jpg" alt="About"></div><!-- .item -->
                <div class="item"><img class="img-responsive center-block" src="img/about_img3.jpg" alt="About"></div><!-- .item -->
                <div class="item"><img class="img-responsive center-block" src="img/about_img.jpg" alt="About"></div><!-- .item -->
                <div class="item"><img class="img-responsive center-block" src="img/about_img2.jpg" alt="About"></div><!-- .item -->
                <div class="item"><img class="img-responsive center-block" src="img/about_img3.jpg" alt="About"></div><!-- .item -->
            </div><!-- .owl-carousel -->
         */
        ?>
            <div class="swiper-container slider-top">
                <div class="swiper-wrapper">

                    <div class="swiper-slide"><img src="images/item-page-top.png" alt=""></div>
                    <div class="swiper-slide"><img src="images/item-page-top.png" alt=""></div>
                    <div class="swiper-slide"><img src="images/item-page-top.png" alt=""></div>
                    <div class="swiper-slide"><img src="images/item-page-top.png" alt=""></div>
                    <div class="swiper-slide"><img src="images/item-page-top.png" alt=""></div>
                    <div class="swiper-slide"><img src="images/item-page-top.png" alt=""></div>
                    <div class="swiper-slide"><img src="images/item-page-top.png" alt=""></div>
  
    

                </div>

                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>   

        </div>
    </div>

    <div class="sub-page-contents search_btn">

        <h2>検索ジャンルを選んでください</h2>

        <div class="container">

            <ul>
                <li class="col-xs-4 big-title-one" onclick="location.href='index.php'"><img src="images/search_btn/kikai-on.png" ></li>
                <li class="col-xs-4 big-title-two" onclick="location.href='peripheral.php'"><img src="images/search_btn/shuhen-end.png"></li>
                <li class="col-xs-4 big-title-three" onclick="location.href='maker.php'"><img src="images/search_btn/maker-on.png"></li>
            </ul>

        </div><!-- //container -->	
    </div>


    <div class="sub-page-contents search_main">

        <div class="container">

            <div class="easy-search">
                <h2>■機械検索</h2>

                <div class="search-machine">

                    <div class="search-machine-inner">
                        <div class="search-machine-l col-xs-6">
                            <div class="search-machine-l-in">

                                <h3>①大分類を選んでください</h3>

                                <div class="machine-area" style="display: none;">

                                    <ul>
                                        <li id="machine-list-one" class='secList'>工作機械</li>
                                        <li id="machine-list-two" class='secList'>プレス機</li>
                                        <li id="machine-list-three" class='secList'>板金機械</li>
                                        <li id="machine-list-four" class='secList'>測定器</li>
                                        <li id="machine-list-five" class='secList'>ロボット</li>
                                        <li id="machine-list-six" class='secList'>コンプレッサー</li>
                                        <li id="machine-list-seven" class='secList'>溶接機</li>
                                        <li id="machine-list-eight" class='secList'>その他機械</li>
                                        
                                        
                                    </ul>
                                
                                </div><!-- //machine-area -->


                                <div class="shuhen-area" style="display: block;">


                                    <ul>
                                        
                                        <li id="machine-list-ten" class='secList'>ツーリング</li>
                                        <li id="machine-list-eleven" class='secList'>治工具類</li>
                                        <li id="machine-list-twelve" class='secList'>測定器具</li>
                                        <li id="machine-list-thirteen" class='secList'>テーブル</li>
                                        
                                    </ul>

                                </div><!-- //shuhen-area -->


                            </div>
                        </div>	
                        <div class="search-machine-r col-xs-6">
                            
                            <div class="search-machine-r-in">
                                
                                <div class="search-machine-r-in-in middleclass-top">
                                    <h3>①を選択してください</h3>
                                </div>

                                <div class="search-machine-r-in-in middleclass-second">
                                    <h3>②中分類を選んでください</h3>

                                    <ul class="machine-list-one section">
                                        <li class="machine-list-one-li" id="senabn">旋　盤</li>
                                        <li class="machine-list-one-li" id="macenter">マシニングセンタ</li>
                                        <li class="machine-list-one-li" id="macenter">NCフライス盤</li>
                                        <li class="machine-list-one-li">NC研削盤</li>
                                        <li class="machine-list-one-li">歯車加工機</li>
                                        <li class="machine-list-one-li">放電加工機</li>
                                        <li class="machine-list-one-li">その他</li>
                                    </ul>

                                    <ul class="machine-list-two section">
                                        <li class="machine-list-two-li">電動プレス</li>
                                        <li class="machine-list-two-li">電動門型プレス</li>
                                        <li class="machine-list-two-li">油圧プレス</li>	
                                        <li class="machine-list-two-li">鍛造プレス</li>
                                        <li class="machine-list-two-li">エアプレス</li>
                                        <li class="machine-list-two-li">その他</li>
                                    </ul>

                                    <ul class="machine-list-three section">
                                        <li>レーザー加工機</li>
                                        <li>プラズマ加工機</li>
                                        <li>ガス切断機</li>
                                        <li>ブレスブレーキ（ベンダ）</li>
                                        <li>シャーリング</li>
                                        <li>ベンディングロール</li>
                                        <li>板金機械、その他</li>
                                    </ul>

                                    <ul class="machine-list-four section">
                                        <li>三次元測定機</li>
                                        <li>画像測定機</li>
                                        <li>表面粗さ・輪郭形状測定</li>
                                        <li>プリセッター</li>
                                        <li>真円度測定器</li>
                                    </ul>

                                    <ul class="machine-list-five section">
                                        <li>工作機械用ロボット</li>
                                        <li>プレス用ロボット</li>
                                        <li>溶接ロボット</li>
                                    </ul>


                                    <ul class="machine-list-six section">
                                        <li>エアコンプレッサー</li>
                                    </ul>

                                    <ul class="machine-list-seven section">
                                        <li>溶接機</li>
                                    </ul>

                                    <ul class="machine-list-eight section">
                                        <li>溶接機</li>
                                    </ul>

                                    <ul class="machine-list-nine section">
                                        <li>CADCAM</li>
                                    </ul>

                                    <ul class="machine-list-ten section">
                                        <li>ツーリング</li>
                                    </ul>

                                    <ul class="machine-list-eleven section">
                                        <li>治具工具類</li>
                                    </ul>

                                    <ul class="machine-list-twelve section">
                                        <li>測定器具</li>
                                    </ul>

                                    <ul class="machine-list-thirteen section">
                                        <li>測定器具</li>
                                    </ul>

                                    

                                </div>
                            </div>

                        </div>
                    </div>		
                </div><!-- //search-machine	 -->



            </div><!-- //easy-search -->


          


            <div class="search_list_peripheral">

                <div class="search_list_head">
                    
                    <div class="search_list_head_l col-xs-6">

                        <div class="search_list_machine_select search_list_head_l_select">
                            <select>
                                <option value="1">年式を選択1</option>
                                <option value="2">年式を選択2</option>
                            </select>
                        </div>	
                        <div class="search_list_maker_select search_list_head_l_select">
                            <select>
                                <option value="1">年式を選択1</option>
                                <option value="2">年式を選択2</option>
                            </select>
                        </div>	
                    </div>
                    
                    <div class="search_list_head_r col-xs-6">
                        <div class="search_list_head_r_in">
                            <form method="get" action="#" class="search_list_head_r_key">
                            <input type="text" size="25" placeholder="キーワード検索">
                            
                            <!-- <input type="submit" value=""> -->
                            <input type="submit" value="&#xf002;" class="fas">
                            </form>
                        </div>	
                    </div>

                </div>

                <div class="search_list_table">

                    <div class="section_maker">

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

                    </div>
           
                </div>
                
                

            </div><!-- //search_list_peripheral-->







            

        </div><!-- //container -->	
        

    </div><!-- //search_main -->

  

    <?php
    /*

    <div class="container">
        <div class="slider-wrapper">
            <div class="slider-description">
                <div class="slider-description-inner">
                    <h1>Pure<span>Elegance</span></h1>
                </div>
                <div class="cd-intro">
                    <div class="cd-headline clip">
                        <span class="cd-words-wrapper">
                            <b class="is-visible">AWESOME THEME</b>
                            <b>MODERN COMBINATION</b>
                            <b>CREATIVE SOLUTIONS</b>
                        </span>
                    </div>
                </div>
            </div>
            <div id="slider-ef" class="slider-images-wrapper">
                <img class="img-responsive" src="img/slider/image_1.jpg" alt="">
                <img class="img-responsive" src="img/slider/image_2.jpg" alt="">
                <img class="img-responsive" src="img/slider/image_3.jpg" alt="">
            </div>
        </div>
    </div>
    */
    ?>


    <div class="bottom-carousel">

        <div class="container">

            <div class="swiper-container slider-top-bottom">
                <div class="swiper-wrapper">

                    <div class="swiper-slide"><img src="images/item-page-top.png" alt=""></div>
                    <div class="swiper-slide"><img src="images/item-page-top.png" alt=""></div>
                    <div class="swiper-slide"><img src="images/item-page-top.png" alt=""></div>
                    <div class="swiper-slide"><img src="images/item-page-top.png" alt=""></div>
                    <div class="swiper-slide"><img src="images/item-page-top.png" alt=""></div>
                    <div class="swiper-slide"><img src="images/item-page-top.png" alt=""></div>
                    <div class="swiper-slide"><img src="images/item-page-top.png" alt=""></div>
  
    

                </div>

                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>  

        </div>
    </div>


   

  
    <?php include('./temp/flame/footer.php'); ?>
