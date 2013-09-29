<div class="box span8">

					<div class="box-header well" data-original-title>
						<h2>Payment Option</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
					
					<form method="POST" action="<?php echo base_url();?>pos/order_finished/<?php echo $orderid;?>">
					<input type="hidden" name="ordernum" value="<?php echo $orderid;?>">
						
						<div class="control-group">
								<label class="control-label" for="disabledInput">Order Number</label>
								<div class="controls">
								  <input class="input-xlarge disabled" id="disabledInput" name="orderid" type="text" placeholder="Disabled input here…" disabled="" value="ORD-<?php echo $orderid;?>">
								</div>
						</div>
						
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
   
					</div>
				</div><!--/span-->
				
				