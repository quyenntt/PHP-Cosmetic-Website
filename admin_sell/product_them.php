<?php include 'head.php' ?>
  <?php include 'menu_ngang.php' ?>
   
<body>
    <?php
      error_reporting(2);
      if(count($_POST)>0){
      require_once("test.php");
  }

    ?>

    <div class="row">
    <div id="wrapper" class="active">
      
          <!-- Sidebar -->
                <!-- Sidebar -->
          <?php include'menu_doc.php';?>
              
         <div class="col-md-10">
            <div class="col-md-4">
                <div class="login-panel panel panel-default">
                     
                        <div class="panel-body">
                            <form method="POST" action="" enctype="multipart/form-data">
                                <fieldset>
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Image</label>
                                        <input type="file" name="hinh_anh" class="form-control-file" id="exampleFormControlFile1">
                                    </div>
                                    <div class="form-group">
                                        <p>Name</p>
                                        <input class="form-control"  name="name_product" type="text">
                                    </div>
                                    <div class="form-group">
                                        <p>Category</p>

                                            <select name="id_category" id="cusSelectbox">
                                           <?php 
                                            require_once ("test.php");
                                            $sql= "SELECT * from categories" ;

                                             $result = mysqli_query($conn,$sql);
                                            if($result==true){
                                              $i=0;
                                              while($kq=mysqli_fetch_assoc($result))
                                              {
                                              $i++;
                                                 ?>
                                                <option value="<?php echo $kq["id"];?>"><?php echo $kq["name_categories"];?></option>
                                              <?php } }?>
                                            </select>
                                        

                                    </div>
                                     <div class="form-group">
                                        <p>Description</p>
                                        <input class="form-control"  name="descript" type="text" >
                                    </div>
                                     <div class="form-group">
                                         <p>Price</p>
                                        <input class="form-control" name="price" type="text">
                                    </div>
                                     <div class="form-group">
                                         <p>Date</p>
                                        <input class="form-control" name="date" type="Date">
                                    </div>
                                     <div class="form-group">
                                         <p>Quantity</p>
                                        <input class="form-control" name="qtt" type="text">
                                    </div>

                                    <!-- Change this to a button or input when using this as a form -->
                                    <input type="submit" name="submit" value="Add" class="btn btn-success">

                                    <a href="product_table.php" class="btn btn-sm btn-success">Continue</a>
                                </fieldset>
                            </form>
                                <?php
                                    error_reporting(2);
                                    if(count($_POST)>0) {
                                      
                                      require_once("test.php");
                                      $ten_hinh=$_FILES['hinh_anh']['name'];
                                      $duong_dan_upload="../image/".$ten_hinh;
                                      move_uploaded_file($_FILES['hinh_anh']['tmp_name'],$duong_dan_upload);
                                      $ten_hinh =$_FILES['hinh_anh']['name'];
                                      $ten_product = $_POST['name_product'];
                                      $categorry = $_POST['id_category'];
                                      $mo_ta =$_POST["descript"];
                                      $gia =$_POST["price"];
                                      $ngay =$_POST["date"];
                                      $soluong =$_POST["qtt"];

                                      $sql = "INSERT INTO product (id_categories,name_product,imaage,description,dates,price,quantity)
                                       VALUES ('$categorry','$ten_product','../image/$ten_hinh', '$mo_ta','$ngay', '$gia', '$soluong')";
                                      mysqli_query($conn,$sql);
                                      // $current_id = mysqli_insert_id($conn);
                                      if(!empty($current_id)) {
                                      $message = "New User Added Successfully";
                                      }
                                    }

                                ?>
                            
                        </div>
                    </div>
            </div>
        </div>
      
    </div>
    </div>
</body>
<?php include 'foot.php';?>