<?php
session_start();
?>
<!DOCTYPE html>
<html>
<?php
$dir="";
include 'lib/header.php';
?>
<body ng-app="sampleApp">
<br />
   <!--h3 align="center">Login or Register</h3>
  <br />

  <div ng-app="login_register_app" ng-controller="login_register_controller" class="container form_style">
   <?php
   //if(!isset($_SESSION["name"])){
	    
   ?>
   <div class="alert  {{alertClass}} alert-dismissible" ng-show="alertMsg">
    <a href="#" class="close" ng-click="closeMsg()" aria-label="close">&times;</a>
    {{alertMessage}}
   </div>
   
   <div class="panel panel-default" ng-show="login_form">
    <div class="panel-heading">
     <h3 class="panel-title">Login</h3>
    </div>
    <div class="panel-body">
     <form method="post" ng-submit="submitLogin()">
      <div class="form-group">
       <label>Enter Your Email</label>
       <input type="text" name="email" ng-model="loginData.email" class="form-control" />
      </div>
      <div class="form-group">
       <label>Enter Your Password</label>
       <input type="password" name="password" ng-model="loginData.password" class="form-control" />
      </div>
      <div class="form-group" align="center">
       <input type="submit" name="login" class="btn btn-primary" value="Login" />
       <br />
       <input type="button" name="register_link" class="btn btn-primary btn-link" ng-click="showRegister()" value="Register" />
      </div>
     </form>
    </div>
   </div>

   <div class="panel panel-default" ng-show="register_form">
    <div class="panel-heading">
     <h3 class="panel-title">Register</h3>
    </div>
    <div class="panel-body">
     <form method="post" ng-submit="submitRegister()">
      <div class="form-group">
       <label>Enter Your First Name</label>
       <input type="text" name="name" ng-model="registerData.firstname" class="form-control" />
      </div>
	  <div class="form-group">
       <label>Enter Your Last Name</label>
       <input type="text" name="name" ng-model="registerData.lastname" class="form-control" />
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
       <input type="button" name="login_link" class="btn btn-primary btn-link" ng-click="showLogin()" value="Login" />
      </div>
     </form>
    </div>
   </div>
   <?php
   //}else{
   ?>
   <div class="panel panel-default">
    <div class="panel-heading">
     <h3 class="panel-title">Welcome to system</h3>
    </div>
    <div class="panel-body">
     <h1>Welcome - <?php //echo $_SESSION["name"];?></h1>
     <a href="config/logout.php">Logout</a>
    </div>
   </div>
   <?php
   //}
   ?>

  </div-->

<div class="container">
    <h3 class="h3">CheapMarket </h3>
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="img/img1.jpg">
                        <img class="pic-2" src="img/img2.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">Sale</span>
                    <span class="product-discount-label">20%</span>
                </div>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star disable"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><a href="#">Women's Blouse</a></h3>
                    <div class="price">$16.00
                        <span>$20.00</span>
                    </div>
                    <a class="add-to-cart" href="">+ Add To Cart</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="img/cocosette.jpg">
                        <img class="pic-2" src="img/cocosette2.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">Sale</span>
                    <span class="product-discount-label">50%</span>
                </div>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><a href="#">Men's Plain Tshirt</a></h3>
                    <div class="price">$5.00
                        <span>$10.00</span>
                    </div>
                    <a class="add-to-cart" href="">+ Add To Cart</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="img/susy.jpg">
                        <img class="pic-2" src="img/susy2.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">Sale</span>
                    <span class="product-discount-label">50%</span>
                </div>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><a href="#">Men's Plain Tshirt</a></h3>
                    <div class="price">$5.00
                        <span>$10.00</span>
                    </div>
                    <a class="add-to-cart" href="">+ Add To Cart</a>
                </div>
            </div>
        </div>
        <!--div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-7.jpg">
                        <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-8.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">Sale</span>
                    <span class="product-discount-label">50%</span>
                </div>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><a href="#">Men's Plain Tshirt</a></h3>
                    <div class="price">$5.00
                        <span>$10.00</span>
                    </div>
                    <a class="add-to-cart" href="">+ Add To Cart</a>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>


