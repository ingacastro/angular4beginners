<?php
session_start();
//https://www.webslesson.info/2018/05/angularjs-php-mysql-crud.html
?>
<!DOCTYPE html>
<html>
<body ng-app="sampleApp" >
<?php
$dir="../";
include $dir.'lib/header.php';
if(isset($_SESSION['admin']) && $_SESSION['admin']!=0){
?>
	<div ng-controller="crudController">
		<div class="table-responsive" style="overflow-x: unset;">
			<table datatable="ng" dt-options="vm.dtOptions" class="table table-bordered table-striped">
				 <thead>
				  <tr>
				   <th>Product Name</th>
				   <th>Description</th>
				   <th></th>
				   <th></th>
				  </tr>
				 </thead>
				<tbody>
					<tr ng-repeat="pro in proData track by pro.id">
					   <td>{{pro.product_name}}</td>
					   <td>{{pro.description}}</td>
					   <td><button type="button" ng-click="fetchSingleData(pro.id)" class="btn btn-warning btn-xs">Edit</button></td>
					   <td><button type="button" ng-click="deleteData(pro.id)" class="btn btn-danger btn-xs">Delete</button></td>
					</tr>
				</tbody>
			</table>
		</div>
	 
		<div class="alert alert-success alert-dismissible" ng-show="success" >
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			{{successMessage}}
		</div>
	   
		<div class="modal fade" tabindex="-1" role="dialog" id="crudmodal">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<form method="post" ng-submit="submitForm()">
						<div class="modal-header">
							<h4 class="modal-title">{{modalTitle}}</h4>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>
						<div class="modal-body">
							<div class="alert alert-danger alert-dismissible" ng-show="error" >
								<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								{{errorMessage}}
							</div>
							<div class="form-group">
								<label>Enter Product Name</label>
								<input type="text" name="product_name" ng-model="product_name" class="form-control" />
							</div>
							<div class="form-group">
								<label>Enter Description</label>
								<input type="text" name="description" ng-model="description" class="form-control" />
							</div>
						</div>
						<div class="modal-footer">
							<input type="hidden" name="hidden_id" value="{{hidden_id}}" />
							<input type="submit" name="submit" id="submit" class="btn btn-info" value="{{submit_button}}" />
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	   
		<div align="right">
			<button type="button" name="add_button" ng-click="addData()" class="btn btn-success">Add</button>
		</div>
	</div>
<?php
}
if(isset($_SESSION['admin']) && $_SESSION['admin']==0){
	echo "<script>
		id_user =".$_SESSION['id'].";
		pay = 1;
	</script>";
?>
	<div ng-controller="productController">
		<div class="table-responsive" style="overflow-x: unset;">
			<table datatable="ng" dt-options="vm.dtOptions" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>Invoke</th>
						<th>Amount</th>
						<th>Invoke Date</th>
						<th>Payment</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<tr ng-repeat="inv in proInvoke">
						<td>{{inv.invoke_number}}</td>
						<td>{{inv.amount}}</td>
						<td>{{inv.invoke_date}}<br/><button type="button" ng-click="fetchSingleInvoke(inv.id)" class="btn btn-warning btn-xs">Details</button></td>
						<td>{{inv.payment_method}}</td>
						<td>
							<div ng-if="inv.process_date">
							{{inv.process_date}} Process
							</div>
							<br/>
							<div ng-if="inv.delivered_date">
							{{inv.delivered_date}} Delivered
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
<?php
}
?>
</body>
</html>