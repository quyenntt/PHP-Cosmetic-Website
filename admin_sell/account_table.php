
  <?php include 'head.php' ?>

     <?php include 'menu_ngang.php' ?>
<body> 
    <div class="row">
    <div id="wrapper" class="active">
         <?php include 'menu_doc.php' ?>
      <!-- Sidebar -->
            <!-- Sidebar -->
   
          <div > 
          	<a class="btn btn-primary" href="./account_them.php">Add</a> 
          </div>
     	<div class="col-md-10">
		<div class="span7">   
				<div class="widget stacked widget-table action-table">
    				
				<div class="widget-header">
					<i class="icon-th-list"></i>
					<h3>User</h3>
				</div> <!-- /widget-header -->

		        <form method="POST" action="" enctype="multipart/form-data">
					<div class="widget-content">
						
						<table class="table table-striped table-bordered">
							<thead>
								<tr> 
									<th>Stt</th>
									<th>Id</th>
									<th>User Name</th>
									<th>PassWord</th>
									<th>Note</th>
								</tr>
								<?php 
				                    require_once("test.php");
				                    $sql1="SELECT * FROM users";

				                      $result = mysqli_query($conn,$sql1);

				                    if($result==true){
				                    	 $i=0;
			                      	while($kq=mysqli_fetch_assoc($result))
			                      {
			                      	$i++;
				                    ?>
				                      <tr>
				                 
				                        <td  ><?php echo "$i";?> </td>
				                        <td  ><?php echo $kq["id"];?> </td>
										<td  ><?php echo $kq["user_name"];?> </td>
				                        <td  ><?php echo $kq["password_user"];?> </td>
				                        <td><a href="./account_sua.php?page=edit&id=<?php echo $kq['id'];?>">Sửa</a> ||
				                      <a onclick="return confirm('Ban chac chan khong')" 
				                      href="./account_xoa.php?page=dell&id=<?php echo $kq['id'];?>">Xóa</a></td>
				                    </tr>

				                    <?php } }?>

							</thead>

							</table>
						
					</div> <!-- /widget-content -->
				</form>
			
			</div> <!-- /widget -->
            </div>
      
    </div>
    </div>
</body>
<?php include 'foot.php';?>
	