<div class="container">
    <h3 class="h3">shopping Demo-2 </h3>
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="product-grid2">
                <div class="product-image2">
                    <a href="#">
                        <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo3/images/img-1.jpeg">
                        <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo3/images/img-2.jpeg">
                    </a>
                    <ul class="social">
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <a class="add-to-cart" href="">Add to cart</a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Women's Designer Top</a></h3>
                    <span class="price">$599.99</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid2">
              <div class="product-image2">
                  <a href="#">
                      <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo3/images/img-3.jpeg">
                      <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo3/images/img-4.jpeg">
                  </a>
                  <ul class="social">
                      <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                      <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                      <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                  </ul>
                  <a class="add-to-cart" href="">Add to cart</a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Women's Yellow Top</a></h3>
                    <span class="price">$699.99</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid2">
                <div class="product-image2">
                    <a href="#">
                        <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo3/images/img-5.jpeg">
                        <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo3/images/img-6.jpeg">
                    </a>
                    <ul class="social">
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <a class="add-to-cart" href="">Add to cart</a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Women's Designer Top</a></h3>
                    <span class="price">$599.99</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid2">
                <div class="product-image2">
                    <a href="#">
                        <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo3/images/img-7.jpeg">
                        <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo3/images/img-8.jpeg">
                    </a>
                    <ul class="social">
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <a class="add-to-cart" href="">Add to cart</a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Women's Designer Top</a></h3>
                    <span class="price">$599.99</span>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>

<div class="container">
    <h3 class="h3">shopping Demo-3 </h3>
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="product-grid3">
                <div class="product-image3">
                    <a href="#">
                        <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo4/images/img-1.jpg">
                        <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo4/images/img-2.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">New</span>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Men's Blazer</a></h3>
                    <div class="price">
                        $63.50
                        <span>$75.00</span>
                    </div>
                    <ul class="rating">
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star disable"></li>
                        <li class="fa fa-star disable"></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid3">
                <div class="product-image3">
                    <a href="#">
                        <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo4/images/img-3.jpg">
                        <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo4/images/img-4.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Women's Designer Top</a></h3>
                    <div class="price">
                        $43.50
                    </div>
                    <ul class="rating">
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid3">
                <div class="product-image3">
                    <a href="#">
                        <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo4/images/img-5.jpg">
                        <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo4/images/img-6.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">New</span>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Men's Blazer</a></h3>
                    <div class="price">
                        $63.50
                        <span>$75.00</span>
                    </div>
                    <ul class="rating">
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star disable"></li>
                        <li class="fa fa-star disable"></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid3">
                <div class="product-image3">
                    <a href="#">
                        <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo4/images/img-7.jpg">
                        <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo4/images/img-8.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">New</span>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Men's Blazer</a></h3>
                    <div class="price">
                        $63.50
                        <span>$75.00</span>
                    </div>
                    <ul class="rating">
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star disable"></li>
                        <li class="fa fa-star disable"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>

<div class="container">
    <h3 class="h3">shopping Demo-4 </h3>
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="product-grid4">
                <div class="product-image4">
                    <a href="#">
                        <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo5/images/img-1.jpg">
                        <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo5/images/img-2.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">New</span>
                    <span class="product-discount-label">-10%</span>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Women's Black Top</a></h3>
                    <div class="price">
                        $14.40
                        <span>$16.00</span>
                    </div>
                    <a class="add-to-cart" href="">ADD TO CART</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid4">
                <div class="product-image4">
                    <a href="#">
                        <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo5/images/img-3.jpg">
                        <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo5/images/img-4.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-discount-label">-12%</span>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Men's Blue Shirt</a></h3>
                    <div class="price">
                        $17.60
                        <span>$20.00</span>
                    </div>
                    <a class="add-to-cart" href="">ADD TO CART</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid4">
                <div class="product-image4">
                    <a href="#">
                        <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo5/images/img-5.jpg">
                        <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo5/images/img-6.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">New</span>
                    <span class="product-discount-label">-10%</span>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Women's Black Top</a></h3>
                    <div class="price">
                        $14.40
                        <span>$16.00</span>
                    </div>
                    <a class="add-to-cart" href="">ADD TO CART</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid4">
                <div class="product-image4">
                    <a href="#">
                        <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo5/images/img-7.jpg">
                        <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo5/images/img-8.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">New</span>
                    <span class="product-discount-label">-10%</span>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Women's Black Top</a></h3>
                    <div class="price">
                        $14.40
                        <span>$16.00</span>
                    </div>
                    <a class="add-to-cart" href="">ADD TO CART</a>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>

