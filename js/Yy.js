
 
 


/////////////////////////////////////
//TOPページ 
/////////////////////////////////////


//slider-top
var slider = new Swiper('.slider-top', {
  slidesPerView:3,//画像を何枚表示するか
  spaceBetween: 10,//何ピクセル画像の間隔をあけるか

  //自動再生する場合
  autoplay: {
    delay: 5000, //3秒後に次の画像に代わる
    disableOnInteraction: false, 
    },
    //loop: true,//最後の画像までいったらループする
    //ページネーションをつける場合


  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

});

//slider-top-bottom
var slider = new Swiper('.slider-top-bottom', {
  slidesPerView:3,//画像を何枚表示するか
  spaceBetween: 10,//何ピクセル画像の間隔をあけるか

  //自動再生する場合
  autoplay: {
    delay: 5000, //3秒後に次の画像に代わる
    disableOnInteraction: false, 
    },
    //loop: true,//最後の画像までいったらループする
    //ページネーションをつける場合


  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

});



//大分類
/////////////////////////////////////




jQuery(function($){
    $('.section').hide();
    // $('.section2-1').hide();
    $('.search-machine-l-in ul li').on('click',function(){
      $('.section').not($('.'+$(this).attr('id'))).hide();
      $('.'+$(this).attr('id')).show();
      $('.search-machine-l-in ul li').removeClass('active');
      $(this).addClass('active');
      $('.machinelist').removeClass('onactive-table');
      $('.presslist').removeClass('onactive-table');
      // $('.machine-list-one-li').removeClass('active');
      // $('.machine-list-two-li').removeClass('active');
      // $('.machine-list-three-li').removeClass('active');

    });
  });

  jQuery(function($) {
    $('.middleclass-second ul li').click(function() {
      var index = $('.middleclass-second ul li').index(this);
      $('.middleclass-second ul li').removeClass('active');
      $(this).addClass('active');
    });
  }); 




$(function(){
      $('.section2').hide();
      $('.machine-list-one-li').on('click',function(){
        $('.section2').not($('.'+$(this).attr('id'))).hide();
        $('.'+$(this).attr('id')).show();
        // $('.middleclass-second ul li').removeClass('active');
        // $(this).addClass('active');

      });
    });




jQuery(function($) {
  $('.section2').hide();
  $('.machine-list-one-li').click(function() {
    var index = $('.machine-list-one-li').index(this);
    $('.machinetools').css('display','none');
    // $('.active').removeClass('active');
    // $(this).addClass('active');
    $('.machinelist').removeClass('onactive-table').eq(index).addClass('onactive-table');
  });
});


jQuery(function($) {
  $('.section2-1').hide();
  $('.machine-list-two-li').click(function() {
    var index = $('.machine-list-two-li').index(this);
    $('.machinetools').css('display','none');
    // $('.active').removeClass('active');
    // $(this).addClass('active');
    $('.presslist').removeClass('onactive-table').eq(index).addClass('onactive-table');
  });
});








// jQuery(function($) {
//   $('.machine-list-three-li').click(function() {
//     var index = $('.machine-list-three-li').index(this);
//     $('.active').removeClass('active');
//     $(this).addClass('active');
//   });
// });



/////////////////////////////////////
　//中分類
/////////////////////////////////////

// $(function(){
//       $('.section2').hide();
//       $('ul.machine-list-one li').on('click',function(){
//         $('.section2').not($('.'+$(this).attr('id'))).hide();
//         $('.'+$(this).attr('id')).show();
//         $('ul.machine-list-one li').removeClass('active');
//         $(this).addClass('active');

//       });
//     });



// console.log( '旋　盤' == '旋　盤' );
// console.log( 'マシニングセンタ' == 'マシニングセンタ' );

/////////////////////////////////////////////////////////////////////


