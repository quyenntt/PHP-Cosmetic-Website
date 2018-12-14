
  <?php include 'head.php' ?>
  <?php include 'menu_ngang.php' ?>
<body>
    <?php
        require_once("test.php");
        $sql = "SELECT id, user_name, password_user FROM users
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
                <div class="panel-heading">
                    <h3 class="panel-title">Add Account</h3>
                </div>
                <div class="panel-body">
                    <form method="POST" action=""  enctype="multipart/form-data">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Id" name="id_user" type="text" value="<?php echo $kq['id']; ?>">
                            </div>
                            <div class="form-group">
                                <p>User</p>
                                <input class="form-control" name="usser" type="text" value="<?php echo $kq['user_name']; ?>">
                            </div>
                            <div class="form-group">
                                <p>Passs</p>
                                <input class="form-control" name="passwords" type="password" value="<?php echo $kq['password_user']; ?>">
                            </div>
                         
                            <!-- Change this to a button or input when using this as a form -->
                            <input type="submit" name="submit" value="update" class="btn btn-success">
                            <a href="account_table.php" class="btn btn-sm btn-success">Continue</a>
                        </fieldset>
                    </form>
                        <?php 
                            require_once('test.php');
                            if (isset($_POST['submit'])) {
                                $id_users = $_POST["id_user"];
                                $name_users = $_POST["usser"];
                                $passwords_users = $_POST["passwords"];
                        
                                $update = "UPDATE users SET id = '$id_users', user_name = '$name_users', password_user = md5('$passwords_users')
                                    WHERE id ='$_GET[id]'";
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