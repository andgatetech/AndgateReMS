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
						<h2><i class="icon-eye-open"></i> Insert Item</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method='POST' action="<?php echo base_url(); ?>/menuitem/save">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Title of item</label>
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
								<label class="control-label">Item price</label>
								<div class="controls">
								  <input class="input-medium focused" id="focusedInput" name='price' type="text" value="">
								</div>
							  </div>
							  
							  <div class="control-group">
								<label class="control-label" for="selectError3">Type</label>
								<div class="controls">
								  <select id="selectError3" name="type" class="input-medium focused">
								  <?php
									if(isset($item_types)){
										foreach($item_types as $type){
										echo "<option value='".$type->name."'>".$type->name."</option>";
										}
									}
								  ?>
									
								  </select>
								</div>
							  </div>

							  <div class="form-actions">
								<button type="submit" class="btn btn-primary">Save Item</button>
								
							  </div>
							</fieldset>
						  </form>
					</div>
				</div>
			</div><!--/span-->    