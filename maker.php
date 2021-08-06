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
                <li class="col-xs-4 big-title-two" onclick="location.href='peripheral.php'"><img src="images/search_btn/shuhen-on.png"></li>
                <li class="col-xs-4 big-title-three" onclick="location.href='maker.php'"><img src="images/search_btn/maker-end.png"></li>
            </ul>

        </div><!-- //container -->	
    </div>


    <div class="sub-page-contents search_main">

        <div class="container">

        
            <div class="search_list_maker">
                
                <h2>■メーカー検索</h2>
                            

                <div class="search_list_head">
                    
                    <div class="search_list_head_l col-xs-10">

                        <div class="search_list_machine_select search_list_head_l_select">
                            <select>
                                <option value="1">大分類で絞り込む</option>
                                <option value="2">大分類で絞り込む</option>
                            </select>
                        </div>	
                        <div class="search_list_maker_select search_list_head_l_select">
                            <select>
                                <option value="1">中分類で絞り込む</option>
                                <option value="2">中分類で絞り込む</option>
                            </select>
                        </div>
                        
                        <div class="search_list_maker_select search_list_head_l_select">
                            <select>
                                <option value="1">小分類で絞り込む</option>
                                <option value="2">小分類で絞り込む</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="search_list_head_r col-xs-2">
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
                
                

            </div><!-- //search_list_maker -->



            

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
