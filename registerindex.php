<!DOCTYPE html>
<html lang="en">
    <head> 
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <meta charset="UTF-8"><title>EcoLogic</title><link rel="stylesheet" href="CSS/register.css">
        <link rel="icon" href="https://i.hizliresim.com/f6no5n6.png" type="image/png">
        <link href="CSS/bootstrap.css" rel="stylesheet">

        
    </head>
    <body>
        <div id="result"></div>
        <div id="bg">    
        </div>  
        <div id="whitebg">
            <div id="register">
                <img src="https://i.hizliresim.com/nvo26ny.png" alt="..." style="width: 70%;margin-left: 14%;"> 
                <h2>Welcome</h2><br>
                <form action="check/register.php" method="post">
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
                <?php if($_COOKIE["error2"]==True){
                    echo '<p style="color: red">username already exists!</p>';
                }?>
                <p>Already have an account? <a href='index.php' onclick='theFunction()'>Sign in.</a></p>
            </div> 
        </div>
        <?php setcookie("error1",$_COOKIE["error1"],time()-1,"/"); ?>
        
    </body>
</html>
