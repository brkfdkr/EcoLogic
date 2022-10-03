<!DOCTYPE html>
<html><head> <meta charset="UTF-8"><title>Ecologic</title></head>
<body>
    <script>
        localStorage.setItem("error","False");
    </script>
    
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
            $isexists=mysqli_num_rows(mysqli_query($c,"SELECT * FROM Users WHERE username='$uname' LIMIT 1;"));
            if($isexists==0){
                mysqli_query($c,"INSERT INTO Users (username,password,Donation) VALUES ('$uname','$passw',0);");
                echo 'Success';
                header('Location: ../index.php');
                exit();
            }
            else{
                echo 'Fail';
                setcookie("error2",True,time()+60,"/");
                header('Location: ../registerindex.php');
                exit();
            }
        }
        else{
            header('Location: ../logout.php');
            exit();
        }


    
    ?>

</body>
</html>