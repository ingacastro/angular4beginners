var app2 = angular.module('crudApp', ['datatables']);

app2.controller('crudController', function($scope, $http){
	
	$scope.fetchData = function(){
		console.log('asd');
		$http.get('config/fetch_data.php').success(function(data){
			$scope.namesData = data;
		});
	};
	
 
	$scope.openModal = function(){
		var modal_popup = angular.element('#crudmodal');
		modal_popup.modal('show');
	};

      $scope.success = false;
 $scope.error = false;

 $scope.closeModal = function(){
  var modal_popup = angular.element('#crudmodal');
  modal_popup.modal('hide');
 };
 
 
        $scope.addData = function(){
  $scope.modalTitle = 'Add Data';
  $scope.submit_button = 'Insert';
  $scope.openModal();
 };
 
  $scope.submitForm = function(){
  $http({
   method:"POST",
   url:"insert.php",
   data:{'first_name':$scope.first_name, 'last_name':$scope.last_name, 'action':$scope.submit_button, 'id':$scope.hidden_id}
  }).success(function(data){
   if(data.error != '')
   {
    $scope.success = false;
    $scope.error = true;
    $scope.errorMessage = data.error;
   }
   else
   {
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
   url:"insert.php",
   data:{'id':id, 'action':'fetch_single_data'}
  }).success(function(data){
   $scope.first_name = data.first_name;
   $scope.last_name = data.last_name;
   $scope.hidden_id = id;
   $scope.modalTitle = 'Edit Data';
   $scope.submit_button = 'Edit';
   $scope.openModal();
  });
 };
 
 
});