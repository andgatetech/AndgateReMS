<div class="box span4">
<?php
if(isset($msg)){
	?>
	<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<?php echo $msg; ?>
	</div>
	<?php
}
?>
					<div class="box-header well" data-original-title>
						<h2><i class="icon-eye-open"></i> Insert Task</h2>
						<div class="box-icon">
						
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method='POST' action="<?php echo base_url(); ?>menutask/save">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Title of task</label>
								<div class="controls">
								  <input class="input-medium focused" id="focusedInput" name='title' type="text" value="">
								</div>
							  </div>
							  
							  <div class="control-group">
							  <label class="control-label" for="textarea2">Description</label>
							  <div class="controls">
								<textarea class="input-medium" id="textarea2" rows="3" name='desc'></textarea>
							  </div>
							</div>
 
							  <div class="control-group">
								<label class="control-label">Task assignee</label>
								<div class="controls">
								  <input class="input-medium focused" id="focusedInput" name='assignee' type="text" value="">
								</div>
							  </div>
                               
                                <div class="control-group">
								<label class="control-label">Task status</label>
								<div class="controls">
								  <input class="input-medium focused" id="focusedInput" name='status' type="text" value="">
								</div>
							  </div>
                              
							  <div class="form-actions">
								<button type="submit" class="btn btn-primary">Save Task</button>
								
							  </div>
							</fieldset>
						  </form>
					</div>
				</div>
			</div><!--/span-->    