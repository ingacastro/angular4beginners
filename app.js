var app = angular.module('sampleApp',['datatables', 'ngCookies']);

app.controller('login_register_controller', function($scope, $http){
	$scope.closeMsg = function(){
		$scope.alertMsg = false;
	};

	$scope.login_form = true;
	$scope.register_form = true;

	$scope.showRegister = function(){
		$scope.login_form = false;
		$scope.register_form = true;
		$scope.alertMsg = false;
	};

	$scope.showLogin = function(){
		$scope.register_form = false;
		$scope.login_form = true;
		$scope.alertMsg = false;
	};

	$scope.submitRegister = function(){
		$http({
			method:"POST",
			url:'config/register.php',
			data:$scope.registerData
	   
		}).then(function(data){
			$scope.alertMsg = true;

			if(data.data.error != ''){
				$scope.alertClass = 'alert-danger';
				$scope.alertMessage = data.error;
			}else{
				$scope.alertClass = 'alert-success';
				$scope.alertMessage = data.message;
				$scope.registerData = {};
			}
			//$scope.register_form = false;
			//location.reload();
			angular.element('#registrarse').modal('hide');
	    });
	};

	$scope.submitLogin = function(){
		$http({
		   method:"POST",
		   url:$scope.loginData.dir+'config/login.php',
		   data:$scope.loginData
		}).then(function(data){
			if(data.data.error != ""){
				$scope.alertMsg = true;
				$scope.alertClass = 'alert-danger';
				$scope.alertMessage = data.error;
			}else{
				location.reload();
			}
		});
	};
});

app.controller('crudController', function($scope, $http){
	$scope.fetchData = function(){
		$http.get('../config/fetch_data.php').then(function(data){
			$scope.proData = data.data;
		});
	};
	
	$scope.fetchData($scope, $http);
	
	$scope.success = false;
	$scope.error = false;
	
	$scope.openModal = function(){
		var modal_popup = angular.element('#crudmodal');
		modal_popup.modal('show');
	};
	
	$scope.closeModal = function(){
		var modal_popup = angular.element('#crudmodal');
		modal_popup.modal('hide');
	};
		
   $scope.addData = function(){
	  $scope.modalTitle = 'Add Product(s)';
	  $scope.submit_button = 'Insert';
	  $scope.openModal();
	  $scope.product_name = "";
	  $scope.description = "";
	  $scope.imagen = "";
	  $scope.price = "";
	};
	
	$scope.submitForm = function(){
		$http({
			method:"POST",
			url:"../config/insert.php",
			data:{
				'product_name':$scope.product_name,
				'description':$scope.description,
				'action':$scope.submit_button,
				'id':$scope.hidden_id
				}
		}).then(function(data){
			console.log(data);
			//if(data.error != ''){
			if(data.status != 200){
				$scope.success = false;
				$scope.error = true;
				$scope.errorMessage = data.data.error;
			}else{
				$scope.success = true;
				$scope.error = false;
				$scope.successMessage = data.data.message;
				$scope.form_data = {};
				$scope.closeModal();
				$scope.fetchData();
			}
		});
	};
	
	$scope.fetchSingleData = function(id){
		$http({
			method:"POST",
			url:"../config/insert.php",
			data:{'id':id, 'action':'fetch_single_data'}
		}).then(function(data){
			$scope.product_name = data.data.product_name;
			$scope.description = data.data.description;
			$scope.hidden_id = id;
			$scope.modalTitle = 'Edit Data';
			$scope.submit_button = 'Edit';
			$scope.openModal();
		});
	};
		
	$scope.deleteData = function(id){
		if(confirm("Are you sure you want to remove it?")){
			$http({
				method:"POST",
				url:"../config/insert.php",
				data:{'id':id, 'action':'Delete'}
			}).then(function(data){
				$scope.success = true;
				$scope.error = false;
				$scope.successMessage = data.message;
				$scope.fetchData();
			});
		}
	};
});

app.controller('indexController', function($scope, $http){
	$scope.checkData = function(){
		$http.get('../config/checkout.php').then(function(response){
			console.log(response);
			$scope.chkData = response.data;
		});
	};
	$scope.checkData($scope, $http);
	
	$scope.processData = function(id_invoke){
		if(confirm("Are you sure you want to process it?")){
			$http({
				method:"POST",
				url:"../config/process.php",
				data:{
					'id_invoke': id_invoke,
					'action':'Process'
					}
			}).then(function(data){
				$scope.checkData();
			});
		}
	};
	
	$scope.deliveredData = function(id_invoke){
		if(confirm("Are you sure you want to process it?")){
			$http({
				method:"POST",
				url:"../config/process.php",
				data:{
					'id_invoke': id_invoke,
					'action':'Delivered'
					}
			}).then(function(data){
				$scope.checkData();
			});
		}
	};
});

