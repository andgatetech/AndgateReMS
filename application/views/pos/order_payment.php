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
						<div class="span12 center" id="DivIdToPrint">
								<div class="well">
								<div class="span12">Order Number: <?php echo $order->id;?></div>
								<div class="span12">Order Type: <?php echo $order->order_type;?></div>
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
								foreach (orderitems as $item){
								?>
								
								<tr>
									<td><?php echo $item->item_name;?></td>
									<td><?php echo $item->item_type;?></td>
									<td class="center"><?php echo $item->item_price;?></td>
									<td class="center"><?php echo $item->item_quantity;?></td>
									<td class="center"><?php echo $item->total;?> BDT</td>
									                                      
								</tr>
								<?php
								$i++;
								}
							  ?>
		
								<!-- All Total -->
								<tr>
									<td class="center" colspan='4'>Sub Total =</td>
									<td class="center" ><?php echo $order->subtotal; ?> BDT</td>
									                                      
								</tr> 
								
								<!-- Vat/Tax -->
								<tr>
									<td class="center" colspan='4'>Vat (<?php echo $order->vatparcentage."% ".$order->vat_type;?>)  =</td>
									<td class="center" ><?php echo $order->vat_tax; ?> BDT</td>
									                                      
								</tr> 
								
								<!-- All Total including vat/tas -->
								
								<tr>
									<td class="center" colspan='4'>Total =</td>
									<td class="center" ><?php echo $order->total; ?> BDT</td>
									                                      
								</tr>
								
								
							  </tbody>
						 </table>
						 <div class="span12">This is auto generated order reciept.</div>
								</div>
							</div>
						
						<div class="span6 center">
						
						<form method="POST" action="<?php echo base_url();?>pos/order_finished/<?php echo $orderid;?>">
					<input type="hidden" name="ordernum" value="<?php echo $orderid;?>">
						<div class="control-group">
								<label class="control-label" for="selectError">Payment Type</label>
								<div class="controls">
								  <select id="selectOrderType" data-rel="chosen" name="orderType">
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
								<input class="input-small disabled" id="disabledInput" name="orderid" type="text" placeholder="Disabled input here…" disabled="" value="ORD-<?php echo $orderid;?>">
								</div>
						</div>
						<div class="control-group">
								<label class="control-label" for="selectError">Provide</label>
								<div class="controls">
								<input type="text" name="vatparcentage" value="15" id="focusedInput" class="input-small focused">
								</div>
						</div>
						
						<div class="control-group">
								<input class="btn btn-small btn-success" type="submit" value="Finalise Order">
						</div>
						   
					</form>
						
						  <a href="#" class="btn btn-small btn-success" id="printReciept">Print Order</a>&nbsp;
						  <a href="<?php echo base_url();?>pos/order_finished/<?php echo $orderid;?>" class="btn btn-small btn-warning">Finish</a>
						</div>  
						
						
					</div>
</div><!--/span-->


