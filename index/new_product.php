<div class="container">
    <div class="conten_sp_moi">
      <div class="row" style="margin-top: 20px;">
         <div class="col-md-4" style="border-bottom: 2px solid #9fbb4a; text-align: center; color: #a32e58;">
                 <h1 style="font-family: Lucida Calligraphy">New Product</h1>
              </div>
              <div class="col-md-4">
                 <img src="../image/title-2.png">
              </div>
              <div class="col-md-4" style="border-bottom: 2px solid #9fbb4a; text-align: center; margin-top: 65px;">
                 <!-- <img src="../image/title-1.png"> -->
              </div>
        
      </div>
        <?php 
        include('server.php') ;
        error_reporting(2);
        $sql= "SELECT * from product " ; 
        $result = mysqli_query($db,$sql); 
        $kq=mysqli_fetch_assoc($result);
        ?>
        
          <div class="row" >
         <?php 
                         include('server.php') ;
                        $sql ="SELECT * FROM product
                        ORDER BY dates DESC 
                        LIMIT 6; ";
                         $result = mysqli_query($db,$sql);
                        if($result==true){
                          $i=0;
                          while($kq=mysqli_fetch_assoc($result))
                          { $i++;
             
           ?>
           <form  >
             </form>
          <form  id="form1" name="form1" method="POST" action="cart.php" enctype="multipart/form-data">
            <div class="col-md-4 col-sm-6" >
                <div class="circle-border zoom-in">
                  <input type="hidden" name="pid" id="pid" value="<?php echo $kq['id'];?>" />
                  <img class="img" src="<?php echo $kq['imaage'];?>" alt=" my pham" width="200" height="200">
                </div>
                <h3 style="color: #c31cb5; font-family: Lucida Calligraphy;"> <?php echo $kq["name_product"];?> </h3>
               
                <a class="buy"><input type="submit" id="subaz" class="btn btn-success" value="Buy Now"/></a>
              
            </div>
          </form>
           <?php } }?>
        </div>  
    </div>
</div>
  