<?php
if($_COOKIE['cookie']!="l0ginh3h3"){
    die('plz login first');
}
?>
<body>
<h1>歡迎回來，有馬かな#40000</h1>
<a href='./board.php?function=FUNC1'>請假系統</a>
<a href='./board.php?function=FUNC2'>舉報系統</a>
<a href='./board.php?function=FUNC3'>社群通知</a>
</body>
<?php 
if(isset($_GET['function'])){
    if($_GET['function']=='FUNC1'){
        echo('請假功能維修中');
    }
    if($_GET['function']=='FUNC2'){
        echo('舉報功能維修中');
    }
    if($_GET['function']=='FUNC3'){
        echo('社群通知維修中');
    }    
    if($_GET['function']=='FUNC4'){
        header("Location: NDAwMDA=.php");
    }    
}
?>