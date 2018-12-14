<?php include('test_rl.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Information custommer</title>
	<link rel="stylesheet" type="text/css" href=".\css\payofcustommer.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.0/css/bootstrap.min.css">
</head>
<body>
	<header>
		
	</header>
    <div class="container">
    </div>
	<div class="container">
	    <div class="row">
	    	<section>
	        <div class="wizard">
	            <div class="wizard-inner">
	                <div class="connecting-line"></div>
	                <ul class="nav nav-tabs" role="tablist">

	                    <li role="presentation" class="active">
	                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Login">
	                            <span class="round-tab">
	                               1
	                            </span>
	                        </a>
	                    </li>

	                    <li role="presentation" class="disabled">
	                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Delivery address">
	                            <span class="round-tab">
	                               2
	                            </span>
	                        </a>
	                    </li>
	                    <li role="presentation" class="disabled">
	                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Purchase payment">
	                            <span class="round-tab">
	                                3
	                            </span>
	                        </a>
	                    </li>

	                    <li role="presentation" class="disabled">
	                        <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
	                            <span class="round-tab">
	                                <i class="glyphicon glyphicon-ok"></i>
	                            </span>
	                        </a>
	                    </li>
	                </ul>
	            </div>
                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="step1">
                        <div class="step1">
                            <div class="row">
                            	<div class="col-md-4">
						            <div class="list-group wizard-menu">
						                <a href="#" class="list-group-item active step-1-menu" data-for=".step-1">
						                    <h4 class="list-group-item-heading">1. Login</h4>
						                    <p class="list-group-item-text">Is a registered member</p>
						                </a>
						                <a href="#" class="list-group-item step-2-menu" data-for=".step-2">
						                    <h4 class="list-group-item-heading">2. Create Account</h4>
						                    <p class="list-group-item-text">For new customers</p>
						                </a>
						            </div>
						        </div>
						        <div class="col-md-8">
						<!--                Load content in-->
						            <div class="well wizard-content">

						            </div>
						<!--                Content to load-->
						            <div class="hide">
						            	<?php include('login_use.php'); ?>

		            				</div>

		       <!--  </div> -->
                <div class="tab-pane" role="tabpanel" id="step2">
                    <?php include('information_cus.php');  ?>
                </div>

                <div class="tab-pane" role="tabpanel" id="step3">
                    <div class="step33">
                    	<div class="container">
                    		
                    		<div class="row">
                    			<div class="col-md-10">
									<div class="span7"> 
										<div class="widget stacked widget-table action-table">
											
											<div class="widget-content">
												<?php 
												 error_reporting(2);
												 $sql ="SELECT date_orders from orders";
												 ?>
												<form action="" method="POST" enctype="multipart/form-data">
												<table class="table table-bordered">
													<thead>
														<tr> 
															<th>Day buy product</th>

														</tr>
														<?php 
														
														$sql = 'SELECT date_orders from orders WHERE id_user = '.$_SESSION['id'];

									                    $result = mysqli_query($db,$sql);
									                    $kqt=mysqli_fetch_assoc($result);
														?>
														<tr>
															<td><?php echo $kqt["date_orders"];?></td>
														</tr>
													</table>
													</form>
												
											</div> <!-- /widget-content -->
										
										</div> <!-- /widget -->
										
										<div class="widget stacked widget-table action-table">
										
										<div class="widget-content">
											<?php 
											 error_reporting(2);
											 $sql ="SELECT your_name,email,phone,address,city,state from users";
											 ?>
											<form action="" method="POST">
											<table class="table table-bordered">
												<thead>
													<tr style="background: #33a7d8;"> 

														<td style="border-right: 1px solid #000;">Name</td>
														<td style="border-right: 1px solid #000;">Email</td>
														<td style="border-right: 1px solid #000;">Phone</td>
														<td style="border-right: 1px solid #000;">Address</td>
														<td style="border-right: 1px solid #000;">City</td>
														<td style="border-right: 1px solid #000;">State</td>
														<td>Fee</td>

													</tr>
													<?php 
													
													$sql = 'SELECT your_name,email,phone,address,city,state from users WHERE id = '.$_SESSION['id'];

								                    $result = mysqli_query($db,$sql);
								                    $kqt=mysqli_fetch_assoc($result);
													?>
													<tr>
													    <td><?php echo $kqt['your_name']; ?></td>
														<td><?php echo $kqt["email"];?></td>
														<td><?php echo $kqt["phone"];?></td>
														<td><?php echo $kqt["address"];?></td>
														<td><?php echo $kqt["city"];?></td>
														<td><?php echo $kqt["state"];?></td>
														<td><?php echo '20000';?></td>
													</tr>
											     	
												</table>
												</form>
											
										</div> <!-- /widget-content -->
									
									</div> <!-- /widget -->
										
							            </div>

							            <div class="span7">
							            	<?php include('show_order.php'); ?>
							            	<ul class="list-inline pull-right">
                        						<li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                      
                        						<li><button type="submit" class="btn btn-primary btn-info-full next-step">

                        						<a href="index.php" style="color: #FFFFFF">Finish</a> </button></li>
                    						</ul>
							            	

                						</div>


                <div class="tab-pane" role="tabpanel" id="complete">
                    <div class="step44">
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
	            </form>
	        </div>
	        </section>
	    </div>

</div>
</body>
<script type="text/javascript" src="./javascript/pay.js"></script>
</html>