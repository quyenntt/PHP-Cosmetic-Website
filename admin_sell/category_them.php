
  <?php include 'head.php' ?>
  <?php include 'menu_ngang.php' ?>
   
   <?php
        error_reporting(2);
        if (count($_POST)>0) {
        require_once('test.php');}
    ?>
    
    <div class="row">
    <div id="wrapper" class="active">
     
      <?php include'menu_doc.php';?>
          
     <div class="col-md-10">
        <div class="col-md-4">
<div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <p>Add Catelogy</p>
                    </div>
                    <div class="panel-body">
                        <form action="" method="POST">
                       
                                
                             <div class="form-group">
                                  <input class="form-control" placeholder="Name" name="name" type="text" >
                            </div>
                         
                            <button class="btn btn-sm btn-success">
                               Save
                            </button> 

                            <button class="btn btn-sm btn-success">
                                  <a href="catelogy_table.php" > Back</a>
                            </button> 

                         
                        </form>
                        <?php
                        error_reporting(2);
                        if (count($_POST)>0) {
                            require_once("test.php");
                            $name_cate =$_POST['name'];

                            $sql ="INSERT INTO categories
                                   VALUES ('','$name_cate')";
                            mysqli_query($conn,$sql);
                            $current_id = mysqli_insert_id($conn);
                             if(!empty($current_id)) {
                               $message = "New User Added Successfully";      }
                                             }
                         ?>
                    </div>
                </div>
</div>
     </div>
      
    </div>
    </div>

<?php include 'foot.php';?>
    
