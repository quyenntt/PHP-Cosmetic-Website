
  <?php include 'head.php' ?>
  <?php include 'menu_ngang.php' ?>
   
<body>
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
                <div class="panel-heading">
                    <h3 class="panel-title">Add Account</h3>
                </div>
                <div class="panel-body">
                    <form method="POST" action="" enctype="multipart/form-data">
                        <fieldset>
                            <div class="form-group">
                                <p>User</p>
                                <input class="form-control" name="uername" type="text" >
                            </div>
                            <div class="form-group">
                                <p>Passs</p>
                                <input class="form-control" name="password" type="password" >
                            </div>
                         
                            <!-- Change this to a button or input when using this as a form -->
                            <button type="submit" class="btn btn-default">Submit</button>
                            <button type="submit" class="btn btn-default"><a href="account_table.php">next</a></button>
                        </fieldset>
                    </form>
                    <?php
                        error_reporting(2);
                        if(count($_POST)>0) {
                          
                          require_once("test.php");
                          $user_name = $_POST['uername'];
                          $password =$_POST["password"];

                          $sql = "INSERT INTO users (user_name,password_user)
                           VALUES ('$user_name',md5('$password'))";
                          mysqli_query($conn,$sql);
                          $current_id = mysqli_insert_id($conn);
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