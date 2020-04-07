var app = angular.module('sampleApp',['datatables']);

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
	   url:'config/login.php',
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
			if(data.data.error != ''){
				$scope.success = false;
				$scope.error = true;
				$scope.errorMessage = data.error;
			}else{
				$scope.success = true;
				$scope.error = false;
				$scope.successMessage = data.message;
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
		   $scope.product_name = data.product_name;
		   $scope.description = data.description;
		   $scope.hidden_id = id;
		   $scope.modalTitle = 'Edit Data';
		   $scope.submit_button = 'Edit';
		   $scope.openModal();
		});
	};

});