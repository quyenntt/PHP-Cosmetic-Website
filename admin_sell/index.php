


<!DOCTYPE html>
<html lang="en">
<head>
     <link rel="stylesheet" href="./Css/login_ad.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Document</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
     <?php
      error_reporting(2);
      if(count($_POST)>0){
      require_once("test.php");
    }

    ?>
<div class="container">
    <div class="row" style="margin-left: 70%; margin-top: 5%;">
        <div class=" col-sm-12 col-md-12 col-lg-12">
            <div class="form-login">
            <h4>Welcome Admin</h4>
            <input type="text" id="userName" class="form-control input-sm chat-input" placeholder="username" />
            </br>
            <input type="password" id="userPassword" class="form-control input-sm chat-input" placeholder="password" />
            </br>
            <div class="wrapper">
            <span class="group-btn">     
                <a href="index1.php" class="btn btn-primary btn-md">login <i class="fa fa-sign-in"></i></a>
            </span>
            </div>
            </div>
        
        </div>
    </div>
</div>
  
</body>
</html>