<div class="container">
    <h3 class="h3">shopping Demo-5 </h3>
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="product-grid5">
                <div class="product-image5">
                    <a href="#">
                        <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo11/images/img-1.jpg">
                        <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo11/images/img-2.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <a href="#" class="select-options"><i class="fa fa-arrow-right"></i> Select Options</a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Men's Sweat Shirt</a></h3>
                    <div class="price">$11.00 - $15.00</div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid5">
                <div class="product-image5">
                    <a href="#">
                        <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo11/images/img-3.jpg">
                        <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo11/images/img-4.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <a href="#" class="select-options"><i class="fa fa-arrow-right"></i> Select Options</a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Women's Shirt</a></h3>
                    <div class="price">$10.00 - $12.00</div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid5">
                <div class="product-image5">
                    <a href="#">
                        <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo11/images/img-5.jpg">
                        <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo11/images/img-6.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <a href="#" class="select-options"><i class="fa fa-arrow-right"></i> Select Options</a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Men's Sweat Shirt</a></h3>
                    <div class="price">$11.00 - $15.00</div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid5">
                <div class="product-image5">
                    <a href="#">
                        <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo11/images/img-7.jpg">
                        <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo11/images/img-8.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <a href="#" class="select-options"><i class="fa fa-arrow-right"></i> Select Options</a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Men's Sweat Shirt</a></h3>
                    <div class="price">$11.00 - $15.00</div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>

<div class="container">
    <h3 class="h3">shopping Demo-6 </h3>
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="product-grid6">
                <div class="product-image6">
                    <a href="#">
                        <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo10/images/img-1.jpg">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Men's Shirt</a></h3>
                    <div class="price">$11.00
                        <span>$14.00</span>
                    </div>
                </div>
                <ul class="social">
                    <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                    <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                    <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid6">
                <div class="product-image6">
                    <a href="#">
                        <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo10/images/img-2.jpg">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Women's Red Top</a></h3>
                    <div class="price">$8.00
                        <span>$12.00</span>
                    </div>
                </div>
                <ul class="social">
                    <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                    <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                    <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid6">
                <div class="product-image6">
                    <a href="#">
                        <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo10/images/img-3.jpg">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Men's Shirt</a></h3>
                    <div class="price">$11.00
                        <span>$14.00</span>
                    </div>
                </div>
                <ul class="social">
                    <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                    <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                    <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid6">
                <div class="product-image6">
                    <a href="#">
                        <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo10/images/img-4.jpg">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Men's Shirt</a></h3>
                    <div class="price">$11.00
                        <span>$14.00</span>
                    </div>
                </div>
                <ul class="social">
                    <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                    <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                    <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<hr>

<div class="container">
    <h3 class="h3">shopping Demo-7 </h3>
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="product-grid7">
                <div class="product-image7">
                    <a href="#">
                        <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo8/images/img-1.jpg">
                        <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo8/images/img-2.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="" class="fa fa-search"></a></li>
                        <li><a href="" class="fa fa-shopping-bag"></a></li>
                        <li><a href="" class="fa fa-shopping-cart"></a></li>
                    </ul>
                    <span class="product-new-label">New</span>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Men's Blazer</a></h3>
                    <ul class="rating">
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                    </ul>
                    <div class="price">$15.00
                        <span>$20.00</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid7">
                <div class="product-image7">
                    <a href="#">
                        <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo8/images/img-3.jpg">
                        <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo8/images/img-4.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="" class="fa fa-search"></a></li>
                        <li><a href="" class="fa fa-shopping-bag"></a></li>
                        <li><a href="" class="fa fa-shopping-cart"></a></li>
                    </ul>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Women's White Shirt</a></h3>
                    <ul class="rating">
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                    </ul>
                    <div class="price">$15.00</div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid7">
                <div class="product-image7">
                    <a href="#">
                        <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo8/images/img-5.jpg">
                        <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo8/images/img-6.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="" class="fa fa-search"></a></li>
                        <li><a href="" class="fa fa-shopping-bag"></a></li>
                        <li><a href="" class="fa fa-shopping-cart"></a></li>
                    </ul>
                    <span class="product-new-label">New</span>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Men's Blazer</a></h3>
                    <ul class="rating">
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                    </ul>
                    <div class="price">$15.00
                        <span>$20.00</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid7">
                <div class="product-image7">
                    <a href="#">
                        <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo8/images/img-7.jpg">
                        <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo8/images/img-8.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="" class="fa fa-search"></a></li>
                        <li><a href="" class="fa fa-shopping-bag"></a></li>
                        <li><a href="" class="fa fa-shopping-cart"></a></li>
                    </ul>
                    <span class="product-new-label">New</span>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Men's Blazer</a></h3>
                    <ul class="rating">
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                    </ul> 
                    <div class="price">$15.00
                        <span>$20.00</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>

