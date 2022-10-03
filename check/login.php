<!DOCTYPE html>
<html><head> <meta charset="UTF-8"><title>Ecologycal Farming</title></head>
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
            echo $uname.'<br>';
            echo $passw.'<hr>';
            $u=mysqli_query($c,"SELECT * FROM Users WHERE username='$uname';");
            $array=mysqli_fetch_row($u);
            echo 'username='.$array[0]; echo'<hr>';
            echo 'p='.$array[1];
    
            function passwCheck($passw,$uname,$array) {
                if($passw==$array[1]){
                    setcookie("user",$uname,time()+3600,"/");
                    setcookie("donation",$array[2],time()+3600,"/");
                    setcookie("error1",False,time()+3600,"/");
                    echo 'Success';
                    header('Location: ../main.php');
                    exit();
        
        
                }
                else{
                    setcookie("error1",True,time()+3600,"/");
                    echo 'Fail!';
                    header('Location: ../index.php');
                    exit();
                };
            }
    
            passwCheck($passw,$uname,$array);
        }
        else{
            header('Location: ../logout.php');
            exit();
        }
        



    ?>
</body>
</html>
        