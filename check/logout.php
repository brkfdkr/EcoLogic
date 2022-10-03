<?php
    setcookie("user",$_COOKIE["user"],time()-1,"/");
    setcookie("error1",$_COOKIE["error1"],time()-1,"/");
    setcookie("error2",$_COOKIE["error2"],time()-1,"/");
    header('Location: ../index.php');
    exit();
?>