<div class="container">
    <h3 class="h3">shopping Demo-8 </h3>
    <div class="row">
        <div class="col-md-4 col-sm-6">
            <div class="product-grid8">
                <div class="product-image8">
                    <a href="#">
                        <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo7/images/img-1.jpg">
                        <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo7/images/img-2.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="" class="fa fa-search"></a></li>
                        <li><a href="" class="fa fa-shopping-bag"></a></li>
                        <li><a href="" class="fa fa-shopping-cart"></a></li>
                    </ul>
                    <span class="product-discount-label">-20%</span>
                </div>
                <div class="product-content">
                    <div class="price">£ 8.00
                        <span>£ 10.00</span>
                    </div>
                    <span class="product-shipping">Free Shipping</span>
                    <h3 class="title"><a href="#">Women's Plain Top</a></h3>
                    <a class="all-deals" href="">See all deals <i class="fa fa-angle-right icon"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="product-grid8">
                <div class="product-image8">
                    <a href="#">
                        <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo7/images/img-3.jpg">
                        <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo7/images/img-4.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="" class="fa fa-search"></a></li>
                        <li><a href="" class="fa fa-shopping-bag"></a></li>
                        <li><a href="" class="fa fa-shopping-cart"></a></li>
                    </ul>
                    <span class="product-discount-label">-30%</span>
                </div>
                <div class="product-content">
                    <div class="price">£ 7.00
                        <span>£ 10.00</span>
                    </div>
                    <span class="product-shipping">Free Shipping</span>
                    <h3 class="title"><a href="#">Women's Designer Top</a></h3>
                    <a class="all-deals" href="">See all deals <i class="fa fa-angle-right icon"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="product-grid8">
                <div class="product-image8">
                    <a href="#">
                        <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo7/images/img-5.jpg">
                        <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo7/images/img-6.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="" class="fa fa-search"></a></li>
                        <li><a href="" class="fa fa-shopping-bag"></a></li>
                        <li><a href="" class="fa fa-shopping-cart"></a></li>
                    </ul>
                    <span class="product-discount-label">-20%</span>
                </div>
                <div class="product-content">
                    <div class="price">£ 8.00
                        <span>£ 10.00</span>
                    </div>
                    <span class="product-shipping">Free Shipping</span>
                    <h3 class="title"><a href="#">Women's Plain Top</a></h3>
                    <a class="all-deals" href="">See all deals <i class="fa fa-angle-right icon"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>

<div class="container">
    <h3 class="h3">shopping Demo-9 </h3>
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo6/images/img-1.jpg">
                        <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo6/images/img-2.jpg">
                    </a>
                    <a href="#" class="fa fa-search product-full-view"></a>
                </div>
                <div class="product-content">
                    <ul class="rating">
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                    </ul>
                    <h3 class="title"><a href="#">Women's Top</a></h3>
                    <div class="price"> $12.60 - $40.53</div>
                    <a class="add-to-cart" href="">VIEW PRODUCTS</a>
                </div>
            </div>
        </div> 
        <div class="col-md-3 col-sm-6">
            <div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo6/images/img-3.jpg">
                        <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo6/images/img-4.jpg">
                    </a>
                    <a href="#" class="fa fa-search product-full-view"></a>
                </div>
                <div class="product-content">
                    <ul class="rating">
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star disable"></li>
                        <li class="fa fa-star disable"></li>
                    </ul>
                    <h3 class="title"><a href="#">Men's Shirt</a></h3>
                    <div class="price"> $10.20 </div>
                    <a class="add-to-cart" href="">READ MORE</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo6/images/img-5.jpg">
                        <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo6/images/img-6.jpg">
                    </a>
                    <a href="#" class="fa fa-search product-full-view"></a>
                </div>
                <div class="product-content">
                    <ul class="rating">
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                    </ul>
                    <h3 class="title"><a href="#">Women's Top</a></h3>
                    <div class="price"> $12.60 - $40.53</div>
                    <a class="add-to-cart" href="">VIEW PRODUCTS</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo6/images/img-7.jpg">
                        <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo6/images/img-8.jpg">
                    </a>
                    <a href="#" class="fa fa-search product-full-view"></a>
                </div>
                <div class="product-content">
                    <ul class="rating">
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                    </ul>
                    <h3 class="title"><a href="#">Women's Top</a></h3>
                    <div class="price"> $12.60 - $40.53</div>
                    <a class="add-to-cart" href="">VIEW PRODUCTS</a>
                </div>
            </div>
        </div>
    </div>
