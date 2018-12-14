<div class="step2">
	<div class="step_21">
	    <div class="row">
	    	<!-- <form >
	-->
			    <div class="row setup-content" id="ProfileSetup-step">
			        <div class="col-xs-12">
			            <div class="col-md-12">
			                 <br/>
			                <div class="form-horizontal">

			                    <form action="" method="POST" enctype="multipart/form-data">
			                        <fieldset>
			                      
			                          <legend>Delivery address</legend>
			                          <br/>
			                          <?php 
			                          	if(isset($_SESSION['id'])){
			                          		$kq = array();
			                          		$kq = getUserInfo($db);
			                          	}
			                          ?>

			                         <div class="form-group">
			                            <label class="col-sm-3 control-label" for="card-holder-name">Id Users</label>
			                            <div class="col-sm-9">
			                              <input  maxlength="100" type="text" class="form-control" name="idd" value="<?php echo $_SESSION['id'] ?>"/>
			                            </div>
			                          </div>
			    
			                          <div class="form-group">
			                            <label class="col-sm-3 control-label" for="card-holder-name">Your Name
			                            </label>
			                            <div class="col-sm-9">
			                              <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter your name" name="name_cus" value="<?php echo $kq['your_name'] ?>" />
			                            </div>
			                          </div>
			                          	<div class="form-group">
			                            <label class="col-sm-3 control-label" for="card-holder-name">Email</label>
			                            <div class="col-sm-9">
			                              <input  maxlength="100" type="email" required="required" class="form-control" placeholder="Enter your Email" name="email_cus" value="<?php echo $kq['email'] ?>" />
			                            </div>
			                          </div>

			                          <div class="form-group">
			                            <label class="col-sm-3 control-label" for="card-number">Phone Number</label>
			                            <div class="col-sm-9">
			                             <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Primary Phone Number" name="phone_cus" value="<?php echo $kq['phone'] ?>"/>
			                            </div>
			                          </div>
			                          <div class="form-group">
			                            <label class="col-sm-3 control-label" for="card-number">Address</label>
			                            <div class="col-sm-9">
			                             <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Address" name="address_cus" value="<?php echo $kq['address'] ?>"/>
			                            </div>
			                          </div>
				                         <div class="col-lg-6">
				                                <div class="form-group">
				                                    <label class="col-sm-6 control-label" for="card-number">City</label>
				                                    <div class="col-sm-6" style="padding-left:8px">
				                                     <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter City" name="city_cus" value="<?php echo $kq['city'] ?>" />
				                                    </div>
				                                </div>
				                        </div>
			                           <div class="col-lg-6">
			                               <div class="form-group">
			                                    <label class="col-sm-6 control-label next-step" for="card-number">State/Province</label>
			                                    <div class="col-sm-6" style="padding:0px">
			                                     <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter State/Province" name="state_cus" value="<?php echo $kq['state'] ?>" />
			                                    </div>
			                                </div>
			                            </div>
			          
			                             <button class="btn btn-lg btn-primary" type="submit" name="submit_namess" style="float: right;">

			                             Save</button>
			                        </fieldset>
			                       
			                    </form>
			                </div>

			            </div>
			        </div>
			    </div>
			<!-- </form> -->
		</div>
	</div>
	<div class="step-22">

	</div>
	</div>
	<ul class="list-inline pull-right">
	<li><button type="button" class="btn btn-default prev-step">Previous</button></li>
	<li><button type="button" class="btn btn-primary next-step">continue</button></li>
	</ul>