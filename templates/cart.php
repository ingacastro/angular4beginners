<?php
session_start();
?>
<html>
<?php
$dir="../";
include $dir.'lib/header.php';
?>
<body ng-app="sampleApp" >
	<div class="table-responsive" style="overflow-x: unset;" ng-controller="indexController">
		<table datatable="ng" dt-options="vm.dtOptions" class="table table-bordered table-striped">
			 <thead>
			  <tr>
			   <th>Invoke</th>
			   <th>Payment</th>
			   <th>Name</th>
			   <th>Address</th>
			   <th>Process</th>
			   <th>Delivered</th>
			  </tr>
			 </thead>
			<tbody>
				<tr ng-repeat="chk in chkData">
					<td>{{chk.invoke_number}}</td>
					<td>{{chk.payment_method}}</td>
					<td>{{chk.first_name}}{{chk.last_name}}</td>
					<td>{{chk.location}}</td>
					<td ng-if="chk.process">
						<div data-ng-if="chk.process == '1'">
							In Process
						</div>
						<div data-ng-if="chk.process == '0'">
							<button type="button" ng-click="processData(chk.id_invoke)" class="btn btn-warning btn-xs">Process</button>
						</div>
					</td>
					<td ng-if="chk.delivered">
						<div data-ng-if="chk.delivered == '1'">
							Delivered
						</div>
						<div data-ng-if="chk.delivered == '0'">
							<button type="button" ng-click="deliveredData(chk.id_invoke)" class="btn btn-danger btn-xs">Delivered</button>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
 
	<!--div class="alert alert-success alert-dismissible" ng-show="success" >
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
	</div-->
<?php

?>
</body>
</html>