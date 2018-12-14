<?php 
	session_start();
	// variable declaration
	$username = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect("localhost","root","","sell_cosmetics1") or die("can't connect database");
  	mysqli_set_charset($db,"utf8");
  // if ($db) {
  //   echo "<script>alert('Data Update ha ha successfuly!')</script>";
  // }
  // else{
  //   echo "<script>alert('Data no Update successfuly!')</script>";
  // }

	// REGISTER USER
														    
	if (isset($_POST['reg_user'])) {

			// receive all input values from the form
			$username = mysqli_real_escape_string($db,$_POST["uname"]);
			$password_1 = mysqli_real_escape_string($db,$_POST["passw"]);
			$password_2 = mysqli_real_escape_string($db,$_POST["cfpw"]);

			// form validation: ensure that the form is correctly filled
			if (empty($username)) { array_push($errors, "Username is required"); }
			if (empty($password_1)) { array_push($errors, "Password is required"); }

			if ($password_1 != $password_2) {
				echo "<script>alert('Data not successfuly!')</script>";
				array_push($errors, "The two passwords do not match");
			}

			// register user if there are no errors in the form
			if (count($errors) == 0) {
				$password = md5($password_1);//encrypt the password before saving in the database
				$query = "INSERT INTO users (user_name,password_user) 
						  VALUES('$username','$password')";

				mysqli_query($db,$query);

				$_SESSION['uname'] = $username;
				$_SESSION['success'] = "You are now logged in success";
				 echo "<script> alert('You are now logged in success')</script>";
			}

		}
	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM users WHERE user_name ='$username' AND  password_user ='$password'";

			$results = mysqli_query($db, $query);
			$kq= mysqli_fetch_array($results);

			if (mysqli_num_rows($results) > 0) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				echo "<script> alert('login success countinue click into button countinue')</script>";
				$_SESSION['id'] = $kq['id'];
				echo  $kq['id'];
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}
	if (isset($_POST['submit_namess']))
		{
			$_SESSION['id'] = $_POST['idd'];
	      	$ll = $_POST['idd'];
	        $name_cuss = $_POST['name_cus'];
	        $email_cuss = $_POST['email_cus'];
	        $phone_cuss = $_POST['phone_cus'];
	        $address_cuss = $_POST['address_cus'];
	        $city_cuss = $_POST['city_cus'];
	        $state_cuss = $_POST['state_cus'];

	         $update = "UPDATE users SET your_name = '$name_cuss',email = '$email_cuss', phone = '$phone_cuss', address = '$address_cuss', city = '$city_cuss', state = '$state_cuss' WHERE id = '$ll'";

	            $results = mysqli_query($db,$update);

				$sql1 = "INSERT INTO orders (id_user,date_orders)

				VALUES ('$ll',DATE(NOW()))";
				
				mysqli_query($db,$sql1);
				$current_id = mysqli_insert_id($db);

				 $sql = "UPDATE orders SET date_orders = DATE(NOW()) WHERE id_user = $ll";

	            $results = mysqli_query($db,$sql);
	    }	

	function getUserInfo($db){
		$sql = 'SELECT your_name,email,phone,address,city,state from users WHERE id = '.$_SESSION['id'];

		$result = mysqli_query($db,$sql);
		$kq=mysqli_fetch_assoc($result);
		return $kq;
	}
	


								                  
?>