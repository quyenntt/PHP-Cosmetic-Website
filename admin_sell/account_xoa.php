<?php 
 
         require_once("test.php");
         $delete="DELETE  from users where id='$_GET[id]' ";
         mysqli_query($conn,$delete);
         if ($delete==true)
           {
             echo "<script type=\"text/javascript\">alert(\"xoa thanh cong!\"); </script>";
             echo"<script language='javascript'> window.location = 'account_table.php'; </script>";
           }
?>