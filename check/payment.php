<!DOCTYPE html>
<html><head> <meta charset="UTF-8"><title>EcoLogic</title></head>
<body>
    <h2>Processing...<h2>
    <?php
        include '../connect.php';
        extract($_POST);
        foreach($_POST as $k => $v){
            $p = trim($p);
            $p = stripslashes($p);
            $p = htmlspecialchars($p);
        }
        if(empty($input)){
            $u=mysqli_query($c,"SELECT * FROM Users WHERE username='$uname';");
            $array=mysqli_fetch_row($u);
        
            if($passw2==$array[1]){
                setcookie("error2",False,time()+3600,"/");

                header('Location: ../shop.php');
                exit();


        }
        else{
            setcookie("error2",True,time()+3600,"/");
            echo 'Fail!';
            header('Location: checkout.php');
            exit();
        }
        }
        else{
            header('Location: ../logout.php');
        }
        
        
    ?>
</body>
</html>