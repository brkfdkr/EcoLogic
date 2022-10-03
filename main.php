<!DOCTYPE html>
<html lang="en"><head> 
    <meta charset="UTF-8"><title>EcoLogic</title><link rel="stylesheet" href="CSS/main.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="CSS/bootstrap.css" rel="stylesheet">
    <link rel="icon" href="https://i.hizliresim.com/f6no5n6.png" type="image/png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    
</head>
<body>
    <?php
        if(isset($_COOKIE["user"]))
        {
            $a='
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                '.$_COOKIE["user"].'
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#4sec"><button type="button" style="--bs-btn-border-color: none; text-align:left; color:black;--bs-btn-hover-bg: none;--bs-btn-hover-border-color: none"class="btn btn-outline-secondary" id="liveAlertBtn">Donation Status</button></a></li>
                    <li><a class="dropdown-item" href="shop.php">Shop</a></li>
                    <li><a class="dropdown-item" href="check/logout.php">Logout</a></li>
                </ul>
            </div>';
            $b='<button style="background: rgb(133,143, 14)" class="btn btn-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDonate" aria-expanded="false" aria-controls="collapseDonate">
            Donate
            </button>';
        }
        else
        {
            $a='<a href="index.php">SIGN IN</a>';
            $b='<button style="background: rgb(133,143, 14)" class="btn btn-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDonate" aria-expanded="false" aria-controls="collapseDonate" disabled>
            Sign in for donation.
            </button>';
        }
    ?>
    <div class="container1">
    <!-- Navbar -->
    
        <header class="header">
            <a href="main.php" class="logo"><img src="https://i.hizliresim.com/f6no5n6.png" alt=""><b>Eco</b><u>Logic</u></a>
            <ul>
                <li><a href="#1sec" >Home</a></li>
                <li><a href="#2sec" >Mission</a></li>
                <li><a href="#3sec" >Cooperatives</a></li>
                <li><a href="#4sec" >Donation</a></li>
                <li><a href="#5sec" >Contact</a></li>
                <li><?php echo $a; ?></li>
            </ul>
        </header>

            <section id="1sec" class="banner">
                <h1 class="bg-text">WELCOME TO<b> Eco</b><u>Logic</u></h1>
            </section>
            <section id="2sec" class="two1">
                <h1>Mission</h1>
                <div>
                <br><br><hr><p style="font-size: 28px" >Due to the rapid food production that emerged with the increase in the human population, the fact that food and agricultural production started to be made in all kinds of unhealthy ways has started to be dangerous for humanity. Our aim is to determine the most fertile lands and to grow organic foods by using efficient and healthy agricultural technologies and to develop the natural agricultural ecosystem. In order for people to be fed in better conditions and to reach food easily, we launch the product in the cheapest way possible, through various donation campaigns and by establishing a self-sufficient farm economy.</p><hr>
                </div>
            </section>
            <section id="3sec" class="three1">
                <div class="container bcontent">
                    <h1 style="color: whitesmoke">Cooperatives</h1>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="card">
                                <img src="https://www.kulturportali.gov.tr/repoKulturPortali/large/SehirRehberi//NeredeKonaklanir/20170703165922875_1404910562.jpg?format=jpg&quality=50" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Farm Marmara</h5>
                                    <p class="card-text">We grow wheat, barley, corn, sunflowers, peaches, pears, olives with our 2 linked farms in South and West Marmara. Power of farms is provided by solar panels.</p>
                                    <a href="shop.php#mar" class="btn btn-primary">Products</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <img src="https://listelist.com/wp-content/uploads/2019/06/zeytin-bah%C3%A7esi-e1559684213173.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Aegean Farm</h5>
                                    <p class="card-text">Figs, chestnuts, olives, grapes and pomegranates are produced in our farm, which was established near the Büyük Menderes River.</p>
                                    <a href="shop.php#aeg" class="btn btn-primary">Products</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <img src="https://i12.haber7.net//haber/haber7/photos/2022/02/iklim_degisikligine_karsi_yeni_plan_akdenizde_kahve_marmarada_pamuk_1642313803_8172.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Mediterrenian Farm</h5>
                                    <p class="card-text">In the favorable climate and soil of the Mediterranean, citrus fruits, bananas, rice, plums are grown in completely natural ways.</p>
                                    <a href="shop.php#mid" class="btn btn-primary">Products</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <img src="https://static.dw.com/image/55339652_905.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Anatolian Farm</h5>
                                    <p class="card-text">In our farm established in the heart of Anatolia, cereals, sugar beets, onions, potatoes, zucchini, beans, chickpeas is grown organically.</p>
                                    <a href="shop.php#ana" class="btn btn-primary">Products</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
            </section>
            <section id="4sec" class="two1">
                <h1>Donation</h1>
                <div>
                    <br><br>
                <div id="liveAlertPlaceholder"></div>
                <hr><p style='color: rgb(133,143, 14); font-size:30px;'>Help us</p><p style='font-size:23px '>to spread the green world goal!<br><br>"1 &#x20BA; Donation = 7 random seeds"<br><br>Those who donate 1 million seeds will receive a lifetime 10% discount on our products (Soon).<p><hr>
                <?php if($_COOKIE["error2"]==True){echo '<p style="font-size: 20px; color: red ;">Incorrect password!</p>';}?>
                <?php echo $b; ?>
                <div class="collapse" id="collapseDonate">
                <div class="card card-body">
                    <form id="donation-form" action="check/donation.php" method="post">
                        <div class="row">
                            <div class="col">
                            <input type="text" name="uname" class="form-control" value="<?php echo $_COOKIE["user"]; ?>" readonly>
                            </div>
                            <div class="col">
                            <input type="password" name="passw2" class="form-control" placeholder="password">
                            </div>
                            <div class="col">
                            <input class="form-control" id="ccn" type="tel" pattern="[0-9\s]{13,19}" maxlength="19" placeholder="Payment Card Num" required>
                            </div>
                            <div class="col">
                            <input class="form-control" id="field" type="text" pattern="([0-9][0-9][0-9])" name="cvv" placeholder="CVC" required/>
                            </div>
                            <div class="col">
                            <input type="number" name="tl" class="form-control" min="1" placeholder="Amount(&#x20BA;)">
                            </div>
                            <br>
                        </div>
                        <input style=" margin:0px auto; display:block;" class="btn btn-secondary " type="Submit" name="submitted" value="Submit">
                        <hr>
                    </form>

                </div>
                </div>
                </div>
            </section>
            <section id="5sec" class="three1">
                <div class="container">
                    <h1 style="color: whitesmoke">Contact us</h1><hr><br>
                    <div class="row">
                        <div style="font-size: 25px;" class="col">
                            <h4><b>Addresses</b></h4><br>
                            <i class="fa fa-map-marker-alt" style="font-size:26px;color:white"></i> <a style="color: white;" href="https://www.google.com/maps/dir//it%C3%BC+fen+edebiyat/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x14cab5e9e4da5f07:0x28d95a9e71bac4c3?sa=X&ved=2ahUKEwjN2-Ly-I74AhWiS_EDHWllA0gQ9Rd6BAhbEAU">Maslak, 34467 Sarıyer/Istanbul</a><br><br>
                            <i class="fa fa-envelope" style="font-size:26px;color:white"></i> <a style="color: white;" href="https://mail.google.com/">E-Mail: ecologic@info.com</a><br><br>
                            <i class="fa fa-phone" style="font-size:26px;color:white"></i> <a style="color: white;" href=#>Phone: +9005333333333</a><br><br>
                        </div>
                        <div class="col">
                            <h4><b>Follow us</b></h4><br>
                                
                            <a href="https://www.instagram.com"><i style="font-size:26px;color:white" class="fab fa-instagram"></i></a><br><br>
                            <a href="https://www.linkedin.com"><i style="font-size:26px;color:white" class="fab fa-linkedin-in"></i></a><br><br>
                            <a href="https://www.facebook.com/"><i style="font-size:26px;color:white" class="fab fa-facebook-f"></i></a><br><br>
                            <a href="https://twitter.com/"><i style="font-size:26px;color:white" class="fab fa-twitter"></i></a><br><br>
                                    
                                
                        </div>
                    </div>
                </div>

            </section>
        <script src="JS/bootstrap.bundle.js"></script>
        <script>
            function asd(a)
            {
                if(a==1)
                    document.getElementById("donation-form").style.display="none";
                else
                    document.getElementById("donation-form").style.display="block";
            }
        </script>
        <script>
            var alertPlaceholder = document.getElementById('liveAlertPlaceholder')
            var alertTrigger = document.getElementById('liveAlertBtn')
            var donation ='<?php echo $_COOKIE["donation"]*7?>';

            function alert(message, type) {
            var wrapper = document.createElement('div')
            wrapper.innerHTML = '<div class="alert alert-' + type + ' alert-dismissible" role="alert">' + message + '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'

            alertPlaceholder.append(wrapper)
            }

            if (alertTrigger) {
            alertTrigger.addEventListener('click', function () {
                if(donation!=0){
                    alert('Thank you! You donated '+donation+' seed total.', 'success')}
                else{
                    alert('You have not donated yet.', 'success')}
                })  
            }
        </script>
    </div>
</body>
</html>