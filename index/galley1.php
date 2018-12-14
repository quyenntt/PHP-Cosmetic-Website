<div class="container">
  <div class="row">
    <div class="row" style="margin-top: 20px;">
      <div class="col-md-4" style="border-bottom: 2px solid #9fbb4a; text-align: center; margin-top: 65px;">
                 <!-- <img src="../image/title-1.png"> -->
              </div>
              <div class="col-md-4">
                 <img src="../image/tt.png">
              </div>
              <div class="col-md-4" style="border-bottom: 2px solid #9fbb4a; text-align: center; color: #a32e58;">
                 <h1 style="font-family: Lucida Calligraphy">Category</h1>
              </div>
        
      </div>
      
    </div>
       <div class="row" >
               
             
      <div align="center">
          <button class="btn btn-success filter-button" data-filter="all">All</button>
          <button class="btn btn-success filter-button" data-filter="lipstick ">Lipstick</button>
          <button class="btn btn-success filter-button" data-filter="lotion">Top selling lotion</button>
          <button class="btn btn-success filter-button" data-filter="Cleasing">Cleasing milk</button>
          <button class="btn btn-success filter-button" data-filter="Make">Make up</button>
      </div>
      <br/>  
  </div>
      
    <?php include('server.php') ;
           error_reporting(2);
           $sql ="SELECT *FROM product"; ?>
          
          <?php include('server.php') ;
          $sql="SELECT * FROM product";
          $result=mysqli_query($db,$sql);
          $kq=mysqli_fetch_assoc($result);
          ?>
 

            <?php require_once("server.php");
                $sql ="SELECT * FROM product";
                $result= mysqli_query($db,$sql);
                if ($result==true) {
                  $i=0;
                  while ($kq=mysqli_fetch_assoc($result) )
                  {
                    $i++;
                    // var_dump($kq);
            ?>
            <div class="row"  id="<?php echo $kq['id'];?>" style="display:none; border: 2px solid black; background-color: black;">
                <div class="col-md-6"> 
                    <img src="<?php echo $kq['imaage'];?>" alt="">
                </div>
                <div class="col-md-6"> 
                    <p  class="vang" style="font-size: 30px; text-align: center; "><?php echo $kq["name_product"];?>  </p>
                    <p class="vang">Price:  <span style="color: white;"><?php echo $kq['price'];?> VND</span>  </p>
                 
                    <p class="vang"> Day of Add:<span style="color: white;"><?php echo $kq['dates'];?></span>  </p>
                  
                    <p class="vang">Description: <span style="color: white;"> <?php echo $kq['description'];?></span> </p>
                </div>
            </div>
             <?php  } } ?>
 
    <div class="row">

           <?php require_once("server.php");
               $sql =" SELECT * FROM product where id_categories ='1';";
               $result =mysqli_query($db,$sql);
               if($result==true)
                  {
                      while($kq=mysqli_fetch_assoc($result))
                          {?>
                              <form  id="form1" name="form1" method="POST" action="cart.php" enctype="multipart/form-data">
                                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter lipstick">
                                
                                    <div class="cuadro_intro_hover " style="background-color:#cccccc;">
                                        <p style="text-align:center; ">
                                            <input type="hidden" name="pid" id="pid" value="<?php echo $kq['id'];?>" />
                                            <img style="margin-left: 5%;"  src="<?php echo $kq['imaage'];?>"  class="img-responsive" alt="">
                                        </p>
                                        <div class="caption">
                                            <div class="blur"></div>
                                            <div class="caption-text">
                                                <h3 style="border-top:2px solid white;text-align: center; border-bottom:2px solid white; padding:20px; font-family: Lucida Calligraphy">--------<span style="color: yellow;"> <?php echo $kq['name_product'];?></span>-------- </h3>
                                              
                                                <p>Price:  <?php echo $kq['price'];?> VND</p>
                                              <a class=" btn btn-success" href="javascript:showhide('<?php echo $kq['id'];?>')"><span class="glyphicon glyphicon-plus"> Detail</span></a>
                                                <input class="btn btn-success buy" type="submit" id="subaz" value="Buy Now"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              </form>
                <?php } } ?>
         
        <!-- sp ma so 2 -->
          <?php require_once("server.php");
             $sql =" SELECT * FROM product where id_categories ='2';";
             $result =mysqli_query($db,$sql);
             if($result==true)
                {
                    while($kq=mysqli_fetch_assoc($result))
                        {
                          ?>
                          <form  id="form1" name="form1" method="POST" action="cart.php" enctype="multipart/form-data">
                          <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter lotion">
                          
                              <div class="cuadro_intro_hover " style="background-color:#cccccc;">
                                  <p style="text-align:center; ">
                                     <input type="hidden" name="pid" id="pid" value="<?php echo $kq['id'];?>" />
                                     <img style="margin-left: 5%;" src="<?php echo $kq['imaage'];?>"  class="img-responsive" alt="">
                                  </p>
                                  <div class="caption">
                                      <div class="blur"></div>
                                      <div class="caption-text">
                                           <h3 style="border-top:2px solid white;text-align: center; border-bottom:2px solid white; padding:20px; font-family: Lucida Calligraphy;">--------<span style="color: yellow;"> <?php echo $kq['name_product'];?></span>--------</h3>
                                              <p>Price:  <?php echo $kq['price'];?> VND</p>
                                          <a class=" btn btn-success" href="javascript:showhide('<?php echo $kq['id'];?>')"><span class="glyphicon glyphicon-plus"> Detail</span></a>
                                          <input class="btn btn-success buy" type="submit" id="subaz" value="Buy Now"/>
                                      </div>
                                  </div>
                              </div>
                              
                          </div>
                        </form>
          <?php   } } ?>


         <?php require_once("server.php");
             $sql =" SELECT * FROM product where id_categories ='3';";
             $result =mysqli_query($db,$sql);
             if($result==true)
                {
                    while($kq=mysqli_fetch_assoc($result))
                        {
                            
                        ?>
   
                         <form  id="form1" name="form1" method="POST" action="cart.php" enctype="multipart/form-data">       
                         <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter Cleasing">
                          
                              <div class="cuadro_intro_hover " style="background-color:#cccccc;">
                                  <p style="text-align:center; ">
                                     <input type="hidden" name="pid" id="pid" value="<?php echo $kq['id'];?>" />
                                     <img style="margin-left: 5%;"  src="<?php echo $kq['imaage'];?>"  class="img-responsive" alt="">
                                  </p>
                                  <div class="caption">
                                      <div class="blur"></div>
                                      <div class="caption-text">
                                           <h3 style="border-top:2px solid white; text-align: center;border-bottom:2px solid white; padding:20px; font-family: Lucida Calligraphy">--------<span style="color: yellow;"> <?php echo $kq['name_product'];?></span>--------</h3>
                                             <p>Price:  <?php echo $kq['price'];?> VND</p>
                                          <a class=" btn btn-success" href="javascript:showhide('<?php echo $kq['id'];?>')"><span class="glyphicon glyphicon-plus"> Detail</span></a>
                                          <input class="btn btn-success buy" type="submit" id="subaz" value="Buy Now"/>
                                      </div>
                                  </div>
                              </div>
                              
                          </div>
                        </form>
          <?php   } } ?>
         
         <?php require_once("server.php");
             $sql =" SELECT * FROM product where id_categories ='4';";
             $result =mysqli_query($db,$sql);
             if($result==true)
                {
                    while($kq=mysqli_fetch_assoc($result))
                        { 
                        
                        ?>
                           <form  id="form1" name="form1" method="POST" action="cart.php" enctype="multipart/form-data">
                            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter Make">
                                <div class="cuadro_intro_hover " style="background-color:#cccccc;">
                                    <p style="text-align:center; ">
                                      <input type="hidden" name="pid" id="pid" value="<?php echo $kq['id'];?>" />
                                      <img style="margin-left: 5%;"  src="<?php echo $kq['imaage'];?>"  class="img-responsive" alt="">
                                    </p>
                                    <div class="caption">
                                        <div class="blur"></div>
                                        <div class="caption-text">
                                             <h3 style="border-top:2px solid white;text-align: center; border-bottom:2px solid white; padding:20px; font-family: Lucida Calligraphy;">--------<span style="color: yellow;"> <?php echo $kq['name_product'];?></span>--------</h3>
                                             <p>Price:  <?php echo $kq['price'];?> VND</p>
                                            <a class=" btn btn-success" href="javascript:showhide('<?php echo $kq['id'];?>')"><span class="glyphicon glyphicon-plus"> Detail</span></a>
                                            <input class="btn btn-success buy" type="submit" id="subaz" value="Buy Now"/>

                                        </div>
                                    </div>

                                </div>

                            </div>
                          </form>
            <?php   } } ?>
           
    </div>
</div>