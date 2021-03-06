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
						<h2><i class="icon-eye-open"></i> Update Item</h2>
						<div class="box-icon">
						
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method='POST' action="<?php echo base_url(); ?>/menuitem/edit_success">
						<input name='id' type="hidden" value="<?php echo $singleitem->id;?>">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Title of item</label>
								<div class="controls">
								  <input class="input-medium focused" id="focusedInput" name='title' type="text" value="<?php echo $singleitem->title;?>">
								</div>
							  </div>
							  
							   <div class="control-group">
							  <label class="control-label" for="textarea2">Description</label>
							  <div class="controls">
								<textarea class="input-medium" id="textarea2" rows="3" name='desc'><?php echo $singleitem->description;?></textarea>
							  </div>
							</div>
 
							  <div class="control-group">
								<label class="control-label">Item price</label>
								<div class="controls">
								  <input class="input-medium focused" id="focusedInput" name='price' type="text" value="<?php echo $singleitem->price;?>">
								</div>
							  </div>
							  
							  <div class="control-group">
								<label class="control-label" for="selectError3">Type</label>
								<div class="controls">
								  <select id="selectError3" name="type" class="input-medium focused">
								  <?php
									if(isset($item_types)){
										foreach($item_types as $type){
										if($type->name === "$singleitem->type"){
										$selected = "selected='selected'";
										}else{
										$selected = NULL;
										}
										echo "<option value='".$type->name."' ".$selected.">".$type->name."</option>";
										}
									}
								  ?>
									
								  </select>
								</div>
							  </div>
                              
                              <div class="control-group">
								<label class="control-label" for="selectError3">Category</label>
								<div class="controls">
								  <select id="selectError3" name="category" class="input-medium focused">
								  <?php
									if(isset($categories)){
										foreach($categories as $category){
										if($category->id === $singleitem->item_category->id){
										$selected = "selected=selected";
										}else{
										$selected = NULL;
										}
										echo "<option value='".$category->id."' ".$selected." >".$category->name."</option>";
										}
									}
								  ?>
									
								  </select>
								</div>
							  </div>

							  <div class="form-actions">
								<button type="submit" class="btn btn-primary">Update Item</button>
								
							  </div>
							</fieldset>
						  </form>
					</div>
				</div>
			</div><!--/span-->    