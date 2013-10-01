<?php
// load order
if(isset($order)){
	$orderid = $order->id;
	$ordertype = $order->order_type;
	$vattype = $order->vat_type;
	$vat = $order->vatparcentage;
}else{
	$ordertype = null;
	$orderid = null;
	$vattype = null;
	$vat='15';
	
}
?>
<div class="box span8">

					<div class="box-header well" data-original-title>
						<h2>Order Option</h2>
						<div class="box-icon">
							
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
					
					<form method="POST" action="<?php echo base_url();?>pos/order_finalize">
					<input type="hidden" name="ordernum" value="<?php echo $ordernum;?>">
					<input type="hidden" name="orderid" value="<?php echo $orderid;?>">
					
						<div class="control-group">
								<label class="control-label" for="selectError">Select Order Type</label>
								<div class="controls">
								  <select id="selectOrderType" data-rel="chosen" name="orderType">
									<option value='' <?php if($ordertype == '') echo "selected='selected'"; ?>>Select Type</option>
									<option value='table' <?php if($ordertype == 'table') echo "selected='selected'"; ?> >Table</option>
									<option value='takeaway' <?php if($ordertype == 'takeaway') echo "selected='selected'"; ?>>Takeaway</option>
									<option value='other' <?php if($ordertype == 'other') echo "selected='selected'"; ?>>Other</option>																	
								  </select>
								</div>
						</div>
						
						<div class="control-group">
								<label class="control-label" for="selectError">VAT</label>
								
								<div class="controls">
								<input type="text" name="vatparcentage" value="<?php echo $vat;?>" id="focusedInput" class="input-small focused">%
								  <select id="selectVatType" name="vatType">
									<option value="inclusive" <?php if($vattype == 'inclusive') echo "selected='selected'"; ?>>Inclusive</option>
									<option value="exclusive" <?php if($vattype == 'exclusive') echo "selected='selected'"; ?>>Exclusive</option>
								  </select>
								</div>
						</div>
						
						
						<div class="control-group">
								<label class="control-label" for="selectError">Select Free Table</label>
								<div class="controls">
								  <select id="selectTable" data-rel="chosen" name="table">
								  <option value=''>Select Table</option>
									<?php
									if(isset($tables)){
										foreach($tables as $table){
											echo "<option value='".$table->number."'>".$table->code."-".$table->number." :: ".$table->status."</option>";
										}
									}
									?>
									
								  </select>
								</div>
						</div>
						
						<div class="control-group">
								<input class="btn btn-small btn-success" type="submit" value="Finalise Order">
						</div>
						   
					</form>	
   
					</div>
				</div><!--/span-->