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
            
            $s=$array[2]+$tl;
            setcookie("donation",$s,time()+3600,"/");
            $myfile = fopen("donation-history.txt", "a") or die ("FileError!");
            fwrite($myfile,"(".$uname.",".$tl."),");
            fclose($myfile);
            mysqli_query($c,"UPDATE Users SET Donation='$s' WHERE username='$uname';");
            echo 'Success';
            header('Location: ../main.php#4sec');
            exit();


        }
        else{
            setcookie("error2",True,time()+3600,"/");
            echo 'Fail!';
            header('Location: ../main.php#4sec');
            exit();
        }
        }
        else{
            header('Location: ../index.php');
        }
        
        
    ?>
</body>
</html>