</div-->
<hr>
<!--h1> Alejandro Global Event</h1>

<div class="container">
    <ul>
		<li><a href="#!NewEvent"> Añadir Nuevo Evento</a></li>
        <li><a href="#!DisplayEvent"> Mostrar Evento</a></li>
    </ul>
    <div ng-view></div>
</div>
<div class="container"  ng-controller="AngularController">
    <h1>Suma</h1>
    {{value}}
</div>
<div class="container"  ng-controller="DemoController">
    Tutorial Name : <input type="text" ng-model="tutorialName"><br>
    <br>
    This tutorial is {{tutorialName | uppercase}}
	<br>
	This tutorialID is {{tutorialID | number:3}}
	<br>
	This tutorial Price is {{tutorialprice | currency}}
	<br>
	This tutorial is {{tutorial | json}}
	<br>
	This tutorial is {{tutorial2 | Demofilter}}

</div>

    <h1>Suma en Arrays</h1>

    <div ng-app="">
        Addition : {{6+9}}
    </div>
	
	<div ng-app="" ng-init="margin=2;profit=200">
        Total profit margin
        {{margin*profit}}
    </div>
	<div ng-app="" ng-init="firstName='Guru';lastName='99'">

        &nbsp;&nbsp;&nbsp;
        First Name : {{firstName}}<br>&nbsp;&nbsp;&nbsp;
        last Name : {{lastName}}
    </div>
	<div ng-app="" ng-init="car = {type:'Ford', model:'Explorer', color:'White'};">
    &nbsp;&nbsp;&nbsp;
    First Name : {{car.type}}<br>&nbsp;&nbsp;&nbsp;
    Last Name : {{car.model}}<br>&nbsp;&nbsp;&nbsp;
	Otro: {{car.color}}<br>&nbsp;&nbsp;&nbsp;
	</div>
	<div ng-app="" ng-init="marks=[1,15,19]">
		Student Marks<br>&nbsp;&nbsp;&nbsp;
		Subject1 : {{marks[0] }}<br>&nbsp;&nbsp;&nbsp;
		Subject2 : {{marks[1] }}<br>&nbsp;&nbsp;&nbsp;
		Subject3 : {{marks[2] }}<br>&nbsp;&nbsp;&nbsp;
	</div>

	<div ng-app="">
		Tutorial Name : {{ "Angular" + "JS"}}
	</div>
	<div ng-app="" ng-init="TutorialName2='Angular JS2'">
		Tutorial Name : {{ TutorialName2}}
	</div>
	 <div ng-app="" ng-init="quantity=1;price=5">

		People : <input type="number" ng-model="quantity">

		Registration Price : <input type="number" ng-model="price">

		Total : {{quantity * price}}

	</div>
	<div ng-app="" ng-init="chapters=['Controllers','Models','Filters']">
		<ul>
			<li ng-repeat="names in chapters">
				{{names}}
			</li>
		</ul>
	</div>
	<div ng-controller="DemoController2">
		<div ng-alex=""></div>
			<pane title="{{title}}">Angular JS</pane>
		<div ng-guru=""></div>
		<outer></outer>
		<div ng-alex2="">Click Me</div>
	</div>
	
	<button ng-click="count = count + 1" ng-init="count=0">
		Increment
	</button>

	<div>The Current Count is {{count}}</div>
	
	 <input type="button" value="Show Angular" ng-click="ShowHide()"/>

    <br><br><div ng-show = "IsVisible">Angular</div-->
</body>
</html>