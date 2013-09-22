<div class="box span8">

					<div class="box-header well" data-original-title>
						<h2>Order Option</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
					
					<form method="POST" action="<?php echo base_url();?>pos/order_finalize">
					<input type="hidden" name="ordernum" value="<?php echo $orderid;?>">
						
						<div class="control-group">
								<label class="control-label" for="disabledInput">Order Number</label>
								<div class="controls">
								  <input class="input-xlarge disabled" id="disabledInput" name="orderid" type="text" placeholder="Disabled input here…" disabled="" value="<?php echo $orderid;?>">
								</div>
						</div>
						
						<div class="control-group">
								<label class="control-label" for="selectError">Select Order Type</label>
								<div class="controls">
								  <select id="selectOrderType" data-rel="chosen" name="orderType">
									<option value=''>Select Type</option>
									<option value='table'>Table</option>
									<option value='takeaway'>Takeaway</option>
									<option value='other'>Other</option>																	
								  </select>
								</div>
						</div>
						
						
						<div class="control-group">
								<label class="control-label" for="selectError">Select Free Table</label>
								<div class="controls">
								  <select id="selectTable" data-rel="chosen" name="table">
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