<?php 
if(isset($_POST['username'])&&isset($_POST['password'])){
    if($_POST['username']!='40000'&&$_POST['password']!='JoyLife'){
           echo('<h1>Login Failed</h1>');
    }
    else{
        setcookie("cookie", "l0ginh3h3");
        header('Location: board.php');
        exit();
    }
}
?>