/*
function buttonClick(){

  if($(this).hasClass('open') == false){
    //$(this).attr('src', 'kikai-end.png').addClass('open');
     var src = $('.big-title-one').children('img').attr('src').replace('kikai-on', 'kikai-end'); 
    $('.big-title-one').children('img').attr('src', src).addClass('open'); //書き換えたsrcをimgタグに設定する

    var src = $('.big-title-two').children('img').attr('src').replace('shuhen-end', 'shuhen-on'); 
    $('.big-title-two').children('img').attr('src', src).removeClass('open'); //書き換えたsrcをimgタグに設定する

    var src = $('.big-title-three').children('img').attr('src').replace('maker-end', 'maker-on'); 
    $('.big-title-three').children('img').attr('src', src).removeClass('open'); //書き換えたsrcをimgタグに設定する

    
    $('.machinelist').removeClass('onactive-table');


    ////////////////////show

    $(".machine-area").show();
    $(".easy-search").show();
    $(".search_list").show();

    ////////////////////hide

    $('.shuhen-area').hide();
    $('.section').hide();
    $('.machinetools').hide();
    $('.search_list_maker').hide();
    $('.search_list_peripheral').hide();
    
    

  }

   else if($(this).hasClass('open') == true){
    
    
  }

  else{
   // $(this).attr('src', 'mon_gate_close.png').removeClass('open');
   // $('.big-title-one img').attr('src', 'mon_gate_close.png').removeClass('open');
  }
  
}

*/


/*


$(function(){
  $('.big-title-one img').click(function(e){

    if($(this).hasClass('open') == false){
      //$(this).attr('src', 'kikai-end.png').addClass('open');
       var src = $('.big-title-one').children('img').attr('src').replace('kikai-on', 'kikai-end'); 
      $('.big-title-one').children('img').attr('src', src).addClass('open'); //書き換えたsrcをimgタグに設定する

      var src = $('.big-title-two').children('img').attr('src').replace('shuhen-end', 'shuhen-on'); 
      $('.big-title-two').children('img').attr('src', src).removeClass('open'); //書き換えたsrcをimgタグに設定する

      var src = $('.big-title-three').children('img').attr('src').replace('maker-end', 'maker-on'); 
      $('.big-title-three').children('img').attr('src', src).removeClass('open'); //書き換えたsrcをimgタグに設定する

      
      $('.machinelist').removeClass('onactive-table');


      ////////////////////show

      $(".machine-area").show();
      $(".easy-search").show();
      $(".search_list").show();

      ////////////////////hide

      $('.shuhen-area').hide();
      $('.section').hide();
      $('.machinetools').hide();
      $('.search_list_maker').hide();
      $('.search_list_peripheral').hide();
      
      

    }

     else if($(this).hasClass('open') == true){
      
      
    }

    else{
     // $(this).attr('src', 'mon_gate_close.png').removeClass('open');
     // $('.big-title-one img').attr('src', 'mon_gate_close.png').removeClass('open');
    }
  });
});


*/


/*

$(function(){

  //$('.search_list_peripheral').hide();

  $('.big-title-two img').click(function(e){

    if($(this).hasClass('open') == false){
      //$(this).attr('src', 'kikai-end.png').addClass('open');
       var src2 = $('.big-title-two').children('img').attr('src').replace('shuhen-on', 'shuhen-end'); 
      $('.big-title-two').children('img').attr('src', src2).addClass('open'); //書き換えたsrcをimgタグに設定する

      var src = $('.big-title-one').children('img').attr('src').replace('kikai-end', 'kikai-on'); 
      $('.big-title-one').children('img').attr('src', src).removeClass('open'); //書き換えたsrcをimgタグに設定する

      var src3 = $('.big-title-three').children('img').attr('src').replace('maker-end', 'maker-on'); 
      $('.big-title-three').children('img').attr('src', src3).removeClass('open'); //書き換えたsrcをimgタグに設定する


      ////////////////////show
      $('.shuhen-area').show();
      $(".easy-search").show();
      $('.search_list_peripheral').show();

      ////////////////////hide
      $(".machine-area").hide();
      $('.section').hide();
      $('.machinetools').hide();
      $('.search_list_maker').hide();
      $(".search_list").hide();

      
      $('.machinelist').removeClass('onactive-table');


    }

     else if($(this).hasClass('open') == true){

     
    }

    else{
     // $(this).attr('src', 'mon_gate_close.png').removeClass('open');
     // $('.big-title-one img').attr('src', 'mon_gate_close.png').removeClass('open');
    }
  });
});

*/

