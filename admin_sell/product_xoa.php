
<?php include 'head.php' ?>
        <?php include 'menu_ngang.php' ?>
           
             <?php include'menu_doc.php';?>

                  <?php 
            
                     require_once("test.php");
                     $delete="DELETE  from  product where id='$_GET[id]' ";
                 
                     mysqli_query($conn,$delete);
                     if ($delete==true)
                   {
                     echo "<script type=\"text/javascript\">alert(\"xoa thanh cong!\");  
                      </script>";
                     echo"<script language='javascript'> window.location = 'product_table.php';    </script>";
                   }
                  ?>
<?php include 'foot.php';?>
    
