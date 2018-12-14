<?php
	include_once('config.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Search results</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="style.css"/>
	 <?php include'head_link.php';?> 
</head>
<body>
<header>
       <?php include'header_menu.php';?> 
    </header>

			<div class="col-sm-12 col-md-12" style="margin-top: 6%; ">
				
				<nav class="navbar navbar-inverse">
				  <div class="container-fluid">
				  	<a class="navbar-brand" >Sort: </a>
				    <ul class="nav navbar-nav">
				      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" >Default <span class="caret"></span></a>
				        <ul class="dropdown-menu">



				          <li><a href="search12.php">Default</a></li>
				          <li><a href="giam.php">Increase</a></li>
				          <li><a href="tang.php">Reduction</a></li>
				        </ul>
				      </li>
				    </ul>
				  </div>
				</nav>
			<div class="row text-center pro">	

			<?php
					include_once('config.php');
					$namect = "";
					$i =1;
					
					if (isset($_POST['query'])) 
              		{
	                $namect = $_POST['query']; 
	            	}
					if (!$conn) {
					   	die("Connection failed: " .mysqli_connect_error());
					}
							$sql ="SELECT * FROM product WHERE (`name_product` LIKE '%$namect%') OR (`description` LIKE '%$namect')ORDER BY price DESC  ";
					$result = mysqli_query($conn,$sql);
					
					while ($kq = mysqli_fetch_assoc($result)) {
						$i++;
			?> 
			
				<form  id="form1" name="form1" method="POST" action="cart.php" enctype="multipart/form-data">
                <div class="col-md-3 col-sm-6" >
                    <div class="circle-border zoom-in">
                      <input type="hidden" name="pid" id="pid" value="<?php echo $kq['id'];?>" />
                      <img class="img" src="<?php echo $kq['imaage'];?>" alt=" my pham" width="200" height="200">
                    </div>
                    <h2 style="color: #c31cb5; font-family: Lucida Calligraphy;"> <?php echo $kq["name_product"];?> </h2>
                    <p style="color: black"> Giá: <?php echo  $kq["price"];?>VND</p>
                    <a class="buy"><input type="submit" id="subaz" class="btn btn-success" value="Buy Now"/></a>
                </div>
              </form>

		<?php } 
		if($i <= 1){
			echo('Sản Phẩm Không Tôn Tại');
		}
		?>
		</div>
		<?php include'footer.php' ?>
	</div>
    
</body>
</html>