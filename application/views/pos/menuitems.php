<div class="box span4">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i> Items</h2>
						<div class="box-icon">
							
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<div class="searchbox-ajax">
							<div class="control-group">
								<label class="control-label" for="selectError">Select Category</label>
								<div class="controls">
								  <select id="selectError" data-rel="chosen">
									<?php
									if(isset($item_categories)){
										foreach($item_categories as $category){
										?>
										<option><?php echo $category->name; ?></option>
										<?php
										
										}
									}
									?>
									
								  </select>
								</div>
							  </div>
						</div>
						<table class="table table-striped table-bordered bootstrap-datatable">
						<thead>
							  <tr>
								  <th>Title</th>
								  <th>Price</th>
								   <th>Type</th>
								  <th>Action</th>
								  							  
							  </tr>
						  </thead> 	
						  <tbody>
						  <?php
							if(isset($items)){
							
							foreach($items as $item){
						  ?>
						  <form name="product-<?php echo $item->id;?>" method="POST" action="<?php echo base_url();?>/pos/cart_add_item">
						  <input type="hidden" name="itemid" value="<?php echo $item->id;?>">
							<tr>
								<td><?php echo $item->title; ?></td>
								<td class="center"><?php echo $item->price; ?></td>
								<td class="center"><?php echo $item->type; ?></td>
								<td class="center">	
<input class="btn btn-mini btn-success" type="submit" value="Add">								
									
								</td>
							</tr>
							</form>
							<?php 
								}
							}
							?>
		
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->