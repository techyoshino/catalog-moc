<?php include('./temp/flame/head.php'); ?>

<?php include('./temp/flame/header.php'); ?>


  

    <div class="sub-page-contents search_paeg">

        <div class="container">

            <div class="easy-search">
                <h2>■詳細検索</h2>

                <p>
                より詳細に条件を設定して検索できます。設定したい項目を設定して<br />
                「この条件で検索する」ボタンを押してください。
                </p>


            </div><!-- //easy-search -->


            <div class="search_list">

                    <!-- <div class="search_list_head">

                        <div class="search__select">
                            <select>
                                <option value="1">年式を選択1</option>
                                <option value="2">年式を選択2</option>
                            </select>
                        </div>
                        
                        <div class="search__select">
                            <select>
                                <option value="1">年式を選択1</option>
                                <option value="2">年式を選択2</option>
                            </select>
                        </div>

                        <div class="search__select">
                            <select>
                                <option value="1">年式を選択1</option>
                                <option value="2">年式を選択2</option>
                            </select>
                        </div>

                        <div class="search__select">
                            <select>
                                <option value="1">年式を選択1</option>
                                <option value="2">年式を選択2</option>
                            </select>
                        </div>
                       
                    </div> -->

                    <dl class="ac">
                        
                        <dt id="selected" class="ac-parent">大分類を選んでください</dt>
                        
                        <dd class="ac-child ac-child-one">

                            <ul class="child-section">
                                <li id="search-one" class="machine-list-one-li" data-value="工作機械">工作機械</li>
                                <li id="search-two" class="machine-list-one-li" data-value="プレス機">プレス機</li>
                                <li id="search-three" class="machine-list-one-li" data-value="板金機械">板金機械</li>
                                <li id="search-four" class="machine-list-one-li" data-value="測定器">測定器</li>
                                <li id="search-five" class="machine-list-one-li" data-value="ロボット">ロボット</li>
                                <li id="search-six" class="machine-list-one-li" data-value="コンプレッサー">コンプレッサー</li>
                                <li id="search-seven" class="machine-list-one-li" data-value="溶接機">溶接機</li>
                                <li id="search-eight" class="machine-list-one-li" data-value="その他機械">その他機械</li>
                                <li id="search-nine" class="machine-list-one-li" data-value="ソフトウエア">ソフトウエア</li>
                                <li id="search-ten" class="machine-list-one-li" data-value="ツーリング">ツーリング</li>
                                <li id="search-eleven" class="machine-list-one-li" data-value="治工具類">治工具類</li>
                                <li id="search-twelve" class="machine-list-one-li" data-value="測定器具">測定器具</li>
                                <li id="search-thirteen" class="machine-list-one-li" data-value="テーブル各種">テーブル各種</li>
                            </ul>
                        </dd>

                        <dt id="selected2" class="ac-parent">中分類を選んでください</dt>
                        
                        <dd class="ac-child ac-child-two">

                            <ul class="child--section child-section search-one">
                                <li id="search-senban" class="machine-list-two-li" data-value="旋　盤">旋　盤</li>
                                <li id="search-mccenter" class="machine-list-two-li" data-value="マシニングセンタ">マシニングセンタ</li>
                                <li id="search-ncmilling" class="machine-list-two-li" data-value="NCフライス盤">NCフライス盤</li>
                                <li id="search-ncgrinding" class="machine-list-two-li" data-value="NC研削盤">NC研削盤</li>
                                <li id="search-ncmiddlemilling" class="machine-list-two-li" data-value="NC中繰りフライス盤">NC中繰りフライス盤</li>
                                <li id="search-processing" class="machine-list-two-li" data-value="歯車加工機">歯車加工機</li>
                                <li id="search-electricdischarge" class="machine-list-two-li" data-value="放電加工機">放電加工機</li>
                                <li id="search-other" class="machine-list-two-li" data-value="その他">その他</li>
                            </ul>

                            <ul class="child--section child-section search-two">
                                <li id="search-electricpress" class="machine-list-two-li" data-value="電動プレス">電動プレス</li>
                                <li id="search-elgatepress" class="machine-list-two-li" data-value="電動門型プレス">電動門型プレス</li>
                                <li id="search-hydraulicpress" class="machine-list-two-li" data-value="油圧プレス">油圧プレス</li>
                                <li id="search-forgedpress" class="machine-list-two-li" data-value="鍛造プレス">鍛造プレス</li>
                                <li id="search-airpress" class="machine-list-two-li" data-value="エアプレス">エアプレス</li>
                                <li id="search-other-second" class="machine-list-two-li" data-value="その他">その他</li>
                            </ul>

                            <ul class="child--section child-section search-three">
                                <li id="search-laserprocessing" class="machine-list-two-li" data-value="レーザー加工機">レーザー加工機</li>
                                <li id="search-plasmaprocessing" class="machine-list-two-li" data-value="プラズマ加工機">プラズマ加工機</li>
                                <li id="search-gascutting" class="machine-list-two-li" data-value="ガス切断機">ガス切断機</li>
                                <li id="search-waterjet" class="machine-list-two-li" data-value="ウオータージェット">ウオータージェット</li>
                                <li id="search-breathbrake" class="machine-list-two-li" data-value="ブレスブレーキ（ベンダ）">ブレスブレーキ（ベンダ）</li>
                                <li id="search-shirring" class="machine-list-two-li" data-value="シャーリング">シャーリング</li>
                                <li id="search-bendingroll" class="machine-list-two-li" data-value="ベンディングロール">ベンディングロール</li>
                                <li id="search-matalorother" class="machine-list-two-li" data-value="板金機械、その他">板金機械、その他</li>
                            </ul>

                            <ul class="child--section child-section search-four">
                                <li id="search-cmm" class="machine-list-two-li" data-value="三次元測定機">三次元測定機</li>
                                <li id="search-imgmeasuring" class="machine-list-two-li" data-value="画像測定機">画像測定機</li>
                                <li id="search-contourshape" class="machine-list-two-li" data-value="表面粗さ・輪郭形状測定">表面粗さ・輪郭形状測定</li>
                                <li id="search-presetter" class="machine-list-two-li" data-value="プリセッター">プリセッター</li>
                                <li id="search-roundnessmeasuring" class="machine-list-two-li" data-value="真円度測定器">真円度測定器</li>
                            </ul>

                            <ul class="child--section child-section search-five">
                                <li id="search-toolrobot" class="machine-list-two-li" data-value="工作機械用ロボット">工作機械用ロボット</li>
                                <li id="search-pressrobot" class="machine-list-two-li" data-value="プレス用ロボット">プレス用ロボット</li>
                                <li id="search-weldingrobot" class="machine-list-two-li" data-value="溶接ロボット">溶接ロボット</li>
                            </ul>

                            <ul class="child--section child-section search-six">
                                <li id="search-aircompressor" class="machine-list-two-li" data-value="エアコンプレッサー">エアコンプレッサー</li>
                            </ul>

                            <ul class="child--section child-section search-seven">
                                <li id="search-welder" class="machine-list-two-li" data-value="溶接機">溶接機</li>
                            </ul>

                            <ul class="child--section child-section search-eight">
                                <li id="search-weldersecond" class="machine-list-two-li" data-value="溶接機">溶接機</li>
                            </ul>

                            <ul class="child--section child-section search-nine">
                                <li id="search-cadcam" class="machine-list-two-li" data-value="CADCAM">CADCAM</li>
                            </ul>

                            <ul class="child--section child-section search-ten">
                                <li id="search-touring" class="machine-list-two-li" data-value="ツーリング">ツーリング</li>
                            </ul>

                            <ul class="child--section child-section search-eleven">
                                <li id="search-jigs" class="machine-list-two-li" data-value="治具工具類">治具工具類</li>
                            </ul>

                            <ul class="child--section child-section search-twelve">
                                <li id="search-measurement" class="machine-list-two-li" data-value="測定器具">測定器具</li>
                            </ul>

                            <ul class="child--section child-section search-thirteen">
                                <li id="search-table" class="machine-list-two-li" data-value="テーブル各種">テーブル各種</li>
                            </ul>
                        
                        </dd>

                        <dt id="selected3" class="ac-parent">小分類を選んでください</dt>
                        
                        <dd class="ac-child ac-child-three">

                            <ul class="child---section child-section search-senban">
                                <li id="" class="machine-list-three-li" data-value="NC旋盤">NC旋盤</li>
                                <li id="" class="machine-list-three-li" data-value="NC立旋盤">NC立旋盤</li>
                                <li id="" class="machine-list-three-li" data-value="自動盤">自動盤</li>
                                <li id="" class="machine-list-three-li" data-value="複合加工機">複合加工機</li>
                                <li id="" class="machine-list-three-li" data-value="その他">その他</li>
                            </ul>

                            <ul class="child---section child-section search-mccenter">
                                <li id="" class="machine-list-three-li" data-value="立形マシニング">立形マシニング</li>
                                <li id="" class="machine-list-three-li" data-value="横型マシニング">横型マシニング</li>
                                <li id="" class="machine-list-three-li" data-value="門型・五面加工機">門型・五面加工機</li>
                                <li id="" class="machine-list-three-li" data-value="5軸加工機">5軸加工機</li>
                                <li id="" class="machine-list-three-li" data-value="その他">その他</li>
                            </ul>

                            <ul class="child---section child-section search-ncmilling">
                                <li id="" class="machine-list-three-li" data-value="立形NCフライス盤">立形NCフライス盤</li>
                                <li id="" class="machine-list-three-li" data-value="横型NCフライス盤">横型NCフライス盤</li>
                                <li id="" class="machine-list-three-li" data-value="門型NCフライス盤">門型NCフライス盤</li>
                                <li id="" class="machine-list-three-li" data-value="両頭NCフライス盤">両頭NCフライス盤</li>
                                <li id="" class="machine-list-three-li" data-value="NCフライス盤、その他">NCフライス盤、その他</li>
                            </ul>

                            <ul class="child---section child-section search-ncgrinding">
                                <li id="" class="machine-list-three-li" data-value="平面研削盤">平面研削盤</li>
                                <li id="" class="machine-list-three-li" data-value="成形研削盤">成形研削盤</li>
                                <li id="" class="machine-list-three-li" data-value="ロータリー研削盤">ロータリー研削盤</li>
                                <li id="" class="machine-list-three-li" data-value="円筒研削盤">円筒研削盤</li>
                                <li id="" class="machine-list-three-li" data-value="内面研削盤">内面研削盤</li>
                                <li id="" class="machine-list-three-li" data-value="複合研削盤">複合研削盤</li>
                                <li id="" class="machine-list-three-li" data-value="プロファイル研削盤">プロファイル研削盤</li>
                                <li id="" class="machine-list-three-li" data-value="ネジ研削盤">ネジ研削盤</li>
                                <li id="" class="machine-list-three-li" data-value="センタレス研削盤">センタレス研削盤</li>
                                <li id="" class="machine-list-three-li" data-value="研削盤、その他">研削盤、その他</li>
                            </ul>

                            <ul class="child---section child-section search-ncmiddlemilling">
                                <li id="" class="machine-list-three-li" data-value="テーブル形中ぐり盤">テーブル形中ぐり盤</li>
                                <li id="" class="machine-list-three-li" data-value="フロアー形中ぐり盤">フロアー形中ぐり盤</li>
                            </ul>

                            <ul class="child---section child-section search-processing">
                                <li id="" class="machine-list-three-li" data-value="ホブ盤">ホブ盤</li>
                                <li id="" class="machine-list-three-li" data-value="ギア―シェーパー">ギア―シェーパー</li>
                                <li id="" class="machine-list-three-li" data-value="ベベルギヤー">ベベルギヤー</li>
                                <li id="" class="machine-list-three-li" data-value="歯車研削盤">歯車研削盤</li>
                                <li id="" class="machine-list-three-li" data-value="歯車面取り機">歯車面取り機</li>
                                <li id="" class="machine-list-three-li" data-value="放電加工機">放電加工機</li>
                                <li id="" class="machine-list-three-li" data-value="ワイヤカット">ワイヤカット</li>
                                <li id="" class="machine-list-three-li" data-value="細穴加工機">細穴加工機</li>
                            </ul>

                            <ul class="child---section child-section search-electricdischarge">
                                <li id="" class="machine-list-three-li" data-value="放電加工機">放電加工機</li>
                                <li id="" class="machine-list-three-li" data-value="ワイヤカット">ワイヤカット</li>
                                <li id="" class="machine-list-three-li" data-value="細穴加工機">細穴加工機</li>
                            </ul>

                            <ul class="child---section child-section search-other">
                                <li id="" class="machine-list-three-li" data-value="NCルーター">NCルーター</li>
                                <li id="" class="machine-list-three-li" data-value="転造盤">転造盤</li>
                                <li id="" class="machine-list-three-li" data-value="スライシングマシン">スライシングマシン</li>  
                            </ul>

                            <ul class="child---section child-section search-electricpress">
                                <li id="" class="machine-list-three-li" data-value="トン数毎">トン数毎</li>
                            </ul>

                            <ul class="child---section child-section search-elgatepress">
                                <li id="" class="machine-list-three-li" data-value="トン数毎">トン数毎</li>
                            </ul>

                            <ul class="child---section child-section search-hydraulicpress">
                                <li id="" class="machine-list-three-li" data-value="トン数毎">トン数毎</li>
                            </ul>

                            <ul class="child---section child-section search-forgedpress">
                                <li id="" class="machine-list-three-li" data-value="鍛造プレス">鍛造プレス</li>
                                <li id="" class="machine-list-three-li" data-value="冷間鍛造">冷間鍛造</li>
                                <li id="" class="machine-list-three-li" data-value="熱間鍛造">熱間鍛造</li>
                            </ul>

                            <ul class="child---section child-section search-airpress">
                                <li id="" class="machine-list-three-li" data-value="トン数毎">トン数毎</li>
                            </ul>
                            <ul class="child---section child-section search-other-second">
                                <li id="" class="machine-list-three-li" data-value=""></li>
                            </ul>

                            <ul class="child---section child-section search-laserprocessing">
                                <li id="" class="machine-list-three-li" data-value="レーザー加工、CO2">レーザー加工、CO2</li>
                                <li id="" class="machine-list-three-li" data-value="ファイバーレーザー">ファイバーレーザー</li>
                                <li id="" class="machine-list-three-li" data-value="Yagレーザー">Yagレーザー</li>
                            </ul>

                            <ul class="child---section child-section search-plasmaprocessing">
                                <li id="" class="machine-list-three-li" data-value="ブラズマ加工機">ブラズマ加工機</li>
                                <li id="" class="machine-list-three-li" data-value="プラズマ切断機">プラズマ切断機</li>
                            </ul>

                            <ul class="child---section child-section search-gascutting">
                                <li id="" class="machine-list-three-li" data-value="ガス切断機">ガス切断機</li>
                            </ul>

                            <ul class="child---section child-section search-waterjet">
                                <li id="" class="machine-list-three-li" data-value="ウオータージェット">ウオータージェット</li>
                            </ul>

                            <ul class="child---section child-section search-breathbrake">
                                <li id="" class="machine-list-three-li" data-value="メカベンダー">メカベンダー</li>
                                <li id="" class="machine-list-three-li" data-value="油圧ベンダー">油圧ベンダー</li>
                                <li id="" class="machine-list-three-li" data-value="サーポベンダー">サーポベンダー</li>
                            </ul>

                            <ul class="child---section child-section search-shirring">
                                <li id="" class="machine-list-three-li" data-value="メカシャーリング">メカシャーリング</li>
                                <li id="" class="machine-list-three-li" data-value="油圧シャーリング">油圧シャーリング</li>
                            </ul>

                            <ul class="child---section child-section search-bendingroll">
                                <li id="" class="machine-list-three-li" data-value="三本ロール">三本ロール</li>
                                <li id="" class="machine-list-three-li" data-value="四本ロール">四本ロール</li>
                            </ul>

                            <ul class="child---section child-section search-matalorother">
                                <li id="" class="machine-list-three-li" data-value=""></li>
                            </ul>


                            <ul class="child---section child-section search-cmm">
                                <li id="" class="machine-list-three-li" data-value="三次元測定機">三次元測定機</li>
                            </ul>

                            <ul class="child---section child-section search-imgmeasuring">
                                <li id="" class="machine-list-three-li" data-value="非接触式三次元画像測定機">非接触式三次元画像測定機</li>
                            </ul>

                            <ul class="child---section child-section search-contourshape">
                                <li id="" class="machine-list-three-li" data-value="表面粗さ測定器">表面粗さ測定器</li>
                                <li id="" class="machine-list-three-li" data-value="表面粗さ・輪郭形状測定機">表面粗さ・輪郭形状測定機</li>
                            </ul>

                            <ul class="child---section child-section search-presetter">
                                <li id="" class="machine-list-three-li" data-value="ツールプリセッター">ツールプリセッター</li>
                                <li id="" class="machine-list-three-li" data-value="ハイトプリセッター">ハイトプリセッター</li>
                            </ul>

                            <ul class="child---section child-section search-roundnessmeasuring">
                                <li id="" class="machine-list-three-li" data-value="真円度製測定機">真円度製測定機</li>
                            </ul>

                            <ul class="child---section child-section search-toolrobot">
                                <li id="" class="machine-list-three-li" data-value=""></li>
                            </ul>

                            <ul class="child---section child-section search-pressrobot">
                                <li id="" class="machine-list-three-li" data-value=""></li>
                            </ul>

                            <ul class="child---section child-section search-weldingrobot">
                                <li id="" class="machine-list-three-li" data-value=""></li>
                            </ul>

                            <ul class="child---section child-section search-aircompressor">
                                <li id="" class="machine-list-three-li" data-value="レシプロコンプレッサー">レシプロコンプレッサー</li>
                                <li id="" class="machine-list-three-li" data-value="パッケージコンプレッサー">パッケージコンプレッサー</li>
                                <li id="" class="machine-list-three-li" data-value="スクリューコンプレッサー">スクリューコンプレッサー</li>
                                <li id="" class="machine-list-three-li" data-value="インバータ式コンプレッサー">インバータ式コンプレッサー</li>
                            </ul>

                            <ul class="child---section child-section search-welder">
                                <li id="" class="machine-list-three-li" data-value="アーク溶接機">アーク溶接機</li>
                                <li id="" class="machine-list-three-li" data-value="自動・半自動溶接機">自動・半自動溶接機</li>
                                <li id="" class="machine-list-three-li" data-value="TIG溶接機">TIG溶接機</li>
                                <li id="" class="machine-list-three-li" data-value="スポット溶接機">スポット溶接機</li>
                                <li id="" class="machine-list-three-li" data-value="YAGレーザー溶接機">YAGレーザー溶接機</li>
                            </ul>

                            <ul class="child---section child-section search-weldersecond">
                                <li id="" class="machine-list-three-li" data-value=""></li>
                            </ul>

                            <ul class="child---section child-section search-cadcam">
                                <li id="" class="machine-list-three-li" data-value="CADCAM">CADCAM</li>
                            </ul>

                            <ul class="child---section child-section search-touring">
                                <li id="" class="machine-list-three-li" data-value=""></li>
                            </ul>

                            <ul class="child---section child-section search-jigs">
                                <li id="" class="machine-list-three-li" data-value="マシンバイス">マシンバイス</li>
                                <li id="" class="machine-list-three-li" data-value="油圧バイス">油圧バイス</li>
                                <li id="" class="machine-list-three-li" data-value="5軸バイス">5軸バイス</li>
                                <li id="" class="machine-list-three-li" data-value="マグネットチャック">マグネットチャック</li>
                                <li id="" class="machine-list-three-li" data-value="真空チャック">真空チャック</li>
                                <li id="" class="machine-list-three-li" data-value="センタバイス―">センタバイス―</li>
                                <li id="" class="machine-list-three-li" data-value="チャック">チャック―</li>  
                            </ul>

                            <ul class="child---section child-section search-measurement">
                                <li id="" class="machine-list-three-li" data-value="デジタルノギス">デジタルノギス</li>
                                <li id="" class="machine-list-three-li" data-value="マイクロメーター（外側）">マイクロメーター（外側）</li>
                                <li id="" class="machine-list-three-li" data-value="マイクロメーター（内側）">マイクロメーター（内側）</li>
                                <li id="" class="machine-list-three-li" data-value="ホールテスト">ホールテスト</li>
                                <li id="" class="machine-list-three-li" data-value="タッチプローブ">タッチプローブ</li>
                                <li id="" class="machine-list-three-li" data-value="ピンゲージ">ピンゲージ</li>
                            </ul>

                            <ul class="child---section child-section search-table">
                                <li id="" class="machine-list-three-li" data-value="NC円テーブル">NC円テーブル</li>
                                <li id="" class="machine-list-three-li" data-value="インデックス">インデックス</li>
                                <li id="" class="machine-list-three-li" data-value="サブテーブル">サブテーブル</li>
                    
                            </ul>

                        </dd>

                        <dt class="ac-parent">メーカを選んでください</dt>
                        <dd class="ac-child">メニューの中身</dd>
                    </dl>


        
            </div><!-- //search_list -->

            

        
        </div><!-- //container -->

        <div class="add_search">

        <input type="hidden" value="" nama="vv" class="vv">
        <input type="hidden" value="" nama="vv2" class="vv2">
        <input type="hidden" value="" nama="vv3" class="vv3">

            <div class="container">
                
                 <?php
                        if ((include './temp/search/search-senban.php') == TRUE) {
                        }

                        if ((include './temp/search/search-mccenter.php') == TRUE) {
                        }

                        if ((include './temp/search/search-ncmilling.php') == TRUE) {
                        }

                        if ((include './temp/search/search-ncgrinding.php') == TRUE) {
                        }

                        if ((include './temp/search/search-ncmiddlemilling.php') == TRUE) {
                        }

                        if ((include './temp/search/search-processing.php') == TRUE) {
                        }

                        if ((include './temp/search/search-electricdischarge.php') == TRUE) {
                        }

                        if ((include './temp/search/search-other.php') == TRUE) {
                        }

                        if ((include './temp/search/search-electricpress.php') == TRUE) {
                        }

                        if ((include './temp/search/search-elgatepress.php') == TRUE) {
                        }

                        if ((include './temp/search/search-hydraulicpress.php') == TRUE) {
                        }

                        if ((include './temp/search/search-forgedpress.php') == TRUE) {
                        }

                        if ((include './temp/search/search-airpress.php') == TRUE) {
                        }

                        if ((include './temp/search/search-laserprocessing.php') == TRUE) {
                        }

                        if ((include './temp/search/search-plasmaprocessing.php') == TRUE) {
                        }

                        if ((include './temp/search/search-gascutting.php') == TRUE) {
                        }

                        if ((include './temp/search/search-waterjet.php') == TRUE) {
                        }

                        if ((include './temp/search/search-breathbrake.php') == TRUE) {
                        }

                        if ((include './temp/search/search-shirring.php') == TRUE) {
                        }

                        if ((include './temp/search/search-bendingroll.php') == TRUE) {
                        }

                        if ((include './temp/search/search-matalorother.php') == TRUE) {
                        }

                        if ((include './temp/search/search-cmm.php') == TRUE) {
                        }

                        if ((include './temp/search/search-imgmeasuring.php') == TRUE) {
                        }

                        if ((include './temp/search/search-contourshape.php') == TRUE) {
                        }

                        if ((include './temp/search/search-presetter.php') == TRUE) {
                        }

                        if ((include './temp/search/search-roundnessmeasuring.php') == TRUE) {
                        }

                        if ((include './temp/search/search-toolrobot.php') == TRUE) {
                        }

                        if ((include './temp/search/search-pressrobot.php') == TRUE) {
                        }

                        if ((include './temp/search/search-weldingrobot.php') == TRUE) {
                        }

                        if ((include './temp/search/search-aircompressor.php') == TRUE) {
                        }

                        if ((include './temp/search/search-welder.php') == TRUE) {
                        }

                        if ((include './temp/search/search-weldersecond.php') == TRUE) {
                        }

                        if ((include './temp/search/search-cadcam.php') == TRUE) {
                        }
                        if ((include './temp/search/search-touring.php') == TRUE) {
                        }

                        if ((include './temp/search/search-jigs.php') == TRUE) {
                        }

                        if ((include './temp/search/search-measurement.php') == TRUE) {
                        }

                        if ((include './temp/search/search-table.php') == TRUE) {
                        }

                        
                        
                             
                    ?>



            </div>    

        </div>
        
        


        <div class="search_list_button">

            <div class="container">
                <div class="search_list_button_in">
                    <input type="reset" value="詳細条件をクリア">
                    <input type="submit" value="この条件で検索する" onclick="location.href='search-results.php'">
                </div>
            </div>	
        </div>

        

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




  
<?php include('./temp/flame/footer.php'); ?>