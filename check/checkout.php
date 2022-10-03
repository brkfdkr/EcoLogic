<!DOCTYPE html>
<html lang="en">
    <head> 
        <meta charset="UTF-8">
        <title>EcoLogic</title>
        <link rel="stylesheet" href="../CSS/main.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link href="../CSS/bootstrap.css" rel="stylesheet">
        <link rel="icon" href="https://i.hizliresim.com/f6no5n6.png" type="image/png">
    </head>

    <body>
        <div class="checkout-page">
            <h1 class="head">CHECKOUT</h1>
            <div class="card card-body">
                <form id="donation-form" action="payment.php" method="post">
                    <div class="row">
                        <div class="col">
                        <input type="text" name="uname" class="form-control" value="<?php echo $_COOKIE["user"]; ?>" readonly>
                        </div>
                        <div class="col">
                        <input type="password" name="passw2" class="form-control" placeholder="password">
                        </div>
                        <div class="col">
                        <input class="form-control" id="ccn" type="tel" pattern="[0-9\s]{13,19}" maxlength="19" placeholder="Payment Card Number" required>
                        </div>
                        <div class="col">
                        <input class="form-control" id="field" type="text" pattern="([0-9][0-9][0-9])" name="cvv" placeholder="CVC" required/></div>
                        <div class="col">
                        <div style="background-color: whitesmoke; display: flex;
                            align-items: center;
                            justify-content: center;
                          
                            padding: 0 15px;
                          
                            font-size: 1.3rem;" class="subtotal">
                        </div>
                        </div>
                        <br>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <input class="form-control" id="address" type="text" placeholder="Address" required/>
                        </div>
                    </div>
                    <br><hr>
                    <input style=" margin:0px auto; display:block;" class="btn btn-secondary " type="Submit" name="submitted" value="Submit">
                    <hr>
                </form>

            </div>
            <?php if($_COOKIE["error2"]==True){
                    echo '<p style="color: red">Your payment information could not be retrieved or your password is incorrect.</p>';
                }?>
            

        </div>


        <script src="JS/cart-app.js"></script>
        <script src="JS/bootstrap.bundle.js"></script>
    
    </body>
</html>