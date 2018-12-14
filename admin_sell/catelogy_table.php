
  <?php include ('head.php');?>
  <?php include 'menu_ngang.php' ?>
    
 <div class="row">
    <div id="wrapper" class="active">
         <?php include 'menu_doc.php' ?>
          <div > <a class="btn btn-primary" href="./category_them.php">Add</a> </div>
             <div class="col-md-10">
             	<?php 
             	require_once("test.php");
             	error_reporting(2);
             	$sql="SELECT * FROM categories WHERE ID = '$_GET[id]'";
             	 ?>
				<div class="span7">   
					<div class="widget stacked widget-table action-table">
    					<div class="widget-header">
							<i class="icon-th-list"></i>
							<h3>Catelogy</h3>
				        </div> 
				           <div class="widget-content">
					
							     <table class="table table-striped table-bordered" id="table">
										<tr> <th>Stt</th>
											<th>ID</th>
											<th>Name</th>
											<th>Funtion</th>
									   </tr>
									   <?php require_once("test.php");
									      $sql ="SELECT * FROM categories";
									      $result= mysqli_query($conn,$sql);
									      if ($result==true) {
									      	$i=0;
									      	while ($kq=mysqli_fetch_assoc($result) )
									      	{
									      	  $i++;
									      

									    ?>
									   <tr>
											<td><?php echo "$i"; ?></td>
											<td> <?php echo $kq["id"]; ?></td>
											<td> <?php echo $kq["name_categories"]; ?></td>
											<td >
											 <a href="./catelogy_sua.php?page=edit&id=<?php echo $kq["id"] ;?>">Sửa</a> <a onclick="return confirm('Ban co chac khong')" href="catelogy_xoa.php?page=dell&id=<?php echo $kq['id']; ?>">Xóa</a>
										   </td>
									   </tr>
							    <?php	}
									      } ?>
								</table>
					     </div>
			       </div> 
              </div>
           </div>

      </div>

<?php include ('foot.php');?>
	
