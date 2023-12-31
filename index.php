<?php
if($_COOKIE['isAdmin']!='true'){
    setcookie("isAdmin", 'false');
    die('You are not Admin');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>B小町-管理頁面</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Description" lang="en" content="open source html and css template">
<meta name="author" content="mlp design">
<meta name="robots" content="index, follow">
<link rel="stylesheet" href="styles.css">
</head>
<body>

<!--page header-->
<div id="header">
<div class="shell">
<h1><span>B小町-管理頁面</span></h1>
</div>
</div>

<!--menu bar-->
<div id="menu">
<nav>
  <!--start responsive -->
  <input type="checkbox" id="show-menu" role="button">
  <label for="show-menu" class="open"><span class="fa fa-bars"></span></label>
  <label for="show-menu" class="close"><span class="fa fa-times"></span></label>
  <!--end responsive -->
<ul id="topnav">  
<li><a href="#公告">公告</a></li>
<li><a href="#文件">文件</a></li>
<li><a href="#留言板">留言板</a></li>
</ul>
</nav>
</div>

<!--contents-->
<div id="content">

<div class="pageitem">
<h2 id="公告">公告</h2>
<h3>最新通知</h3>
<p>1.最近網站疑似開始遭駭客入侵，請所有人員盡速<strong>更換易被猜測之密碼</strong></p>
<p>2.2024/1/21 即將登台配合演出，請所有人員加緊準備</p>
<p>3.請確認所有戴著鳥頭面具且穿緊身衣之人士身分，最近該當事人頻繁遭到身分盜用</p>
</div>

<div class="pageitem">
<h2 id="文件">文件</h2>
<h3>公告文件會放在這</h3>
<p><a href="./jan.pdf" target="_blank">一月快訊(點擊)</a></p>
</div>

<div class="pageitem">
<h2 id="留言板">留言板</h2>
<p><strong>有馬かな#40000：</strong>小蘇打快用完了，@ほしの あくあまりん幫我買JoyLife牌的，你知道我最愛了<3</p>
</div>
<a href='./login.php'>網站管理系統登入(點擊)</a>
</div>
</body>
</html>