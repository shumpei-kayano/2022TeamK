
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>アカウント情報</title>
<meta name="description"  content="書籍「動くWebデザインアイディア帳」のサンプルサイトです">

<meta name="viewport" content="width=device-width,initial-scale=1.0">
<!--==============レイアウトを制御する独自のCSSを読み込み===============-->
<link rel="stylesheet" type="text/css" href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/reset.css">
<link rel="stylesheet" type="text/css" href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/5-1-5/css/5-1-5.css">
</head>
<body>
  <header id="header">
    <h1>Logo</h1>
    <nav>
    <ul id="g-navi">
      <li><a href="#area-1">サインアウト</a></li>
    </ul>
  </nav>
  </header>
  <h2>アカウント情報</h2>
  <p id="back"><a href="login">マイページに戻る</a></p>
  <form method="GET" action="/accountUpdate">
    @csrf
    <input type="submit" name="accountUpdate" value="アカウント編集">
    </form>
  {{-- <form method="GET" action="/accountUpdate"><a href="home" name="hensyuu" id="update" style="padding-right:2%;">アカウント情報の編集</a> --}}
    @csrf
  </form>

  <div style="background:#FCEDED;margin-left:auto;margin-right:auto; width:700px; padding:150px; border-radius: 10px; border: 2px solid #000000;">
<p id="id">ID：<input type="text" name="userid" style="justify-content: center; align-items: center; width: 450px; height:45px; background:white; border: solid;
    border-color: #000000;"></p>
<p id="pass">パスワード：<input type="text" name="password" placeholder="{{ $user->email }}" style="justify-content: center; align-items: center; width: 450px; height:45px; background:white; border: solid;
        border-color: #000000;"></p>
</div>
<h4><a href="dalete" style="margin-right:18%;">アカウント削除はこちらから</a></h4>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/5-1-5/js/5-1-5.js"></script>


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


/*========= レイアウトのためのCSS ===============*/

h1{
  font-size:1.2rem;
}

h2{
  font-size:1.0rem;
  text-align: left;
  margin-left: 2%;
  margin-top: 2%;
}



h4{
    font-size: 0.8rem;
    text-align:right;
    padding-right: 10%;
    padding-top: 3%;
}

/*div{
    padding: 150px;
  border: 1px solid #000;
}*/


#back{
    font-size: 1.0rem;
   text-align: right;
   margin-right: 2%;
   padding-top: 0%;
}

small{
  background:rgb(229, 223, 223);
  color:#fff;
  display: block;
  text-align: center;
  padding:20px;
}

#id{
    position: absolute;
    top: 30%;
    left: 50%;
    transform: translate(-50%, -50%);
}

#pass{
    position: absolute;
    top: 40%;
    left: 50%;
    transform: translate(-50%, -50%);
}


section{
  padding:30px;
}

section:nth-child(2n){
  background:#f3f3f3; 
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