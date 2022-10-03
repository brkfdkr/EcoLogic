<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <meta charset="UTF-8"><title>EcoLogic</title><link rel="stylesheet" href="CSS/index.css">
        <link href="CSS/bootstrap.css" rel="stylesheet">
        <link rel="icon" href="https://i.hizliresim.com/f6no5n6.png" type="image/png">
    </head>
<body>
    
    <div id="rightHalf">
    </div>
    <div id="leftHalf">
        

        <div id="Login">
            <img src="https://i.hizliresim.com/nvo26ny.png" alt="" style="width: 70%;margin-left: 14%;">
            <h2>Login</h2><br>
                <form action="check/login.php" method="post">
                    <div class="row mb-3">
                    <label for="colFormLabelSm" class="col-sm-2 offset-sm-1  col-form-label col-form-label-sm">Username: </label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control offset-sm-1 form-control-sm" name="uname" id="colFormLabelSm">
                    </div>
                    </div>
                    
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 offset-sm-1 col-form-label col-form-label-sm">Password: </label>
                        <div class="col-sm-7">
                        <input type="password" class="form-control offset-sm-1 form-control-sm" name="passw" id="inputPassword3">
                        </div>
                    </div>

                    <input style="margin:0px auto; display:block;" class="btn btn-secondary btn-sm" type="Submit" name="submitted" value="Submit">
                    <br>
                    <hr>
                </form> 
                <?php if($_COOKIE["error1"]==True){
                    echo '<p style="color: red">Incorrect username or password!</p>';
                }?>

            <p> Need an account? <a href='registerindex.php' onclick='theFunction()'>Sign up now!</a> or <a href='main.php' onclick='theFunction()'>Login as a Guest</a></p>
            
        </div>
    </div>

    <script>
    function theFunction () {
        // return true or false, depending on whether you want to allow the `href` property to follow through or not
    }
    extract($_POST);
    </script>
    <?php setcookie("error2",$_COOKIE["error2"],time()-1,"/"); ?>
</body>
</html>