/*


$(function(){

  $('.search_list_peripheral').hide();

  $('.big-title-two img').click(function(e){

    if($(this).hasClass('open') == false){
      //$(this).attr('src', 'kikai-end.png').addClass('open');
       var src2 = $('.big-title-two').children('img').attr('src').replace('shuhen-on', 'shuhen-end'); 
      $('.big-title-two').children('img').attr('src', src2).addClass('open'); //書き換えたsrcをimgタグに設定する

      var src = $('.big-title-one').children('img').attr('src').replace('kikai-end', 'kikai-on'); 
      $('.big-title-one').children('img').attr('src', src).removeClass('open'); //書き換えたsrcをimgタグに設定する

      var src3 = $('.big-title-three').children('img').attr('src').replace('maker-end', 'maker-on'); 
      $('.big-title-three').children('img').attr('src', src3).removeClass('open'); //書き換えたsrcをimgタグに設定する


      ////////////////////show
      $('.shuhen-area').show();
      $(".easy-search").show();
      $('.search_list_peripheral').show();

      ////////////////////hide
      $(".machine-area").hide();
      $('.section').hide();
      $('.machinetools').hide();
      $('.search_list_maker').hide();
      $(".search_list").hide();

      
      $('.machinelist').removeClass('onactive-table');


    }

     else if($(this).hasClass('open') == true){

     
    }

    else{
     // $(this).attr('src', 'mon_gate_close.png').removeClass('open');
     // $('.big-title-one img').attr('src', 'mon_gate_close.png').removeClass('open');
    }
  });
});

*/


/*


$(function(){
  
 // $('.search_list_maker').hide();

  $('.big-title-three img').click(function(e){

    if($(this).hasClass('open') == false){
      //$(this).attr('src', 'kikai-end.png').addClass('open');


       var src = $('.big-title-one').children('img').attr('src').replace('kikai-end', 'kikai-on'); 
      $('.big-title-one').children('img').attr('src', src).removeClass('open'); //書き換えたsrcをimgタグに設定する

      var src2 = $('.big-title-two').children('img').attr('src').replace('shuhen-end', 'shuhen-on'); 
      $('.big-title-two').children('img').attr('src', src2).removeClass('open'); //書き換えたsrcをimgタグに設定する

       var src3 = $('.big-title-three').children('img').attr('src').replace('maker-on', 'maker-end'); 
      $('.big-title-three').children('img').attr('src', src3).addClass('open'); //書き換えたsrcをimgタグに設定する


      ////////////////////show
      $('.search_list_maker').show();

      ////////////////////hide

      $(".easy-search").hide();
      $(".search_list").hide();
      $('.search_list_peripheral').hide();
     
    }

     else if($(this).hasClass('open') == true){


     
    }

    else{
     // $(this).attr('src', 'mon_gate_close.png').removeClass('open');
     // $('.big-title-one img').attr('src', 'mon_gate_close.png').removeClass('open');
    }
  });
});

*/


/////////////////////////////////////////////////////////////////////
///////検索
/////////////////////////////////////////////////////////////////////


jQuery(function($) {
  $('.ac-child-one ul li').click(function() {
    var index = $('.ac-child-one ul li').index(this);
    $('.machine-list-one-li').removeClass('active');
    $(this).addClass('active');
  });
});


jQuery(function($) {
  $('.ac-child-two ul li').click(function() {
    var index = $('.ac-child-two ul li').index(this);
    $('.machine-list-two-li').removeClass('active');
    $(this).addClass('active');
  });
});

jQuery(function($) {
  $('.ac-child-three ul li').click(function() {
    var index = $('.ac-child-three ul li').index(this);
    $('.machine-list-three-li').removeClass('active');
    $(this).addClass('active');
  });
});




// アコーディオン

/*
$(function () {
 // $(".ac-child").hide();
  $('.ac-parent').on('click', function () {
    $(this).next().slideToggle();
    //openクラスをつける
    $(this).toggleClass("open");
    //クリックされていないac-parentのopenクラスを取る
    $('.ac-parent').not(this).removeClass('open');

    // 一つ開くと他は閉じるように
    $('.ac-parent').not($(this)).next('.ac-child').slideUp();
  });
});
*/


// 検索表示

