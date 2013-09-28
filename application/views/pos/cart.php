<div class="box span8">

					<div class="box-header well" data-original-title>
						<h2>Order</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
				
					<form method="POST" action="<?php echo base_url();?>pos/cart_update_item">
						<table class="table table-condensed table-striped">
							  <thead>
								  <tr>
									  <th>Item</th>
									  <th>Type</th>
									  <th>Unit Price</th>
									  <th>Quantity</th>
									  <th>Total Price</th>
									  <th>Action</th>
									                                          
								  </tr>
							  </thead>   
							  <tbody>
							  <?php
							  $i = 1;
								foreach ($this->cart->contents() as $items){
								?>
								<?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>
								<tr>
									<td><?php echo $items['name'];?></td>
									<td><?php echo $items['type'];?></td>
									<td class="center"><?php echo $items['price'];?></td>
									<td class="center"><?php echo form_input(array('name' => $i.'[qty]', 'value' => $items['qty'], 'class'=>'input-mini')); ?>
									
									</td>
									<td class="center"><?php echo $this->cart->format_number($items['subtotal']); ?> BDT</td>
									<td class="center">
										<a href="<?php echo base_url();?>pos/cart_delete_item/<?php echo $items['rowid'];?>" class="btn btn-danger">
											<i class="icon-trash icon-white"></i> 
											Delete
										</a>
									</td>
									                                      
								</tr>
								<?php
								$i++;
								}
							  ?>
		
								<!-- All Total -->
								<tr>
									
									
									<td class="center" colspan='4'>Total=</td>
									<td class="center" colspan='2'><?php echo $this->cart->format_number($this->cart->total()); ?> BDT</td>
									                                      
								</tr> 
								
							  </tbody>
						 </table>
						 
						<div class="pagination pagination-centered">
						 <input class="btn btn-mini btn-primary" type="submit" value="Update Cart">
						  <a href="<?php echo base_url();?>pos/order_confirm" class="btn btn-small btn-success">Confirm Order</a>&nbsp;
						  <a href="<?php echo base_url();?>pos/cart_destroy" class="btn btn-small btn-warning">Cancle Order</a>
						</div>  
						</form>	
   
					</div>
				</div><!--/span-->