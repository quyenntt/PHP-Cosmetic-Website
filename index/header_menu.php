<div style="width: 100%" class="container">
            <div class="row">
                <div class=" col-md-2">
                    <img src="./image/ool.png">
                    
                </div>
                <div class="topnav col-md-10" id="myTopnav">
                    <ul class="main-navigation">
                        <li><a href="index.php" class="active">Home</a></li>
                         <li><a href="#Newproduct">New product</a></li>
                        <li><a href="#Categoryproduct">Category product</a></li>
                        <li><a href="#Featuredproducts">Featured products</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li>
                           
                            <a href="cart.php">
                                <i class="fa fa-cart-plus" aria-hidden="true">Cart</i>
                                <!-- <p class="cart-f"> -->
                                 <?php    
                                    if(isset($_SESSION["cartshop"])){   //Giỏ hàng tự động tăng số lượng sản phẩm sau mỗi lần mua
                                        $s=count($_SESSION["cartshop"]);
                                    }
                                    else{
                                        $s=0;
                                        }
                                    echo $s;
                                ?>
                               <!--  </p> -->
                            </a>
    
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-users" aria-hidden="true"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="clear_session.php" class="btn btn-link"><span class="glyphicon glyphicon-ok"></span> LogOut</a>
                                </li>
                           
                            </ul>
                        </li>

                        <li>
                            <div class="span12">
                                <form id="custom-search-form" action="search12.php" method="post" class="form-search form-horizontal pull-right">
                                    <div class="input-append span12">
                                        <input type="text" class="search-query"  name="query" placeholder="Search">
                                        <button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                                    </div>
                           
                            </div>
                        </li>
                        <a href="javascript:void(0);" style="font-size:15px; text-decoration: none; background-color: yellow; border: 1px solid black;" class="icon" onclick="myFunction()">&#9776;</a>
                    </ul>

                </div>
            </div>
        </div>