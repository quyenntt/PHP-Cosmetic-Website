<?php include 'head.php' ?>
  <?php include 'menu_ngang.php' ?>
   
<body>
    <?php
        require_once("test.php");
        $sql = "SELECT id, name_product, id_categories, imaage,description,dates,price,quantity FROM product
        WHERE id = '$_GET[id]'";
        $result = mysqli_query($conn,$sql);
        $kq = mysqli_fetch_array($result);
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
                                        <p>Id</p>
                                        <input class="form-control"  name="id" type="text" value="<?php echo $kq['id']; ?>" >
                                    </div>

                                    <div class="form-group">
                                      <label for="exampleFormControlFile1">Hinh Anh</label>
                                      <img src="<?php echo $kq['imaage']; ?>" width="118" height="107"/>
                                      <input type="file" name="hinh_anh" class="form-control-file" id="exampleFormControlFile1">
                                      </div>
                                    <div class="form-group">
                                        <p>Name</p>
                                        <input class="form-control"  name="name" type="text" value="<?php echo $kq['name_product']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <p>Id_category</p>
                                        <input class="form-control"  name="id_category" type="text" value="<?php echo $kq['id_categories'];?>">
                                    </div>
                                     <div class="form-group">
                                        <p>Description</p>
                                        <input class="form-control"  name="descript" type="text" value="<?php echo $kq['description']; ?>" >
                                    </div>
                                     <div class="form-group">
                                         <p>Price</p>
                                        <input class="form-control" name="price" type="text" value="<?php echo $kq['price']; ?>">
                                    </div>
                                     <div class="form-group">
                                         <p>Date</p>
                                        <input class="form-control" name="date" type="Date" value="<?php echo $kq['dates']; ?>">
                                    </div>
                                     <div class="form-group">
                                         <p>Quantity</p>
                                        <input class="form-control" name="qtt" type="text" value="<?php echo $kq['quantity']; ?>">
                                    </div>

                                    <!-- Change this to a button or input when using this as a form -->
                                    <input type="submit" name="submit" value="update" class="btn btn-success">
                                    <a href="product_table.php" class="btn btn-sm btn-success">Continue</a>
                                </fieldset>
                            </form>
                                <?php
                                    if (isset($_POST['submit']))
                                    {
                                      $id = $_POST['id'];
                                      
                                      if (!$_FILES['hinh_anh']['name']){

                                          $tenhinh = $kq['imaage'];
                                        }else{

                                          $tenhinh = $_FILES['hinh_anh']['name'];
                                          $duong_dan_upload = "../image/".$tenhinh;
                                          move_uploaded_file($_FILES['hinh_anh']['tmp_name'],$duong_dan_upload);
                                          $tenhinh = "../image/".$tenhinh;
                                        }
                                          $name_productt = $_POST["name"];
                                          $id_categoory = $_POST["id_category"];
                                          $descrip = $_POST["descript"];
                                          $pricce = $_POST["price"];
                                          $datee = $_POST["date"];
                                          $quanttity = $_POST["qtt"];

                                          $update = "UPDATE product SET id = '$id',imaage = '$tenhinh',id_categories = '$id_categoory', name_product = '$name_productt', description = '$descrip', price = '$pricce', dates = '$datee', quantity = '$quanttity'
                                            WHERE product.id ='$_GET[id]'";
                                            $results = mysqli_query($conn,$update);
                                           

                                      if ($results) {
                                        echo "<script>alert('Data Update successfuly!')</script>";
                                      }else{
                                        echo "<script>alert('Data Update failed')</script>";
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