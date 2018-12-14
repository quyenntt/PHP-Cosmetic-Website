  <?php include 'head.php' ?>
  <?php include 'menu_ngang.php' ?>

   <div class="row">
    <div id="wrapper" class="active">
      
      <!-- Sidebar -->
            <!-- Sidebar -->
      <?php include'menu_doc.php';?>
          <div > <a class="btn btn-primary" href="./product_them.php">Add</a> </div>
        <div class="col-md-10">
		<div class="span7">   
				<div class="widget stacked widget-table action-table">
    				
				<div class="widget-header">
					<i class="icon-th-list"></i>
					<h3>Product</h3>
				</div> <!-- /widget-header -->
				
				<div class="widget-content">
					<?php require_once("test.php");
					 error_reporting(2);
					 $sql ="SELECT id,id_categories,name_product,imaage,description,dates,price,quantity from product where id ='$_GET[id]'";
					 ?>
					<form action="" method="POST">
					<table class="table table-bordered">
						<thead>
							<tr > <th>Stt</th>
								<th>ID </th>
								<th>ID Categories</th>
								<th>Name</th>
								<th>Image</th>
								<th>Detail</th>
								<th>Day of Product</th>
								<th>Price</th>
	         					<th>Quantity</th>
								<th>Funtion</th>
							
							</tr>
							<?php 
							require_once ("test.php");
							$sql= "SELECT * from product " ;

							 $result = mysqli_query($conn,$sql);
		                    if($result==true){
		                      $i=0;
		                      while($kq=mysqli_fetch_assoc($result))
		                      {
		                      $i++;

							?>
							<tr>
								<td><?php echo "$i"; ?></td>
							    <td><?php echo $kq["id"]; ?></td>
								<td><?php echo $kq["id_categories"];?></td>
								<td><?php echo $kq["name_product"];?></td>
								<td><img src="<?php echo $kq['imaage'];?>" width="118" height="107" /></td>
								<td><?php echo $kq["description"];?></td>
								<td><?php echo $kq["dates"];?></td>
								<td><?php echo $kq["price"];?></td>
								<td><?php echo $kq["quantity"];?></td>
								

									<td >
									<a href="product_sua.php?page=edit&id=<?php echo $kq["id"];?>">Sửa</a>
									  <a onclick="return confirm('Ban co chac khong')" href="product_xoa.php?page=dell&id=<?php echo $kq['id']; ?>">Xóa</a>
									 
									 
								</td>
							</tr>
					     	 <?php } }?>
					
						</table>
						</form>
					
				</div> <!-- /widget-content -->
			
			</div> <!-- /widget -->
            </div>
      
    </div>
      
    </div>
    </div>

<?php include 'foot.php';?>