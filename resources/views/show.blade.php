<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description"  content="書籍「動くWebデザインアイディア帳」のサンプルサイトです">

    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <!--==============レイアウトを制御する独自のCSSを読み込み===============-->
    <link rel="stylesheet" type="text/css" href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/reset.css">
    <link rel="stylesheet" type="text/css" href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/5-1-5/css/5-1-5.css">
    <link rel="stylesheet" href="input2.css">
    <title>案件検索</title>
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
      <form>
      <div>案件検索</div>
      <span><input type="text" name="keyword" value="" placeholder="キーワードを入力"></span>
      <form action="" method="">
      <span><input type="submit" value="検索" class="b" ></span>
      </form>
    </form>

    <div class="pulldown">
        <span class="pref">
            <p>エリア：<select name="pref">
            <option value="">▼選択</option>
            <option value="Tokyo">東京</option>
            <option value="Osaka">大阪</option>
            <option value="Fukuoka">福岡</option>
            </select></p>
        </span>

        <span class="matter">
            <p>職種：<select name="matter">
            <option value="">▼選択</option>
            <option value="Tokyo">漁師</option>
            <option value="Osaka">農家</option>
            <option value="Fukuoka">錬金術師</option>
            </select></p>
        </span>

        <span class="level">
            <p>レベル：<select name="level">
            <option value="">▼選択</option>
            <option value="Tokyo">1</option>
            <option value="Osaka">2</option>
            <option value="Fukuoka">3</option>
            </select></p>
        </span>
    </div>




</body>

<style>

@charset "utf-8";


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

form {
    margin-top: 7%; 
}

form {
    margin-top: 7%; 
}
.b{
  background-color: #fd0000;
}

.pulldown {
    display:flex;
    float: left;
  list-style: none;
  margin: 30px;
}

.pref {
   
}

.mattter {
    
}

.level {
    
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