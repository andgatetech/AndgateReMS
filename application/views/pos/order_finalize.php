<div class="box span8">

					<div class="box-header well" data-original-title>
						<h2>Order</h2>
						<div class="box-icon">
							
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<div class="span12 center" id="DivIdToPrint">
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
									<td class="center" colspan='4'>Sub Total =</td>
									<td class="center" ><?php echo $this->cart->format_number($this->cart->total()); ?> BDT</td>
									                                      
								</tr> 
								
								<!-- Vat/Tax -->
								<tr>
									<td class="center" colspan='4'>Vat (<?php echo $vatparcentage."% ".$vatType;?>)  =</td>
									<td class="center" ><?php echo $vat; ?> BDT</td>
									                                      
								</tr> 
								
								<!-- All Total including vat/tas -->
								
								<tr>
									<td class="center" colspan='4'>Total =</td>
									<td class="center" ><?php echo $totalIncVat; ?> BDT</td>
									                                      
								</tr>
								
								
							  </tbody>
						 </table>
						 
								</div>
								<a href="<?php echo base_url();?>pos/cart_destroy" class="btn btn-small btn-warning">Pending Order</a>
							</div>
						
						  
						
						
					</div>
</div><!--/span-->



<div class="box span4">

					<div class="box-header well" data-original-title>
						<h2>Cashout</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						
						
						<div class="span6 center">
						
						<form method="POST" action="<?php echo base_url();?>pos/order_finished/<?php echo $orderid;?>">
					<input type="hidden" name="ordernum" value="<?php echo $orderid;?>">
						<div class="control-group">
								<label class="control-label" for="selectError">Payment Type</label>
								<div class="controls">
								  <select id="selectOrderType" data-rel="chosen" name="paymentType">
									<option value=''>Select Type</option>
									<option value='table'>Cash</option>
									<option value='takeaway'>Card</option>
									<option value='other'>Other</option>																	
								  </select>
								</div>
						</div>
						
						<div class="control-group">
								<label class="control-label" for="selectError">Total</label>
								<div class="controls">
								<input class="input-small disabled" id="disabledInput" name="total" type="text" placeholder="Disabled input here…" disabled="" value="<?php echo $totalIncVat;?>"> BDT
								</div>
						</div>
						<div class="control-group">
								<label class="control-label" for="selectError">Provide</label>
								<div class="controls">
								<input type="text" name="provide" value="" id="focusedInput" class="input-small focused"> BDT
								</div>
						</div>
						
						<div class="control-group">
								<input class="btn btn-small btn-success" type="submit" value="Confirm Payment">
						</div>
						   
					</form>
						
						  
					</div>  
						
						
					</div>
</div><!--/span-->