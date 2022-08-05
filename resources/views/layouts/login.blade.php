<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
    <!--IEブラウザ対策-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="ページの内容を表す文章" />
    <title></title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/original.css">
    <!--スマホ,タブレット対応-->
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <!--サイトのアイコン指定-->
    <link rel="icon" href="画像URL" sizes="16x16" type="image/png" />
    <link rel="icon" href="画像URL" sizes="32x32" type="image/png" />
    <link rel="icon" href="画像URL" sizes="48x48" type="image/png" />
    <link rel="icon" href="画像URL" sizes="62x62" type="image/png" />
    <!--iphoneのアプリアイコン指定-->
    <link rel="apple-touch-icon-precomposed" href="画像のURL" />
    <!--OGPタグ/twitterカード-->
</head>

<body>
<header>
    <div class="accordion_one">
        <div class="accordion_header"><img src="images/dawn.png"><div class="i_box"><i class="one_i"></i></div></div>
    </div>

    <div class="accordion_inner">
        <div class="accordion_one">
            <div class="accordion_header"><a href="/top">ホーム</a><div class="i_box"><i class="ona_i"></i></div></div>
        </div>
        <div class="accordion_one">
            <div class="accordion_header"><a href="/profile">プロフィール</a><div class="i_box"><i class="ona_i"></i></div></div>
        </div>
        <div class="accordion_one">
            <div class="accordion_header"><a href="/logout">ログアウト</a><div class="i_box"><i class="ona_i"></i></div></div>
        </div>

    </div>









  <div id = "head">
        <h1 class='main_logo'><a href='/top'><img src="images/main_logo.png"></a></h1>


    <div class="menu">
        <label for="menu_bar01"><p class='username-photo'>○○さん<img src="images/dawn.png"></p></label>
    </div>

    <div class="menu-trigger">
            <span></span>
            <span></span>
    </div>

    <nav class="g-navi">
        <div class="container nav-wrapper">

        <ul>
            <li class="nav-item"></li>
            <li class="nav-item"><a href="/profile">プロフィール</a></li>
            <li class="nav-item"><a href="/logout">ログアウト</a></li>
        </ul>
        </div>
    </nav>
  </div>
</header>
    <header>





    </header>
    <div id="row">
        <div id="container">
            @yield('content')
        </div >
        <div id="side-bar">
            <div id="confirm">
                <p>〇〇さんの</p>
                <div>
                <p>フォロー数</p>
                <p>〇〇名</p>
                </div>
                <p class="btn"><a href="/followList">フォローリスト</a></p>
                <div>
                <p>フォロワー数</p>
                <p>〇〇名</p>
                </div>
                <p class="btn"><a href="/followerList">フォロワーリスト</a></p>
            </div>
            <p class="btn"><a href="">ユーザー検索</a></p>
        </div>
    </div>
    <footer>
    </footer>
    <script src="JavaScriptファイルのURL"></script>
    <script src="JavaScriptファイルのURL"></script>
</body>
</html>
