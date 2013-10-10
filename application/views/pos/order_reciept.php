<div class="box span8">

					<div class="box-header well" data-original-title>
						<h2>Order Reciept</h2>
						<div class="box-icon">
							
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<div class="span12 center" id="DivIdToPrint">
								<div class="well">
								<div class="span12"><img src="<?php echo base_url();?>/asset/img/logo.png"></div>
								<div class="span12">Order Number: <?php echo $order->id;?></div>
								<div class="span12">Order Type: <?php echo $order->order_type;?></div>
								<table class="table table-condensed table-striped">
							  <thead>
								  <tr>
									  <th>Item</th>
									  <th>Type</th>
									  <th>Unit Price</th>
									  <th>Quantity</th>
									  <th>Total (Tk)</th>
									                                          
								  </tr>
							  </thead>   
							  <tbody>
							  <?php
							  
							  $i = 1;
								foreach ($orderitems as $orderitem){
								//print_r($orderitems->item_name);
								?>
								
								<tr>
									<td><?php echo $orderitem->item_name;?></td>
									<td><?php echo $orderitem->item_type;?></td>
									<td class="center"><?php echo $orderitem->item_price;?></td>
									<td class="center"><?php echo $orderitem->item_quantity;?></td>
									<td class="center"><?php echo $orderitem->total;?> </td>
									                                      
								</tr>
								<?php
								$i++;
								}
							  ?>
		
								<!-- All Total -->
								<tr>
									<td class="center" colspan='4'>Sub Total =</td>
									<td class="center" ><?php echo $order->subtotal; ?> </td>
									                                      
								</tr> 
								
								<!-- Vat/Tax -->
								<tr>
									<td class="center" colspan='4'>Vat (<?php echo $order->vatparcentage."% ".$order->vat_type;?>)  =</td>
									<td class="center" ><?php echo $order->vat_tax; ?> </td>
									                                      
								</tr> 
								
								<!-- All Total including vat/tas -->
								
								<tr>
									<td class="center" colspan='4'>Total =</td>
									<td class="center" ><?php echo $order->total; ?> </td>
									                                      
								</tr>
								<tr>
									<td class="center" colspan='4'>Discount (<?php echo $discount;?>%) =</td>
									<td class="center" ><?php echo $order->discount; ?> </td>
									                                      
								</tr>
								
								<tr>
									<td class="center" colspan='4'>Paid =</td>
									<td class="center" ><?php echo $order->paid; ?> </td>
									                                      
								</tr>
								
								<tr>
									<td class="center" colspan='4'>Provide =</td>
									<td class="center" ><?php echo $provide; ?> </td>
									                                      
								</tr>
								
								<tr>
									<td class="center" colspan='4'>Return =</td>
									<td class="center" >
									<?php 
									
									echo $provide-$order->paid; 
									?> 
									</td>
									                                      
								</tr>
								
								
							  </tbody>
						 </table>
						 <div class="span12">This is auto generated order reciept.</div>
						 <div class="span12">Thank you to purchase with us.</div>
								</div>
							</div>
						
						<div class="span6 center">
						  <a href="#" class="btn btn-small btn-success" id="printReciept">Print Order</a>&nbsp;
						  <a href="<?php echo base_url();?>pos/index" class="btn btn-small btn-success" id="tst">Finish</a>
						</div>  
						
						
					</div>
</div><!--/span-->


