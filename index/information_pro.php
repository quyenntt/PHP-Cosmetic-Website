  <div class="row" style="margin-top: 20px;">
      <div class="col-md-4" style="border-bottom: 2px solid #9fbb4a; text-align: center; margin-top: 65px;">
                
              </div>
              <div class="col-md-4">
                 <img src="../image/title-1.png">
              </div>
              <div class="col-md-4" style="border-bottom: 2px solid #9fbb4a; text-align: center; color: #a32e58;">
                <h1 style="font-family: Lucida Calligraphy">Promote Product</h1>
              </div>
        
      </div>
<div class="row">
   

     <?php 
    require_once("server.php");
    error_reporting(2);
    $productid=$_GET['product'];

    ?>
    <?php 
        require_once("server.php");
        $sql1=" SELECT * FROM  product ORDER BY dates DESC LIMIT 8";
        $result = mysqli_query($db,$sql1);
        if($result==true){
            $i=0;
            while($kq=mysqli_fetch_assoc($result))
            {
            $i++;
    ?>

    <form  id="form1" name="form1" method="POST" action="cart.php" enctype="multipart/form-data">
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="hoverefffect">
                <input type="hidden" name="pid" id="pid" value="<?php echo $kq['id'];?>" /> 
                <img class="img-responsive" src="<?php echo $kq['imaage'];?>" alt="">
                <div class="overllay">
                   <h2 style="font-family: Lucida Calligraphy;"><?php echo $kq["name_product"]; ?></h2>
                     <p style="color: white"> Giá: <?php echo  $kq["price"];?>VND</p>
                <a class="buy inffo"><input type="submit" id="subaz" class="btn btn-success" value="Buy Now"/></a>

                </div>
            </div>
        </div>
    </form>
    <?php } } ?>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="infor-product">
            <h1>Week</h1>
            <?php 
                $file=@fopen('../information_product/month.txt', 'r');
                if(!$file)
                echo "Mở file không thành công";
                else{
                while (!feof($file)) { // hàm feof sẽ trả về true nếu ở vị trí cuối cùng của file
                echo fgetc($file);  // đọc ra từng ký tự trong file
                }
                }
            ?>
            
        </div>
    </div>
    <div class="col-md-6">
         <div class="infor-product">
            <h1>Month</h1>
            <?php 
                $file=@fopen('../information_product/year.txt', 'r');
                if(!$file)
                echo "Mở file không thành công";
                else{
                while (!feof($file)) { // hàm feof sẽ trả về true nếu ở vị trí cuối cùng của file
                echo fgetc($file);  // đọc ra từng ký tự trong file
                }
                }
            ?>
            
        </div>
    </div>
<!--     <div class="col-md-4">
         <div class="infor-product">
            <h1>Year</h1>
            <?php 
                $file=@fopen('../information_product/week.txt', 'r');
                if(!$file)
                echo "Mở file không thành công";
                else{
                while (!feof($file)) { // hàm feof sẽ trả về true nếu ở vị trí cuối cùng của file
                echo fgetc($file);  // đọc ra từng ký tự trong file
                }
                }
            ?>
             
            
        </div>
       
    </div> -->
    
</div>
