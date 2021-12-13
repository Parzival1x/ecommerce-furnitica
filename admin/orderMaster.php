<?php
require('top.inc.php');

if(isset($_GET['type']) && $_GET['type']!=''){
	$type=get_safe_value($con,$_GET['type']);
	if($type=='status'){
		$operation=get_safe_value($con,$_GET['operation']);
		$id=get_safe_value($con,$_GET['id']);
		if($operation=='active'){
			$status='0';
		}else{
			$status='1';
		}
		$update_status_sql="update product set status='$status' where id='$id'";
		mysqli_query($con,$update_status_sql);
	}
}

$sql = "select * from orders";
$sql1 = "select * from order_detail";

$res1=mysqli_query($con,$sql1);
$res=mysqli_query($con,$sql);
?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title float-left">Orders </h4>
				   <!-- <a class="btn btn-primary float-right" href="manage_product.php" role="button">Add Product</a> -->
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table ">
						 <thead>
							<tr>
							   <th class="serial">#</th>
							   <th>ID</th>
                               <th>orderID</th>
                               <th>ProductID</th>
                               <th>Quantity</th>
							   <th>UserID</th>
							   <th>FullName</th>
							   <th>Email</th>
							   <th>Address</th>
							   <th>Country</th>
							   <th>State</th>
							   <th>ZipCode</th>
                               <th></th>
							</tr>
						 </thead>
						 <tbody>
							<?php 
							$i=1;
							while($row=mysqli_fetch_assoc($res)){
								while($row1=mysqli_fetch_assoc($res1)){?>
							<tr>
							   <td class="serial"><?php echo $i?></td>
							   <td><?php echo $row['id']?></td>
							   <td><?php echo $row1['order_id']?></td>
							   <td><?php echo $row1['product_id']?></td>
							   <td><?php echo $row1['quantity']?></td>
							   <td><?php echo $row['userid']?></td>
							   <td><?php echo $row['fullname']?></td>
                               <td><?php echo $row['email']?></td>
                               <td><?php echo $row['address']?></td>
                               <td><?php echo $row['country']?></td>
                               <td><?php echo $row['state']?></td>
                               <td><?php echo $row['zip']?></td>
						
							</tr>
							<?php $i++;}} ?>
						 </tbody>
					  </table>
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	</div>
</div>
<?php
require('footer.inc.php');
?>