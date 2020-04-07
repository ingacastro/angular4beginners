<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Bnjmn Delivery</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="lib/css/bootstrap.css"/>
	<link rel="stylesheet" href="lib/css/bootstrap.min.css"/>
	<script src="lib/js/angular.js"></script>
	<script src="lib/js/angular-route.js"></script>
	<script src="lib/js/jquery-3.4.1.js"></script>
	<script src="lib/js/bootstrap.js"></script>
	<script src="lib/js/bootstrap.min.js"></script>
	<script src="app.js"></script>
</head>
<?php
include '../lib/header.php';
?>
<body ng-app="sampleApp">
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">BENJAMÍN CART</h1>
     </div>
</section>

<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">Product</th>
                            <th scope="col">Available</th>
                            <th scope="col" class="text-center">Quantity</th>
                            <th scope="col" class="text-right">Price</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="img/img1.jpg" height="50px" width="50px" /> </td>
                            <td>Product Name Chain</td>
                            <td>In stock</td>
                            <td><input class="form-control" type="text" value="1" /></td>
                            <td class="text-right">$ 12,49 </td>
                            <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                        </tr>
                        <tr>
                            <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                            <td>Product Name Toto</td>
                            <td>In stock</td>
                            <td><input class="form-control" type="text" value="1" /></td>
                            <td class="text-right">33,90 €</td>
                            <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                        </tr>
                        <tr>
                            <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                            <td>Product Name Titi</td>
                            <td>In stock</td>
                            <td><input class="form-control" type="text" value="1" /></td>
                            <td class="text-right">70,00 €</td>
                            <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Sub-Total</td>
                            <td class="text-right">255,90 €</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Shipping</td>
                            <td class="text-right">6,90 €</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><strong>Total</strong></td>
                            <td class="text-right"><strong>346,90 €</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                    <button class="btn btn-block btn-light">Continue Shopping</button>
                </div>
                <div class="col-sm-12 col-md-6 text-right">
                    <button class="btn btn-lg btn-block btn-success text-uppercase">Checkout</button>
                </div>
            </div>
        </div>
    </div>
</div>
<h1> Alejandro Global Event</h1>

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
</body>
</html>