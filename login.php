<?php 
if(isset($_POST['username'])&&isset($_POST['password'])){
    if($_POST['username']!='40000'||$_POST['password']!='JoyLife'){
           echo('<h1>Login Failed</h1>');
    }
    else{
        setcookie("cookie", "l0ginh3h3");
        header('Location: board.php');
        exit();
    }
}
?>
<h1>login plz</h1>
<form action="login.php" method="post">
<input name="username" id="username" placeholder="user-id" autocomplete="nope">
<input name="password" id="password" placeholder="password">
<button id="Button"  type="submit">Sign in</button>
</div>
</form>
