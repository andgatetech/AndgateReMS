<div class="box span8">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-file"></i> Tasks Details</h2>
						<div class="box-icon">
							
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Title</th>
								  <th>Description</th>
								  <th>Assignee</th>
                                  <th>Status</th>
								  <th>Action</th>							  
							  </tr>
						  </thead>   
						  <tbody>
						  <?php
						  if(isset($tasks)){
								foreach($tasks as $task){
									?>
									<tr>
										
										<td class="center"><?php echo $task->title; ?></td>
										<td class="center"><?php echo $task->desc; ?></td>
                                        <td class="center"><?php echo $task->assignee; ?></td>
                                        <td class="center"><?php echo $task->status; ?></td>
										<td class="center">
											<a href="<?php echo base_url();?>menutask/edit/<?php echo $task->id; ?>"><span class="label label-success">Edit</span></a>&nbsp<a href="<?php echo base_url();?>menutask/delete/<?php echo $task->id; ?>"><span class="label label-important">Delete</span></a>
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
			