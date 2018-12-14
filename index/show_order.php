<div>
	<?php
		
		include('config.php');  // Đây là phần header, để tăng số lượng mặt hàng đã mua thì nên sử dụng SESSION để lưu 
		session_start(); //       (Vẫm tốt trong trường hợp nếu người dùng thoát trình duyệt thì vẫn lưu)
	?>
	<a href="cart.php">
		<div class="cart">
    		<h2 class="cart-f">
    			Total Product:
	            <?php    
					if(isset($_SESSION["cartshop"])){   //Giỏ hàng tự động tăng số lượng sản phẩm sau mỗi lần mua
						$s=count($_SESSION["cartshop"]);
					}
					else{
						$s=0;
						}
					echo $s;
				?>
            </h2>
		</div>
	</a>
</div>

<?php

if (isset($_POST['pid'])) {
    $pid = $_POST['pid'];
	$wasFound = false;
	$i = 0;
	if (!isset($_SESSION["cartshop"]) || count($_SESSION["cartshop"]) < 1) { 
		$_SESSION["cartshop"] = array(0 => array("item_id" => $pid, "quantity" => 1));

	} else {
		foreach ($_SESSION["cartshop"] as $each_item) { 
		      $i++;
		      while (list($key, $value) = each($each_item)) {
				  if ($key == "item_id" && $value == $pid) {
					  array_splice($_SESSION["cartshop"], $i-1, 1, array(array("item_id" => $pid, "quantity" => $each_item['quantity'] + 1)));
					  $wasFound = true;
				  }
		      }
	       }
		   if ($wasFound == false) {
			   array_push($_SESSION["cartshop"], array("item_id" => $pid, "quantity" => 1));
		   }
	}
	header("location: cart.php"); 
    exit();
}
?>
<?php
if (isset($_GET['cmd']) && $_GET['cmd'] == "emptycart") {
    unset($_SESSION["cartshop"]);
}
?>
<?php
if (isset($_POST['item_to_adjust']) && $_POST['item_to_adjust'] != "") {
	$item_to_adjust = $_POST['item_to_adjust'];
	$quantity = $_POST['quantity'];
		if ($quantity >= $_SESSION['ql'])
	 { 
	 	$quantity = $_SESSION['ql'];
	 	echo "<script>alert('chúng tôi chỉ còn lai!')</script>";
	 }
	if ($quantity < 1) { $quantity = 1; }
	if ($quantity == "") { $quantity = 1; }
	$i = 0;
	foreach ($_SESSION["cartshop"] as $each_item) { 
		      $i++;
		      while (list($key, $value) = each($each_item)) {
				  if ($key == 'item_id' && $value == $item_to_adjust) {
					  array_splice($_SESSION["cartshop"], $i-1, 1, array(array('item_id' => $item_to_adjust, 'quantity' => $quantity)));
				  }
		      }
			}
}
?>
<?php
if (isset($_POST['index_to_remove']) && $_POST['index_to_remove'] != "") {
 	$key_to_remove = $_POST['index_to_remove'];
	if (count($_SESSION["cartshop"]) <= 1) {
		unset($_SESSION["cartshop"]);
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	} else {
		unset($_SESSION["cartshop"]["$key_to_remove"]);
		sort($_SESSION["cartshop"]);
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}
}
?>
    <div id="lowrbdy">
	  <div class="big-outer">
<table width="100%" border="0" class="table table-striped" style="border-collapse:collapse">
<?php
if(isset($_SESSION['cartshop'])==!NULL){
?>
  <tbody>
   <tr class="upper-details">
		<td width="21%" height="36" style="border-right: 1px solid #000;">Image</td>
		<td width="20%" style="border-right: 1px solid #000;">Name</td>
		<td width="20%" style="border-right: 1px solid #000;">Price</td>
		<td width="20%" style="border-right: 1px solid #000;">Quantity</td>
		<td width="20%">Sub Total</td>
	</tr>
<?php
}
?>
<?php 
$cartTotal = "";
if (!isset($_SESSION["cartshop"]) || count($_SESSION["cartshop"]) < 1) {
    echo '<div class="empty-cart"><h2 class="crta">Your Shopping Cart Is Empty</h2>';
	echo '<br><a href="index.php"><h2 class="alink">Continue Shopping</h2></a></div>';
} else {
$i = 0; 

    foreach ($_SESSION["cartshop"] as $each_item) { 
		$item_id = $each_item['item_id'];
		$sql1= "SELECT * FROM product WHERE id = $item_id LIMIT 1";

		$sql = mysqli_query($conn,$sql1);

		while ($kq=mysqli_fetch_assoc($sql)) {

			$productname = $kq['name_product'];
			$producttotalprice = $kq["price"];
			$productcode = $kq+["id"];
		
			$pic=$kq['imaage'];
			$pr=$kq['price'];
			$_SESSION['ql']=$kq['quantity'];
			echo $_SESSION['ql'];
		}
		
		$producttotalpricetotal = $producttotalprice * $each_item['quantity'];
		$cartTotal = $producttotalpricetotal + $cartTotal;
?>
	<tr>
        <td><img src="../image/<?php echo $pic; ?>" style="width: 100%; height: 60%;"/></td>
        <td><?= $productname ?></td>
        <td><?= number_format($producttotalprice) ?> VND</td>
      
        <td>
		  <form action="cart.php" method="post">
		  	<input name="quantity" id="quantity" type="text" value="<?= $each_item['quantity']  ?>" size="1" maxlength="2" class="qnttxt"/></br>
	
			<input name="item_to_adjust" type="hidden" value="<?= $item_id;?>" />
		  </form>
		</td>
	    <td><?= number_format($producttotalprice*$each_item['quantity']) ?> VND 
	    </td>

	</tr>
<tr>

<?php
	$i++;
}
?>

	<td></td>
	<td></td>
	<td></td>
	<td></td>

	<td align="right">
		<div style="width:400px; height:40px; background:#f78f1e; margin:auto; margin-bottom:6px;margin-top:10px">
		<p style="font-size:20px;text-align:center; color:#fff; line-height:2em">Total: <strong><?= number_format($cartTotal) ?> VND</strong></p></div>
	</td>
<!-- 	<td align="right"><div  style=" background:#f78f1e; margin:auto; margin-bottom:6px;margin-top:10px" name="gg" style="margin-top:7px;margin-right:7px;">
		<a href="payofcustommer.php" style="font-size:20px;text-align:center; color:#fff; line-height:2em" >Continue</a>
	</td> -->


<?php
}
?>

</tr>



  </tbody>
  
</table>
        </div>
    </div>
</div>