app.controller('StoreController', ['$scope','$cookies', '$http', function($scope, $cookies, $http){
	$scope.fetchData = function(){
		$http.get('config/fetch_data.php').then(function(data){
			$scope.proData = data.data;
		});
	};
	$scope.fetchData($scope, $http);
	
	
	//$scope.products = productsData;
	$scope.cart = [];
	$scope.total = parseFloat(0);
	$scope.total2 = parseFloat(0);
	$scope.totalC = parseFloat(0);
	/*
	if ($cookieStore.get('cart') !== null) {
		$scope.cart =  $cookieStore.get('cart');
	}
	*/

	if(!angular.isUndefined($cookies.get('total'))){
		$scope.total = parseFloat($cookies.get('total'));
	}
	
	//Sepetimiz daha önceden tanımlıysa onu çekelim
	if (!angular.isUndefined($cookies.get('cart'))) {
		$scope.cart = $cookies.getObject('cart');
	}
	
	$scope.addItemToCart = function(product){
		product.idU = id;
		
		if ($scope.cart.length === 0){
			product.count = 1;
			$scope.totalC  += 1; 
			$scope.cart.push(product);
		}else{
			var repeat = false;
			for(var i = 0; i< $scope.cart.length; i++){
				if($scope.cart[i].id === product.id){
					repeat = true;
					$scope.cart[i].count +=1;
					$scope.totalC  += 1;
				}
			}
			if (!repeat) {
				product.count = 1;
				$scope.totalC  += 1;
				$scope.cart.push(product);	
			}
		}
		var expireDate = new Date();
		
		expireDate.setDate(expireDate.getDate() + 1);
		
		$cookies.putObject('cart', $scope.cart,  {'expires': expireDate});
		$scope.cart = $cookies.getObject('cart');
		 
		$scope.total += parseFloat(product.price);
		$scope.total2 += parseFloat(product.price);
		
		$cookies.put('total', $scope.total,  {'expires': expireDate});
	};

	$scope.removeItemCart = function(product){
		if(product.count > 1){
			product.count -= 1;
			
		    var expireDate = new Date();
			expireDate.setDate(expireDate.getDate() + 1);
		    $cookies.putObject('cart', $scope.cart, {'expires': expireDate});
 			$scope.cart = $cookies.getObject('cart');
		}else if(product.count === 1){
		    var index = $scope.cart.indexOf(product);
 			$scope.cart.splice(index, 1);
 			expireDate = new Date();
			expireDate.setDate(expireDate.getDate() + 1);
 			$cookies.putObject('cart', $scope.cart, {'expires': expireDate});
 			$scope.cart = $cookies.getObject('cart');
		}
		$scope.totalC  -= 1;
		$scope.total -= parseFloat(product.price);
		$scope.total2 -= parseFloat(product.price);
		$cookies.put('total', $scope.total,  {'expires': expireDate});
	};
	
	$scope.BuyCart = function(cart){
		if(cart.length !=0){
			var tot = 0;
			for(var i = 0; i< $scope.cart.length; i++){
				 tot += parseFloat(cart[i].count*cart[i].price);
			}
			
			$http({
				method:"POST",
				url:"config/insert.php",
				data:{
					'id': id,
					'tot': tot,
					'action': 'Invoke',
				}
			}).then(function(data){
				$scope.first_name = data.data.first_name;
				$scope.last_name = data.data.last_name;
				$scope.location = data.data.location;
				$scope.tot = tot;
				$scope.invokeTitle = 'Invoke CheapMarket';
				$scope.invoke_button = 'Accept';
				$scope.subm = 'submitAccept(cart, tot)';
				$scope.cart = cart;
				$scope.openInvoke('#invoke');
				
			});
		}
	};
	
	$scope.submitAccept = function(cart, tot){
		if($scope.invoke_button=='Accept'){
			$http({
				method:"POST",
				url:"config/insert.php",
				data:{
					'idUser': $scope.cart[0].idU,
					'tot': tot,
					'cart': $scope.cart,
					'action': 'InvokeAccepted',
				}
			}).then(function(data){
				$scope.tot = tot;
				$scope.invokeTitle = 'Payment CheapMarket';
				$scope.invoke_button = 'Accept Pay';
				$scope.sub = 'submitAcceptPay(cart)';
				$scope.cart = cart;
				$scope.invoke_number = data.data.invokenumber;
				$scope.showAccepted = true;
			});
		}else if($scope.invoke_button=='Accept Pay'){
			$http({
				method:"POST",
				url:"config/insert.php",
				data:{
					'idUser': $scope.cart[0].idU,
					'invoke_number': $scope.invoke_number,
					'payment': $scope.payment,
					'action': 'PayAccepted',
				}
			}).then(function(data){
				$scope.total = 0;
				$scope.total2 = 0;
				$scope.totalC = 0;
				expireDate = new Date();
				expireDate.setDate(expireDate.getDate() + 1);
				$cookies.put('total', $scope.total,  {'expires': expireDate});
				$scope.cart = [];
				$cookies.putObject('cart', $scope.cart, {'expires': expireDate});
				$scope.closeInvoke('#invoke');
			});
		}
	};
	
	$scope.submitAcceptPay = function(cart){
		
		alert('fsdf');
		/*
		*/
	};
	
	$scope.openInvoke = function(invoke){
		var modal_popup = angular.element(invoke);
		modal_popup.modal('show');
	};
	
	$scope.closeInvoke = function(invoke){
		var modal_popup = angular.element(invoke);
		modal_popup.modal('hide');
	};
	
		
	$scope.showCart = function(cart){
		for(var i=0; i<cart.length; i++){
			if(cart[i].idU==id){
				return true;
			}else{
				return false;
			}
		}
		
	};
}]);

	/*var productsData = [{
		id: 1,
		name: 'product1',
		price: 100.0,
		image: '../img/cocosette.jpg'
	},{
		id: 2,
		name: 'product2',
		price: 14.5,
		image: '../img/susy.jpg'
	},{
		id: 3,
		name: 'product3',
		price: 100.43,
		image: '../img/toddy.jpg'
	},{
		id: 4,
		name: 'product4',
		price: 99.9,
		image: '../img/pirulin.jpg'
	}];
	*/
