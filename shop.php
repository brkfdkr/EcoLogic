<!DOCTYPE html>
<html lang="en"><head> 
    <meta charset="UTF-8"><title>EcoLogic-EcoShop</title><link rel="stylesheet" href="CSS/main.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="CSS/bootstrap.css" rel="stylesheet">
    <link rel="icon" href="https://i.hizliresim.com/f6no5n6.png" type="image/png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script> 
    $('#cartmenu').on('hide.bs.dropdown', function (e) {
        if (e.clickEvent) {
        e.preventDefault();
        }
    });
    </script> 
</head>
<body>
    <?php
        setcookie("error2",False,time()+3600,"/");
        if(isset($_COOKIE["user"]))
        {
            $a='
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                '.$_COOKIE["user"].'
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="shop.php">Shop</a></li>
                    <li><a class="dropdown-item" href="check/logout.php">Logout</a></li>
                </ul>
            </div>';
        }
        else
        {
            $a='<a href="index.php" >SIGN IN</a>';
        }
    ?>
    <div class="container1">
    <!-- Navbar -->
    
    <header class="header">
        <a href="main.php" class="logo"><img src="https://i.hizliresim.com/f6no5n6.png" alt="..."><b>Eco</b><u>Logic</u></a>
        <ul>
            <li><a href="main.php" >Home</a></li>
            <li><a href="#aeg" >Aegean</a></li>
            <li><a href="#mar" >Marmara</a></li>
            <li><a href="#mid" >Mediterranean</a></li>
            <li><a href="#ana" >Anatolian</a></li>

            <li><?php echo 
                '<div class="dropdown" id="cartmenu">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-shopping-cart"></i>
                    </button>
                    <ul class="dropdown-menu"  aria-labelledby="dropdownMenuButton1">
                    <li>              
                    <div class="cart" style="height: 100%; width: 500px; position: relative;">
                        <div class="cart-header" style="  display: flex; justify-content: space-around; padding: 10px 0;">
                            <div class="column1">Item</div>
                            <div class="column2">Unit price</div>
                            <div class="column3">Units(kg)</div>
                        </div>
                        <div class="cart-items" style="max-height: calc(100vh - 247px); overflow-y: auto; overflow-x: hidden;">
                        </div>
                        <div style="width: 100%; background-color: rgb(255, 21, 21); position: absolute; bottom: 0; left: 0; border-left: 1px solid rgb(var(--right-side-bg-color));" class="cart-footer">
                            
                            <div style=" background-color: rgb(133,143, 14); display: flex;
                            align-items: center;
                            justify-content: center;
                          
                            padding: 15px 0;
                            color: white;
                            font-size: 1.3rem;" class="checkout">
                            <a href="check/checkout.php"> Proceed to checkout</a>
                            </div>
                            <div style="background-color: whitesmoke; display: flex;
                            align-items: center;
                            justify-content: center;
                          
                            padding: 0 15px;
                          
                            font-size: 1.3rem;" class="subtotal">
                            </div>
                        </div>
                    </div>
                        
                    </ul>
                </div>'?></li>
            <li><div style=" background:#6c757d; color: white;border: 2px solid #6c757d; border-radius: 5px;" class="total-items-in-cart"></div></li>
            <li><a></a></li>
            <li><?php echo $a; ?></li>
        </ul>
    </header>

        <div id="banner" class="banner">
            <h1 class="bg-text"><b> Eco</b><u>Shop</u></h1>
        </div>
        <div class="d-grid gap-2">
        <button style="background: rgb(133,143, 14)" class="btn btn-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDonate" aria-expanded="false" aria-controls="collapseDonate">
            Product List
        </button>
        
        </div>

        <div class="collapse" id="collapseDonate">
            <?php
                include 'connect.php';
                $table=mysqli_query($c,"SELECT * FROM EcoProducts ORDER BY Farm;");

                echo '<table class="table table-striped table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Price(&#x20BA;)</th>
                                <th scope="col">Farm</th>
                            </tr>
                        </thead>
                        <tbody>';
                    
                    while($array=mysqli_fetch_row($table))
                    {   
                        echo'<tr>';
                        foreach($array as $value)
                            echo '<td>'.$value.'</td>';
                        echo '</tr>';
                    };
                
                echo'</tbody></table>';
            ?>
        </div>
        <div class="shopping">
            
            <div class="container bcontent">
                
                <div id="aeg"><br><br><br><br><h1>Aegean Farm Products</h1><hr></div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card">
                            <img src="https://d2j6dbq0eux0bg.cloudfront.net/images/38233012/2194731070.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Black olives</h5>
                                <p class="card-text">55 &#x20BA;/Kg</p>
                                <a onclick="addToCart(000);" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <img src="https://www.farmersalmanac.com/wp-content/uploads/2020/12/chestnuts-canva.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Chesnuts</h5>
                                <p class="card-text">45 &#x20BA;/Kg</p>
                                <a onclick="addToCart(001)" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <img src="https://www.dogrusucarrefoursa.com/wp-content/uploads/2020/08/incir-min.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Figs</h5>
                                <p class="card-text">38 &#x20BA;/Kg</p>
                                <a onclick="addToCart(002)" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <img src="https://post.healthline.com/wp-content/uploads/2022/01/grapes-732x549-thumbnail.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Grapes</h5>
                                <p class="card-text">30 &#x20BA;/Kg</p>
                                <a onclick="addToCart(003)" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                <div><br></div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card">
                            <img src="https://img-s1.onedio.com/id-61f1e4aa6ada533c25247349/rev-0/w-620/f-jpg/s-96504ff7f4e71fec2607e79d0666e4950f5915d5.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Green olives</h5>
                                <p class="card-text">39 &#x20BA;/Kg</p>
                                <a onclick="addToCart(004)" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <img src="https://i4.hurimg.com/i/hurriyet/75/1200x675/5efd123845d2a04258b74019.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Pomegranate</h5>
                                <p class="card-text">23 &#x20BA;/Kg</p>
                                <a onclick="addToCart(005)" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="container bcontent">
                
                <div id="mar"><br><br><br><br><h1>Farm Marmara Products</h1><hr></div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card">
                            <img src="https://www.world-grain.com/ext/resources/2022/03/10/Wheat_photo-cred-Adobe-stock_E-2.jpg?height=635&t=1646921371&width=1200" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Wheat</h5>
                                <p class="card-text">10 &#x20BA;/Kg</p>
                                <a onclick="addToCart(201)" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSGR89hxXRGrMSdz11rz-YmgyJ7eLQxajXu-6OozH8ItbZFH3Ice1OQ-2I23vazT9VvAzg&usqp=CAU" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Barley</h5>
                                <p class="card-text">18 &#x20BA;/Kg</p>
                                <a onclick="addToCart(202)" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <img src="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcRWA50t31libEIPXouJzQtM7IdsY1r9WjPamTl6teL1smIDs_T8udEBqFJKTL0SQm9fLQhZN10PXhfoasxN_HsRidIEe5MumFpKunLZJOZH&usqp=CAE" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Roasted Sunflower Seeds</h5>
                                <p class="card-text">75 &#x20BA;/Kg</p>
                                <a onclick="addToCart(203)" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <img src="https://www.gidahatti.com/wp-content/uploads/2021/11/Misir.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Corn</h5>
                                <p class="card-text">40 &#x20BA;/Kg</p>
                                <a onclick="addToCart(204)" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                <div><br></div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card">
                            <img src="https://iasbh.tmgrup.com.tr/fbf036/650/344/0/38/1280/710?u=https://isbh.tmgrup.com.tr/sbh/2019/10/08/armutun-faydalari-nelerdir-armutun-insan-sagligina-yararlari-ve-kalorisi-1570541020942.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Pears</h5>
                                <p class="card-text">16 &#x20BA;/Kg</p>
                                <a onclick="addToCart(206)" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1pQNpPu8RMphS66Di9iJ_B8fqoOg1mLDaiaWY2qd7GpOjobx3p33h3ZWRQ357o9TeLH4&usqp=CAU" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Peaches</h5>
                                <p class="card-text">28 &#x20BA;/Kg</p>
                                <a onclick="addToCart(200)" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="card">
                            <img src="https://d2j6dbq0eux0bg.cloudfront.net/images/38233012/2194731070.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Black olives</h5>
                                <p class="card-text">50 &#x20BA;/Kg</p>
                                <a onclick="addToCart(205)" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container bcontent">
                
                <div id="mid"><br><br><br><br><h1>Mediterranean Farm Products</h1><hr></div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card">
                            <img src="https://arkeofili.com/wp-content/uploads/2018/09/muz1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Bananas</h5>
                                <p class="card-text">16 &#x20BA;/Kg</p>
                                <a onclick="addToCart(305)" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <img src="https://static01.nyt.com/images/2018/02/21/dining/00RICEGUIDE8/00RICEGUIDE8-articleLarge.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Rice</h5>
                                <p class="card-text">15 &#x20BA;/Kg</p>
                                <a onclick="addToCart(300)" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <img src="https://static.onecms.io/wp-content/uploads/sites/24/2019/07/GettyImages-152007076-2000.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Plums</h5>
                                <p class="card-text">38 &#x20BA;/Kg</p>
                                <a onclick="addToCart(304)" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <img src="https://alcevtarim.com/tema/genel/uploads/urunler/portakal.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Oranges</h5>
                                <p class="card-text">8 &#x20BA;/Kg</p>
                                <a onclick="addToCart(303)" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                <br></div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card">
                            <img src="https://im.haberturk.com/2022/05/16/ver1652708389/3440438_250975fb39b869eaf5a1a6798ff9af3f.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Grape Fruits</h5>
                                <p class="card-text">11 &#x20BA;/Kg</p>
                                <a onclick="addToCart(302)" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <img src="https://i.lezzet.com.tr/images-xxlarge-secondary/limon-hangi-mevsimde-yetisir-7547b8f3-fc72-494b-a591-45c202a919eb" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Lemons</h5>
                                <p class="card-text">10 &#x20BA;/Kg</p>
                                <a onclick="addToCart(301)" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="container bcontent">
                
                <div id="ana"><br><br><br><br><h1>Anatolian Farm Products</h1><hr></div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card">
                            <img src="https://www.gidahatti.com/wp-content/uploads/2021/10/Seker-pancari.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Sugar beets</h5>
                                <p class="card-text">16 &#x20BA;/Kg</p>
                                <a onclick="addToCart(106)" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2bDUshHkkRParfLEV3VU76Y5gEQwrDdCcvg&usqp=CAU" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Onions</h5>
                                <p class="card-text">7 &#x20BA;/Kg</p>
                                <a onclick="addToCart(100)" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <img src="https://i.lezzet.com.tr/images-xxlarge-secondary/patates-hangi-mevsimde-yetisir-ba979399-c219-48dd-8397-d6b05284ffc7.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Potatoes</h5>
                                <p class="card-text">8 &#x20BA;/Kg</p>
                                <a onclick="addToCart(101)" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTl6Cvj4A5jiuwBbpMUkpaGtszCFqnpc08wfRhkvErqynPy8yAFB0U73z110hF8U8mbfJQ&usqp=CAU" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Zucchinies</h5>
                                <p class="card-text">12 &#x20BA;/Kg</p>
                                <a onclick="addToCart(102)" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                <br></div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card">
                            <img src="https://i2.milimaj.com/i/milliyet/75/1200x675/5fd3367f5542820ff4176e47.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Beans</h5>
                                <p class="card-text">15 &#x20BA;/Kg</p>
                                <a onclick="addToCart(103)" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <img src="https://cdn.yemek.com/mnresize/940/940/uploads/2015/03/nohut.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Chickpeas</h5>
                                <p class="card-text">19 &#x20BA;/Kg</p>
                                <a onclick="addToCart(104)" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <img src="https://www.world-grain.com/ext/resources/2022/03/10/Wheat_photo-cred-Adobe-stock_E-2.jpg?height=635&t=1646921371&width=1200" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Wheat</h5>
                                <p class="card-text">11 &#x20BA;/Kg</p>
                                <a onclick="addToCart(105)" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSGR89hxXRGrMSdz11rz-YmgyJ7eLQxajXu-6OozH8ItbZFH3Ice1OQ-2I23vazT9VvAzg&usqp=CAU" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Barley</h5>
                                <p class="card-text">18 &#x20BA;/Kg</p>
                                <a onclick="addToCart(107)" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

            <br><hr><br><hr>
        </div>
        <div class="container">
                <h1 style="color: rgb(138,143, 14)">Contact us</h1><hr><br>

                <div class="row">
                    <div style="font-size: 25px;" class="col">
                        <h4><b>Addresses</b></h4><br>
                        <i class="fa fa-map-marker-alt" style="font-size:26px;color: rgb(133,143, 14);"></i> <a style="color: rgb(133,143, 14);" href="https://www.google.com/maps/dir//it%C3%BC+fen+edebiyat/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x14cab5e9e4da5f07:0x28d95a9e71bac4c3?sa=X&ved=2ahUKEwjN2-Ly-I74AhWiS_EDHWllA0gQ9Rd6BAhbEAU">Maslak, 34467 Sarıyer/Istanbul</a><br><br>
                        <i class="fa fa-envelope" style="font-size:26px;color: rgb(133,143, 14);"></i> <a style="color: rgb(133,143, 14);" href="https://mail.google.com/">E-Mail: ecologic@info.com</a><br><br>
                        <i class="fa fa-phone" style="font-size:26px; color: rgb(133,143, 14);"></i> <a style="color: rgb(133,143, 14);" href=#>Phone: +9005333333333</a><br><br>
                    </div>
                    <div class="col">
                        <h4><b>Follow us</b></h4><br>
                            
                            <a href="https://www.instagram.com"><i style="font-size:26px;color:rgb(133,143, 14);" class="fab fa-instagram"></i></a><br><br>
                            <a href="https://www.linkedin.com"><i style="font-size:26px;color:rgb(133,143, 14);" class="fab fa-linkedin-in"></i></a><br><br>
                            <a href="https://www.facebook.com/"><i style="font-size:26px;color:rgb(133,143, 14);" class="fab fa-facebook-f"></i></a><br><br>
                            <a href="https://twitter.com/"><i style="font-size:26px;color:rgb(133,143, 14);" class="fab fa-twitter"></i></a><br><br>   
                            </div>
                    </div>
                    <br><br><br><br><hr>
                </div>
        </div>

<script src="JS/products.js"></script>
<script src="JS/cart-app.js"></script>
<script src="JS/bootstrap.bundle.js"></script>
</div>
</div>
</body>
</html>


