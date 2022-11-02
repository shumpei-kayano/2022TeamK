<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description"  content="書籍「動くWebデザインアイディア帳」のサンプルサイトです">

    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <!--==============レイアウトを制御する独自のCSSを読み込み===============-->
    <link rel="stylesheet" type="text/css" href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/reset.css">
    <link rel="stylesheet" type="text/css" href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/5-1-5/css/5-1-5.css">
    <title>Document</title>
</head>
<body>
    <header id="header" class="fixed">
        <h1>Logo</h1>
        <nav>
        <ul id="g-navi">
          <li><a href="#area-1">サインアウト</a></li>
        </ul>
      </nav>
      </header>
      <div>
     <span><b><p id="midasi" class="favolite">お気に入りリスト🌟</p></b></span>
      <span><a href="#" class="btn-flat-border">🔍  案件検索</a></span>
      </div>

      <span style="background:#861f1f; width:100%; height:20px;"><span>
        <span><p id="myp-back"><a href="login">マイページに戻る</a></p><span>

     <div style="background:#FCEDED;margin-left:auto;margin-right:auto; width:700px; padding:300px; margin-top:20px; border-radius: 10px; border: 2px solid #000000;">
        <p>
            
        </p>
     </div>

</body>
<style>
        @charset "utf-8";

body {
    background-color: #ffffff;
}
/*========= 上部固定させるためのCSS ===============*/
#header{
  height: 55px;/*高さ指定*/
  width:100%;/*横幅指定*/
  /*以下はレイアウトのためのCSS*/
  display: flex;
  justify-content: space-between;
  align-items: center;
  background:rgb(222, 70, 70);
  color:#fff;
  text-align: center;
  padding: 20px;
}

/*JSを使いfixedクラスが付与された際の設定*/
#header.fixed{
  position: fixed;/*fixedを設定して固定*/
    z-index: 999;/*最前面へ*/
    top:0;/*位置指定*/
    left:0;/*位置指定*/
}

#midasi {
  font-family: serif;
  font-size:1.0rem;
  text-align: left;
  margin-left: 2%;
  margin-top: 2%;
}

#sc {
    font-size:1.0rem;
    float: right;
    margin-right: 5%;
    margin-top: 2%;
}

.btn-flat-border {
  display: inline-block;
  padding: 0.3em 1em;
  text-decoration: none;
  color: #67c5ff;
  background-color: rgb(242, 246, 210);
  border: solid 2px #67c5ff;
  border-radius: 3px;
  transition: .4s;
  font-size:1.0rem;
    float: right;
    margin-right: 5%;
    margin-top: 90px;
}

.btn-flat-border:hover {
  background: #67c5ff;
  color: white;
}
.favolite {
    display: inline-block;
}

#myp-back {
    font-size: 1.0rem;
   text-align: right;
   margin-right: 5%;
   padding-top: 100px;
}
</style>

<script>
    //スクロールすると上部に固定させるための設定を関数でまとめる
function FixedAnime() {
  var headerH = $('#header').outerHeight(true);
  var scroll = $(window).scrollTop();
  if (scroll >= headerH){//headerの高さ以上になったら
      $('#header').addClass('fixed');//fixedというクラス名を付与
    }else{//それ以外は
      $('#header').removeClass('fixed');//fixedというクラス名を除去
    }
}

//ナビゲーションをクリックした際のスムーススクロール
$('#g-navi a').click(function () {
  var elmHash = $(this).attr('href'); //hrefの内容を取得
  var pos = Math.round($(elmHash).offset().top-120);  //headerの高さを引く
  $('body,html').animate({scrollTop: pos}, 500);//取得した位置にスクロール※数値が大きいほどゆっくりスクロール
  return false;//リンクの無効化
});


// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function () {
  FixedAnime();/* スクロール途中からヘッダーを出現させる関数を呼ぶ*/
});

// ページが読み込まれたらすぐに動かしたい場合の記述
$(window).on('load', function () {
  FixedAnime();/* スクロール途中からヘッダーを出現させる関数を呼ぶ*/
});
</script>
</html>