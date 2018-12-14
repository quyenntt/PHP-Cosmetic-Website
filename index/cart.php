<!doctype html>
<html>
<head>
<?php
include('config.php');   // Gọi file kiểm tra kết nối với Database
?>
<meta charset="utf-8">
<title>Sucssecfull</title>
<link rel="stylesheet" href=".\css\carr.css" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed|Rubik" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
#undr{width:100%; height:580px; position:absolute; top:75px; left:0px;}
.bdimg{width:100%; height:100%}
.big-outer{ width:80%; height:100%; background:rgba(255,255,255,0.7); margin:auto}
.big-outer p{ font-size:60px; text-align:center; margin:0px;}
.upper-details{background:#EFEFEF;}
.upper-details td{text-align:center;}
td{text-align: center;}
#emptycart{font-size:20px;margin-bottom:15px;color:#111; float:right}
#emptycart:hover{ color:#fff}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>

<body>
	<header>
		<?php
			include('head.php');
		?>
	</header>
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
	echo $quantity;
	// $quantity = preg_replace('#[^0-9]#i', '', $quantity);
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
   		<nav class="navbar" style="background:#33a7d8; margin-top: 5%;">
			<div class="container-fluid pull-left" style="width:300px;">
				<div class="navbar-header"> <a class="navbar-brand" href="#" style="color:#FFFFFF; font-size: 34px;">Shopping Cart</a> </div>
			</div>
			<div class="pull-right" style="margin-top:7px;margin-right:7px; color: #FFFFFF"><a href="clear_session.php" class="btn btn-warning" id="emptycart" style="color: #FFFFFF">Empty cart</a></div>

		</nav>
<table width="100%" border="0" class="table table-striped" style="border-collapse:collapse">
<?php
if(isset($_SESSION['cartshop'])==!NULL){
?>
  <tbody>
   <tr class="upper-details">
		<td width="21%" height="36" style="border-right: 1px solid #000;">Image</td>
		<td width="16%"  style="border-right: 1px solid #000;">Name</td>
		<td width="16%" style="border-right: 1px solid #000;">Price</td>
		<td width="16%" style="border-right: 1px solid #000;">Quantity</td>
		
		<td width="16%" style="border-right: 1px solid #000;">Sub Total</td>
		<td width="16%">Delete</td>
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
        <td><img src="../image/<?php echo $pic; ?>"/></td>
        <td><?= $productname ?></td>
        <td><?= number_format($producttotalprice) ?> VND</td>
      
        <td>
		  <form action="cart.php" method="post">
		  	<input name="quantity" id="quantity" type="text" value="<?= $each_item['quantity']  ?>" size="1" maxlength="2" class="qnttxt"/></br>
			<input id="adjustBtn" name="adjustBtn<?= $item_id ?>" type="submit" value="Update" class="qntbtn"/>
			<input name="item_to_adjust" type="hidden" value="<?= $item_id;?>" />
		  </form>
		</td>
	    <td><?= number_format($producttotalprice*$each_item['quantity']) ?> VND 
	    </td>
	    <td>
			<form action="cart.php" method="post">
				<input name="deleteBtn' <?= $item_id ?>" type="submit" value="X" class="removebtn"/>
				<input name="index_to_remove" type="hidden" value="<?= $i ?>" />
			</form>
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
	<td align="right"><div  style=" background:#f78f1e; margin:auto; margin-bottom:6px;margin-top:10px" name="gg" style="margin-top:7px;margin-right:7px;">
		<a href="payofcustommer.php" style="font-size:20px;text-align:center; color:#fff; line-height:2em" >Continue</a>
	</td>


<?php
}
?>

</tr>



  </tbody>
  
</table>
        </div>
    </div>
</body>
</html>