$(function () {

  $('.machine-list-one-li').on('click', function(){
    var click =  $(this).data('value');
    $('#selected').text(click).css('background', '#B1CB40');
    $('.vv').val(click);
    $('head').append('<style>#selected:after{ border-right: #fff 3px solid ; } </style>');
    $('head').append('<style>#selected:after{ border-bottom: #fff 3px solid ; } </style>');
    
    // var index = $('.machine-list-one-li').index(this);
    // $('.active').removeClass('active');
    // $(this).addClass('active');

  });

  $('.machine-list-two-li').on('click', function(){
    var click =  $(this).data('value');
    $('.vv2').val(click);
    $('#selected2').text(click).css('background', '#B1CB40');
    $('head').append('<style>#selected2:after{ border-right: #fff 3px solid ; } </style>');
    $('head').append('<style>#selected2:after{ border-bottom: #fff 3px solid ; } </style>');
  });

  $('.machine-list-three-li').on('click', function(){
    var click =  $(this).data('value');
    $('.vv3').val(click);
    $('#selected3').text(click).css('background', '#B1CB40');
    $('head').append('<style>#selected3:after{ border-right: #fff 3px solid ; } </style>');
    $('head').append('<style>#selected3:after{ border-bottom: #fff 3px solid ; } </style>');
  });
  

});



// 中分類

jQuery(function($){
  $('.child--section').hide();
  $('.machine-list-one-li').on('click',function(){
    $('.child--section').not($('.'+$(this).attr('id'))).hide();
    $('.'+$(this).attr('id')).show();
    $('.child---section').hide();
  });
});


// 小分類

jQuery(function($){
  $('.child---section').hide();
  $('.machine-list-two-li').on('click',function(){
    $('.child---section').not($('.'+$(this).attr('id'))).hide();
    $('.'+$(this).attr('id')).show();
  });
});



// 詳細検索


jQuery(function($){
  $('.detailed_search').hide();
  $('.machine-list-two-li').on('click',function(){
    $('.detailed_search').not($('.'+$(this).attr('id'))).hide();
    $('.'+$(this).attr('id')).show();
  });
});


/////////////////////////////////////////////////////////////////////
///////商品ページ
/////////////////////////////////////////////////////////////////////


//サムネイル
var sliderThumbnail = new Swiper('.slider-thumbnail', {
  slidesPerView: 6,
  freeMode: true,
  watchSlidesVisibility: true,
  watchSlidesProgress: true,
  spaceBetween: 10//何ピクセル画像の間隔をあけるか
  
});

//スライダー
var slider = new Swiper('.slider', {
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  thumbs: {
    swiper: sliderThumbnail

  },

   //自動再生する場合
   autoplay: {
    delay: 3000, //3秒後に次の画像に代わる
    disableOnInteraction: false, 
    },
    loop: true,//最後の画像までいったらループする
    //ページネーションをつける場合
});


///////item-page-bottom



//slider-1
var slider = new Swiper('.slider-1', {
  slidesPerView:4,//画像を何枚表示するか
  spaceBetween: 10,//何ピクセル画像の間隔をあけるか

  //自動再生する場合
  autoplay: {
    delay: 3000, //3秒後に次の画像に代わる
    disableOnInteraction: false, 
    },
    loop: true,//最後の画像までいったらループする
    //ページネーションをつける場合


  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

});
 


//slider-2
var slider = new Swiper('.slider-2', {
  slidesPerView:4,//画像を何枚表示するか
  spaceBetween: 10,//何ピクセル画像の間隔をあけるか

  //自動再生する場合
  autoplay: {
    delay: 3000, //3秒後に次の画像に代わる
    disableOnInteraction: false, 
    },
    loop: true,//最後の画像までいったらループする
    //ページネーションをつける場合


  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

});

//slider-3
var slider = new Swiper('.slider-3', {
  slidesPerView:4,//画像を何枚表示するか
  spaceBetween: 10,//何ピクセル画像の間隔をあけるか

  //自動再生する場合
  autoplay: {
    delay: 3000, //3秒後に次の画像に代わる
    disableOnInteraction: false, 
    },
    loop: true,//最後の画像までいったらループする
    //ページネーションをつける場合


  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  
});
 












