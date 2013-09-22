<div class="box span8">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-file"></i> Items Details</h2>
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
								  <th>Tittle</th>
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
									<tr>
										<td><?php echo $item->title; ?></td>
										<td class="center"><?php echo $item->price; ?></td>
										<td class="center"><?php echo $item->type; ?></td>
										<td class="center">
											<a href="<?php echo base_url();?>/menuitem/edit/<?php echo $item->id; ?>"><span class="label label-success">Edit</span></a>&nbsp<a href="<?php echo base_url();?>/menuitem/delete/<?php echo $item->id; ?>"><span class="label label-important">Delete</span></a>
										</td>
										
									</tr>
							<?php
								}
							}
							 ?>
					
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			