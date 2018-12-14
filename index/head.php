<?php
include('config.php');  // Đây là phần header, để tăng số lượng mặt hàng đã mua thì nên sử dụng SESSION để lưu 
session_start(); //       (Vẫm tốt trong trường hợp nếu người dùng thoát trình duyệt thì vẫn lưu)
?> 
<div id="headdown">
	<div class="row">
		<div class="logo col-md-3"><a href="index.php">Home</a>
		</div>
			<div class="srbox">
				    <div class="input-group col-md-7 " style="margin-top: 2%">
	                    <input type="text" class="form-control input-lg" placeholder="Search..." />
	                    <span class="input-group-btn">
	                        <button class="btn btn-info btn-lg" type="button">
	                            <i class="glyphicon glyphicon-search"></i>
	                        </button>
	                    </span>
	                </div>
			</div>
	    	<div class="col-md-2">
	    	<a href="cart.php">
	    		<div class="cart">
					<i class="fa fa-shopping-cart"></i>
				    <p class="cart-e">Cart</p>
		    		<p class="cart-f">
			            <?php    
							if(isset($_SESSION["cartshop"])){   //Giỏ hàng tự động tăng số lượng sản phẩm sau mỗi lần mua
								$s=count($_SESSION["cartshop"]);
							}
							else{
								$s=0;
								}
							echo $s;
						?>
		            </p>
				</div>
			</a>
			</div>
		</div>
</div>