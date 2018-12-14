 <?php include 'head.php' ?>
  <?php include 'menu_ngang.php' ?>
   
    
    <div class="row">
    <div id="wrapper" class="active">
      
      <!-- Sidebar -->
            <!-- Sidebar -->
      <?php include'menu_doc.php';?>
          
     <div class="col-md-10">
        <div class="col-md-4">
<div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Add Catelogy</h3>
                    </div>
                    <div class="panel-body">
                        <?php 
                            require_once("test.php");
                             $sql ="SELECT * FROM categories WHERE id = $_GET[id]";
                             $result = mysqli_query($conn,$sql);
                             $kq= mysqli_fetch_array($result);
                         ?>
                        <form method="POST" action="" >
                         
                                <div class="form-group">
                                    <input class="form-control" placeholder="ID" name="id" value="<?php echo $kq['id'] ?>"  type="text" >
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Name" name="name" value="<?php echo 
                                    $kq['name_categories'] ;?>" type="text" >
                                </div>
                                <button type="submit" name="submit" value="Update" class="btn btn-success"> update</button>
                                   <a href="catelogy_table.php" class="btn btn-sm btn-success">Continue</a>

                        </form>

                                <?php if (isset($_POST['submit'])) {
                                    
                                        $manv= $_POST['id'];
                                        $Name1 =$_POST['name'];
                                        $update="UPDATE categories SET id ='$manv',name_categories='$Name1'
                                           WHERE id ='$_GET[id]'";
                                        $results = mysqli_query($conn,$update);

                                       // header("Location:index_ad.php");

                                      if ($results) {
                                        echo "<script>alert('Data Update successfuly!')</script>";
                                      }else{
                                        echo "<script>alert('Data Update failed')</script>";
                                      }
                                } ?>
                    
                    </div>
                </div>
</div>
     </div>
      
    </div>
    </div>

<?php include 'foot.php';?>
    