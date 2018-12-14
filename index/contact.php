<!DOCTYPE html>
<html>
<head>
 <?php include'head_link.php' ?> 
	<title>Contact</title>
</head>
<body>
<header> <?php include'header_menu.php';?> </header>
    <?php
      error_reporting(2);
      if(count($_POST)>0){
      require_once("server.php");
      }
    ?>
    <div class="container" style="margin-top: 200px; ">
    <div class="row">
    	<div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="well well-sm">
                <form method="POST" action=" " enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Id_Customer</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name" name="id_cus" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="name">
                                Subject</label>
                            <input type="text" class="form-control" name="subjecct" id="name" placeholder="Enter subject" required="required" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs" name="submit">
                            Sent comment</button>
                    </div>
                </div>
                </form>
                    <?php
                        error_reporting(2);
                        if(count($_POST)>0) {
                          
                          require_once("server.php");
                          $id_customer = $_POST['id_cus'];
                          $subjects = $_POST['subjecct'];
                          $messages =$_POST["message"];

                          $sql = "INSERT INTO comments (id,subjects,content)
                           VALUES ('$id_customer','$subjects','$messages')";
                          mysqli_query($db,$sql);
                          $current_id = mysqli_insert_id($db);
                          if(!empty($current_id)) {
                          $message = "New User Added Successfully";
                          }
                        }

                    ?>
            </div>
        </div>
        <div class="col-md-2"></div>
      
    </div>
	</div>
</body>


</html>