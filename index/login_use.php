                <div class="step-1">
                    <div class="row">
                        <div class="col-md-12">
                           <div class="omb_login">
						    	<h3 class="omb_authTitle">Login</h3>
								<div class="row omb_row-sm-offset-3 omb_socialButtons">
						    	    <div class="col-xs-4 col-sm-2">
								        <a href="#" class="btn btn-lg btn-block omb_btn-facebook">
									        <i class="fa fa-facebook visible-xs"></i>
									        <span class="hidden-xs">Facebook</span>
								        </a>
							        </div>
						        	<div class="col-xs-4 col-sm-2">
								        <a href="#" class="btn btn-lg btn-block omb_btn-twitter">
									        <i class="fa fa-twitter visible-xs"></i>
									        <span class="hidden-xs">Twitter</span>
								        </a>
							        </div>	
						        	<div class="col-xs-4 col-sm-2">
								        <a href="#" class="btn btn-lg btn-block omb_btn-google">
									        <i class="fa fa-google-plus visible-xs"></i>
									        <span class="hidden-xs">Google+</span>
								        </a>
							        </div>	
								</div>

								<div class="row omb_row-sm-offset-3 omb_loginOr">
									<div class="col-xs-12 col-sm-6">
										<hr class="omb_hrOr">
										<span class="omb_spanOr">or</span>
									</div>
								</div>

								<div class="row omb_row-sm-offset-3">
									<div class="col-xs-12 col-sm-6">
										 <?php include('errors.php'); ?>
									    <form class="omb_loginForm" action="" method="POST">
                                         
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-user"></i></span>
												<input type="text" class="form-control" name="username" placeholder="User name">
											</div>
											<span class="help-block"></span>
																
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-lock"></i></span>
												<input  type="password" id="psw" class="form-control" name="password" placeholder="Password">
											</div>
						                    <span class="help-block">Password error</span>

											<button class="btn btn-lg btn-primary btn-block" type="submit" name="login_user">	Login
												
											</button>

										</form>
										
									</div>
						    	</div>
								<div class="row omb_row-sm-offset-3">
									<div class="col-xs-12 col-sm-3">
										<label class="checkbox">
											<input type="checkbox" value="remember-me">Remember Me
										</label>
									</div>
									<div class="col-xs-12 col-sm-3">
										<p class="omb_forgotPwd">
											<a href="#">Forgot password?</a>
										</p>
									</div>
								</div>	    	
							</div>
                        </div>
                    </div>
                </div>
                <div class="step-2">
                    <div class="row">
                        <div class="col-md-12">
                           <div class="omb_login">
						    	<h3 class="omb_authTitle">Sign up</h3>
								<div class="row omb_row-sm-offset-3 omb_socialButtons">
						    	    <div class="col-xs-4 col-sm-2">
								        <a href="#" class="btn btn-lg btn-block omb_btn-facebook">
									        <i class="fa fa-facebook visible-xs"></i>
									        <span class="hidden-xs">Facebook</span>
								        </a>
							        </div>
						        	<div class="col-xs-4 col-sm-2">
								        <a href="#" class="btn btn-lg btn-block omb_btn-twitter">
									        <i class="fa fa-twitter visible-xs"></i>
									        <span class="hidden-xs">Twitter</span>
								        </a>
							        </div>	
						        	<div class="col-xs-4 col-sm-2">
								        <a href="#" class="btn btn-lg btn-block omb_btn-google">
									        <i class="fa fa-google-plus visible-xs"></i>
									        <span class="hidden-xs">Google+</span>
								        </a>
							        </div>	
								</div>

								<div class="row omb_row-sm-offset-3 omb_loginOr">
									<div class="col-xs-12 col-sm-6">
										<hr class="omb_hrOr">
										<span class="omb_spanOr">or</span>
									</div>
								</div>

								<div class="row omb_row-sm-offset-3">
									<div class="col-xs-12 col-sm-6">
										<?php include('errors.php'); ?>
									    <form class="omb_loginForm" action="" method="POST">
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-user"></i></span>
												<input type="text" class="form-control" name="uname" placeholder="User name">
											</div>
											<span class="help-block"></span>
																
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-lock"></i></span>
												<input  type="password" class="form-control" name="passw" placeholder="Password">
											</div>
											<span class="help-block"></span>

											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-user"></i></span>
												<input  type="password" class="form-control" name="cfpw" placeholder="Confim Password">
											</div>

											<span class="help-block"></span>

											<button class="btn btn-lg btn-primary btn-block" type="submit" name="reg_user">Register</button>
										</form>

									</div>
						    	</div>
								<div class="row omb_row-sm-offset-3">
									<div class="col-xs-12 col-sm-3">
										<label class="checkbox">
											<input type="checkbox" value="remember-me">Remember Me
										</label>
									</div>
									
								</div>	    	
							</div>
						</div>
                    </div>
                </div>
                
            </div>
        </div>

	</div>

</div>

<ul class="list-inline pull-right">
    <li><button type="button" class="btn btn-primary next-step">Continue</button></li>
</ul>