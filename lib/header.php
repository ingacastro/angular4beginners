<!--link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"-->
<head>
	<meta charset="UTF-8">
	<title>Cheap Market</title>
	<!--link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script-->
	<!--link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script-->
	<!------ Include the above in your HEAD tag ---------->
	<link rel="stylesheet" href="<?php echo $dir ?>lib/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="<?php echo $dir ?>lib/css/bootstrap4.1.1.min.css"/>
	<link rel="stylesheet" href="<?php echo $dir ?>lib/css/bootstrap.css"/>
	<link rel="stylesheet" href="<?php echo $dir ?>lib/css/datatables.bootstrap.css">
	<link rel="stylesheet" href="<?php echo $dir ?>lib/css/grid.css"/>
	<!--link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" /-->
	<link rel="stylesheet" href="<?php echo $dir ?>lib/css/font-awesome.min.css"/>
	<script src="<?php echo $dir ?>lib/js/jquery-3.4.1.js"></script>
	<script src="<?php echo $dir ?>lib/js/jquery.min.js"></script>
	<script src="<?php echo $dir ?>lib/js/angular.js"></script>
	<!--script src="<?php echo $dir ?>lib/js/angular.min.js"></script-->
	<script src="<?php echo $dir ?>lib/js/angular-route.js"></script>
	<script src="<?php echo $dir ?>lib/js/angular-sanitize.min.js" data-require="angularjs@1.4" data-semver="1.4.4"></script>
	<script src="<?php echo $dir ?>lib/js/angular-cookies.min.js" data-require="angularjs@1.4" data-semver="1.4.4"></script>
	<script src="<?php echo $dir ?>lib/js/angular-animate.min.js" data-require="angularjs@1.4" data-semver="1.4.4"></script>
	
	<script src="<?php echo $dir ?>lib/js/bootstrap.min.js"></script>

	<!--script src="lib/js/bootstrap.js"></script-->
		
	<script src="<?php echo $dir ?>lib/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo $dir ?>lib/js/angular-datatables.min.js"></script>
	<script src="<?php echo $dir ?>app.js"></script>
	<!--script src="<?php echo $dir ?>app2.js"></script-->
	
	<style>
	.form_style{
		width: 600px;
		margin: 0 auto;
	}
  </style>
</head>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
	    <a class="navbar-brand" href="<?php echo $dir ?>index.php">Cheapmarket</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
            <ul class="navbar-nav m-auto">
                <li class="nav-item m-auto">
                    <a class="nav-link" href="<?php echo $dir ?>index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $dir ?>category.html">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $dir ?>templates/product.php">Product</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo $dir ?>templates/cart.php">Cart <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $dir ?>contact.html">Contact</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" >
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Search...">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-secondary btn-number">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
				<!--div ng-controller="StoreController" >
					<div ng-show="cart.length !== 0">
						<a class="btn btn-success btn-sm ml-3"  href="cart.html">
							<i class="fa fa-shopping-cart"></i> Cart
							<div ng-repeat="a in cart" >
								<span class="badge badge-light"  >{{a.count}}</span>
							</div>
						</a>
					</div>
				</div-->
				<?php
				if(!isset($_SESSION["name"])){
				?>
				<button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#ingresar">Ingresar</button>
				<button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#registrarse">Registrarse</button>
				<?php
				}else{
				?>
				<div class="input-group input-group-sm">
					<div class="input-group-append">
						<span style="color:white"><?php echo $_SESSION["name"];?></span>
						<a href="<?php echo $dir?>config/logout.php"><button type="button" class="btn btn-info btn-md">Logout</button></a>
					</div>
				</div>
				<?php
				}
				?>
            </form>
        </div>
    </div>
</nav>

<div ng-app="sampleApp" ng-app="login_register_app" ng-controller="login_register_controller" >
	<div id="ingresar" class="modal fade" role="dialog" ng-show="login_form">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="panel panel-default" >
					<div class="panel-heading modal-header">
						<h3 class="panel-title modal-title">Login</h3>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="panel-body modal-body">
						<form method="post" ng-submit="submitLogin()">
						
							<div class="form-group">
								<label>Enter Your Email</label>
								<input type="text" name="email" ng-model="loginData.email" class="form-control" />
								<input type="hidden" name="dir" ng-init="loginData.dir='<?php echo $dir ?>'" />
							</div>
							<div class="form-group">
							   <label>Enter Your Password</label>
							   <input type="password" name="password" ng-model="loginData.password" class="form-control" />
							</div>
							<div class="form-group" align="center">
							   <input type="submit" name="login" class="btn btn-primary" value="Login" />
							   <br />
							   <input type="button" name="register_link" data-toggle="modal" data-target="#registrarse" class="btn btn-primary btn-link" ng-click="showRegister()" value="Register" />
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="registrarse" class="modal fade" role="dialog" ng-show="register_form" >
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="panel panel-default" >
					<div class="panel-heading modal-header">
						<h3 class="panel-title modal-title" >Register</h3>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="alert  {{alertClass}} alert-dismissible" ng-show="alertMsg">
						<a href="#" class="close" ng-click="closeMsg()" aria-label="close">&times;</a>
						{{alertMessage}}
					</div>
					<div class="panel-body modal-body">
						<form method="post" ng-submit="submitRegister()">
							<div class="form-group">
								<label>Enter Your First Name</label>
								<input type="text" name="name" ng-model="registerData.firstname" class="form-control" />
							</div>
							<div class="form-group">
								<label>Enter Your Last Name</label>
								<input type="text" name="lastname" ng-model="registerData.lastname" class="form-control" />
							</div>
							<div class="form-group">
								<label>Enter Your Address Location</label>
								<input type="text" name="location" ng-model="registerData.location" class="form-control" />
							</div>
							<div class="form-group">
								<label>Enter Your Email</label>
								<input type="text" name="email" ng-model="registerData.email" class="form-control" />
							</div>
							<div class="form-group">
								<label>Enter Your Password</label>
								<input type="password" name="password" ng-model="registerData.password" class="form-control" />
							</div>
							<div class="form-group" align="center">
								<input type="submit" name="register" class="btn btn-primary" value="Register" />
								<br />
								<input type="button" name="login_link" data-toggle="modal" data-target="#ingresar" class="btn btn-primary btn-link" ng-click="showLogin()" value="Login" />
							</div>
						</form>
					</div>
				</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
			</div>
		</div>
	</div>
</div>