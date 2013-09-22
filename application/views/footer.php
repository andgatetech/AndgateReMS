		<?php if(!isset($no_visible_elements) || !$no_visible_elements)	{ ?>
			<!-- content ends -->
			</div><!--/#content.span10-->
		<?php } ?>
		</div><!--/fluid-row-->
		<?php if(!isset($no_visible_elements) || !$no_visible_elements)	{ ?>
		
		<hr>
<!-------- ALL MODAL BOX --------------------------------------> 
		<div class="modal hide fade" id="myModal">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h3>Settings</h3>
			</div>
			<div class="modal-body">
				<p>Here settings can be configured...</p>
			</div>
			<div class="modal-footer">
				<a href="#" class="btn" data-dismiss="modal">Close</a>
				<a href="#" class="btn btn-primary">Save changes</a>
			</div>
		</div>
<!-------- MODAL: ORDER ITEM NUMBER ----->
		<div class="modal hide fade" id="order-item-number">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h3>Order</h3>
			</div>
			<div class="modal-body">
				<div class="control-group">
								<label for="focusedInput" class="control-label">Number</label>
								<div class="controls">
								  <input type="text" value=""  id="number" class="input-xlarge focused">
								</div>
				</div>
				<div id="numberpad">
						<div class="main_panel">
						
						<div class="number_button" onclick="number_write(1);">1</div>
						<div class="number_button" onclick="number_write(2);">2</div>
						<div class="number_button" onclick="number_write(3);">3</div>
						<div class="number_button" onclick="number_write(4);">4</div>
						<div class="number_button" onclick="number_write(5);">5</div>
						<div class="number_button" onclick="number_write(6);">6</div>
						<div class="number_button" onclick="number_write(7);">7</div>
						<div class="number_button" onclick="number_write(8);">8</div>
						<div class="number_button" onclick="number_write(9);">9</div>
						<div class="number_button" onclick="number_clear();">Clr</div>
						<div class="number_button" onclick="number_write(0);">0</div>
						<div class="number_button" onclick="number_c();">C</div>
						</div>
					</div>	
			</div>
			<div class="modal-footer">
				<a href="#" class="btn" data-dismiss="modal">Close</a>
				<a href="<?php echo base_url();?>pos/cart_add_item" class="btn btn-primary">Save changes</a>
			</div>
		</div>
<!-------- MODAL: ORDER ITEM NUMBER -----> 	 			
<!-------- ALL MODAL BOX --------------------------------------> 		

		<footer>
			<p class="pull-left">&copy; <a href="http://andgatetechnologies.com" target="_blank">Andgate Technologies</a> <?php echo date('Y') ?></p>
			<p class="pull-right">Powered by: <a href="http://andgatetechnologies.com">Andgate Technologies</a></p>
		</footer>
		<?php } ?>

	</div><!--/.fluid-container-->

	<!-- external javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->

	<!-- jQuery -->
	<script src="<?php echo base_url(); ?>asset/js/jquery-1.7.2.min.js"></script>
	<!-- jQuery UI -->
	<script src="<?php echo base_url(); ?>asset/js/jquery-ui-1.8.21.custom.min.js"></script>
	<!-- transition / effect library -->
	<script src="<?php echo base_url(); ?>asset/js/bootstrap-transition.js"></script>
	<!-- alert enhancer library -->
	<script src="<?php echo base_url(); ?>asset/js/bootstrap-alert.js"></script>
	<!-- modal / dialog library -->
	<script src="<?php echo base_url(); ?>asset/js/bootstrap-modal.js"></script>
	<!-- custom dropdown library -->
	<script src="<?php echo base_url(); ?>asset/js/bootstrap-dropdown.js"></script>
	<!-- scrolspy library -->
	<script src="<?php echo base_url(); ?>asset/js/bootstrap-scrollspy.js"></script>
	<!-- library for creating tabs -->
	<script src="<?php echo base_url(); ?>asset/js/bootstrap-tab.js"></script>
	<!-- library for advanced tooltip -->
	<script src="<?php echo base_url(); ?>asset/js/bootstrap-tooltip.js"></script>
	<!-- popover effect library -->
	<script src="<?php echo base_url(); ?>asset/js/bootstrap-popover.js"></script>
	<!-- button enhancer library -->
	<script src="<?php echo base_url(); ?>asset/js/bootstrap-button.js"></script>
	<!-- accordion library (optional, not used in demo) -->
	<script src="<?php echo base_url(); ?>asset/js/bootstrap-collapse.js"></script>
	<!-- carousel slideshow library (optional, not used in demo) -->
	<script src="<?php echo base_url(); ?>asset/js/bootstrap-carousel.js"></script>
	<!-- autocomplete library -->
	<script src="<?php echo base_url(); ?>asset/js/bootstrap-typeahead.js"></script>
	<!-- tour library -->
	<script src="<?php echo base_url(); ?>asset/js/bootstrap-tour.js"></script>
	<!-- library for cookie management -->
	<script src="<?php echo base_url(); ?>asset/js/jquery.cookie.js"></script>
	<!-- calander plugin -->
	<script src='<?php echo base_url(); ?>asset/js/fullcalendar.min.js'></script>
	<!-- data table plugin -->
	<script src='<?php echo base_url(); ?>asset/js/jquery.dataTables.min.js'></script>

	<!-- chart libraries start -->
	<script src="<?php echo base_url(); ?>asset/js/excanvas.js"></script>
	<script src="<?php echo base_url(); ?>asset/js/jquery.flot.min.js"></script>
	<script src="<?php echo base_url(); ?>asset/js/jquery.flot.pie.min.js"></script>
	<script src="<?php echo base_url(); ?>asset/js/jquery.flot.stack.js"></script>
	<script src="<?php echo base_url(); ?>asset/js/jquery.flot.resize.min.js"></script>
	<!-- chart libraries end -->

	<!-- select or dropdown enhancer -->
	<script src="<?php echo base_url(); ?>asset/js/jquery.chosen.min.js"></script>
	<!-- checkbox, radio, and file input styler -->
	<script src="<?php echo base_url(); ?>asset/js/jquery.uniform.min.js"></script>
	<!-- plugin for gallery image view -->
	<script src="<?php echo base_url(); ?>asset/js/jquery.colorbox.min.js"></script>
	<!-- rich text editor library -->
	<script src="<?php echo base_url(); ?>asset/js/jquery.cleditor.min.js"></script>
	<!-- notification plugin -->
	<script src="<?php echo base_url(); ?>asset/js/jquery.noty.js"></script>
	<!-- file manager library -->
	<script src="<?php echo base_url(); ?>asset/js/jquery.elfinder.min.js"></script>
	<!-- star rating plugin -->
	<script src="<?php echo base_url(); ?>asset/js/jquery.raty.min.js"></script>
	<!-- for iOS style toggle switch -->
	<script src="<?php echo base_url(); ?>asset/js/jquery.iphone.toggle.js"></script>
	<!-- autogrowing textarea plugin -->
	<script src="<?php echo base_url(); ?>asset/js/jquery.autogrow-textarea.js"></script>
	<!-- multiple file upload plugin -->
	<script src="<?php echo base_url(); ?>asset/js/jquery.uploadify-3.1.min.js"></script>
	<!-- history.js for cross-browser state change on ajax -->
	<script src="<?php echo base_url(); ?>asset/js/jquery.history.js"></script>
	<!-- application script for Charisma demo -->
	<script src="<?php echo base_url(); ?>asset/js/charisma.js"></script>

	
	<!-- application custom script for product module -->
	<script src="<?php echo base_url(); ?>asset/js/custom/custom.js"></script>
	
	
	
	
</body>
</html>
