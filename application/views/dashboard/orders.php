<?php
//echo "<pre>";
//print_r($order);
?>
				<div class="box span8">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-file"></i> Orders</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Order ID</th>
								  <th>Type</th>
								  <th>Total</th>							  
								  <th>Status</th>
								  <th>Action</th>								  
							  </tr>
						  </thead>   
						  <tbody>
						  <?php 
							foreach($orders as $order){
							?>
							<tr>
								<td><?php echo $order->id;?></td>
								<td class="center"><?php echo $order->order_type;?></td>
								<td class="center"><?php echo $order->total;?> BDT</td>
								<td class="center"><?php echo $order->status;?></td>
								<td class="center">
									<span class="label label-success">Active</span>
									<span class="label label-success">Load</span>
								</td>
								
							</tr>
							<?php
							}
							?>
						  
							
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
