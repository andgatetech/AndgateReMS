<div class="box span8">

					<div class="box-header well" data-original-title>
						<h2>Order Reciept</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<div class="span6 center">
								<div class="well">
								<div class="span12">Order Number: <?php echo $orderid;?></div>
								<div class="span12">Order Type: <?php echo $ordertype;?></div>
								<table class="table table-condensed table-striped">
							  <thead>
								  <tr>
									  <th>Item</th>
									  <th>Type</th>
									  <th>Unit Price</th>
									  <th>Quantity</th>
									  <th>Total Price</th>
									                                          
								  </tr>
							  </thead>   
							  <tbody>
							  <?php
							  $i = 1;
								foreach ($this->cart->contents() as $items){
								?>
								
								<tr>
									<td><?php echo $items['name'];?></td>
									<td><?php echo $items['type'];?></td>
									<td class="center"><?php echo $items['price'];?></td>
									<td class="center"><?php echo $items['qty'];?></td>
									<td class="center"><?php echo $this->cart->format_number($items['subtotal']); ?> BDT</td>
									                                      
								</tr>
								<?php
								$i++;
								}
							  ?>
		
								<!-- All Total -->
								<tr>
									<td class="center" colspan='3'>Total=</td>
									<td class="center" colspan='2'><?php echo $this->cart->format_number($this->cart->total()); ?> BDT</td>
									                                      
								</tr> 
								
							  </tbody>
						 </table>
						 <div class="span12">This is auto generate order reciept</div>
								</div>
							</div>
						
						<div class="span4 center">
						  <a href="#" class="btn btn-small btn-success">Print Order</a>&nbsp;
						  <a href="<?php echo base_url();?>pos/index" class="btn btn-small btn-warning">Finish</a>
						</div>  
						
						
					</div>
</div><!--/span-->