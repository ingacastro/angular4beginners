<?php
session_start();
?>
<html>
<?php
$dir="../";
include $dir.'lib/header.php';
?>
<body ng-app="sampleApp" >
<?php
if(isset($_SESSION['admin']) && $_SESSION['admin']!=0){
?>
	<div class="table-responsive" style="overflow-x: unset;" ng-controller="indexController">
		<table datatable="ng" dt-options="vm.dtOptions" class="table table-bordered table-striped">
			 <thead>
			  <tr>
			   <th>Invoke</th>
			   <th>Payment</th>
			   <th>Amount</th>
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
					<td>{{chk.amount}}</td>
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
}

if(isset($_SESSION['admin']) && $_SESSION['admin']==0){
	echo "<script>
		id_user =".$_SESSION['id'].";
		pay=0;
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
					</tr>
				</thead>
				<tbody>
					<tr ng-repeat="inv in proInvoke">
					   <td>{{inv.invoke_number}}</td>
					   <td>{{inv.amount}}</td>
					   <td>{{inv.invoke_date}}<br/><button type="button" ng-click="fetchSingleInvoke(inv.id)" class="btn btn-warning btn-xs">Details</button></td>
					   <td>{{inv.payment_method}}<br/><button type="button" ng-click="deleteInvoke(inv.id)" class="btn btn-danger btn-xs">Delete</button></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
<?php
}
?>

<!--modal invoke -->
<div id="invoke" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="panel panel-default" >
				<div class="panel-heading modal-header">
					<h3 class="panel-title modal-title">{{invokeTitle}}</h3>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="panel-body modal-body">
					<form method="post" ng-submit="submitAccept(cart, tot)">
						<div class="table-responsive" style="overflow-x: unset;">
							<table class="table table-bordered table-striped">
								<thead>
									<tr>
									   <th>Quantity</th>
									   <th>Product Name</th>
									   <th>Price</th>
									   <th>SubTotal</th>
									</tr>
								</thead>
								<tbody>
									<tr ng-repeat="art in cart">
									   <td>{{art.count}}</td>
									   <td>{{art.product_name}}</td>
									   <td>{{art.price}}</td>
									   <td>{{art.count*art.price | currency}}</td>
									</tr>
									<tr colspan="4">
										<td >Total :{{tot | currency}}</td>
									</tr>
								</tbody>
							</table>
						</div>

						<div class="form-group">
						   <label>Full Name</label>
						   <input type="text" name="first_name" ng-model="first_name" class="form-control" />
						   <input type="text" name="last_name" ng-model="last_name" class="form-control" />
						</div>
						<div class="form-group">
						   <label>Address</label>
						   <input type="text" name="location" ng-model="location" class="form-control" />
						</div>
						<div class="form-group" ng-show="showAccepted">
						   <label>Accepted!{{invoke_number}}</label>
						   <br/>
						   <label>Payment Method</label>
						   <input type="text" name="payment" ng-model="payment" class="form-control" />
						</div>
						<div class="form-group" align="center">
						   <input type="submit" name="accept" class="btn btn-primary" value="{{invoke_button}}" />
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

</body>
</html>