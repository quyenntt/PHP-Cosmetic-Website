
  <?php include 'head.php' ?>

     <?php include 'menu_ngang.php' ?>
<body> 
    <div class="row">
    <div id="wrapper" class="active">
         <?php include 'menu_doc.php' ?>
      <!-- Sidebar -->
            <!-- Sidebar -->
    <div class="col-md-2"> </div>
     <div class="col-md-10">
		<div class="span7">   
				<div class="widget stacked widget-table action-table">
    				
				<div class="widget-header">
					<i class="icon-th-list"></i>
					<h3>Comment</h3>
				</div> <!-- /widget-header -->
				<form action="" method="POST" enctype="multipart/form-data">
					<div class="widget-content">
						
						<table class="table table-striped table-bordered">
							<thead>
								<tr> 
									<th>Stt</th>
									<th>Id_Comment</th>
									<th>Id_custommer</th>
									<th>Subjects</th>
									<th>Content</th>
									<th>Note</th>
								</tr>
									<?php
											require_once("test.php");
					                      	$sql1="SELECT * FROM comments";
					                      	$result = mysqli_query($conn,$sql1);
					                    	if($result==true){
					                      	$i=0;
					                      	while($kq=mysqli_fetch_assoc($result)){
					                      		$i++;
										 ?>
										<tr bgcolor="#AAFFFF">
					                        <td height="111" align="center" ><?php echo $i;?> </td>

					                        <td  ><?php echo $kq["id"];?> </td>
					                        <td  ><?php echo $kq["id_custommer"];?> </td>
					                        <td  ><?php echo $kq["subjects"];?> </td>
					                        <td  ><?php echo $kq["content"];?> </td>
					                        <td>
				                      			<a onclick="return confirm('Ban chac chan khong')" 
				                      		href="comment_xoa.php?page=dell&id=<?php echo $kq['id'];?>">Xóa</a>
				                      		</td>
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
	</div>
</body>
<?php include 'foot.php';?>
	
