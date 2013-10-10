<?php include('header.php'); ?>
<div>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Home</a> <span class="divider">/</span>
                </li>
                <li>
                    <a href="#">Dashboard</a>
                </li>
            </ul>
</div>



<?php
switch ($module) {
    case "dashboard":
?>
        <!-- MODULE: DASHBOARD --------------------------------------------------------------->
        
		<!-- SALES SUMMERY -->
		<?php $this->load->view("dashboard/sales-summery"); ?>
		<!-- SALES SUMMERY

        <!-- INTRO -->
		<?php //$this->load->view("dashboard/intro"); ?>
        <!-- INTRO -->
        <!--row -->

        <!--row -->
        <div class="row-fluid sortable">
            <!-- ORDERS -->
			<?php $this->load->view("dashboard/orders"); ?>
			<!-- ORDERS -->

			<!-- SALES CATEGORY GRAPH -->
				<?php $this->load->view("dashboard/sales-category-graph"); ?>
			<!-- SALES CATEGORY GRAPH -->

			<!-- TASKLIST -->
				<?php $this->load->view("dashboard/tasklist"); ?>
			<!-- TASKLIST -->

		</div>
		<!--row -->

    <!-- MODULE: DASHBOARD --------------------------------------------------------------->
<?php
        break;
    case "pos":
		?>		
	<!-- MODULE: POS -------------------------------------------------------------------->	
	<!--row -->
        <div class="row-fluid sortable">
            <!-- ORDERS -->
			<?php $this->load->view("pos/pos"); ?>
			<!-- ORDERS -->

			<!-- TASKLIST -->
				<?php $this->load->view("pos/menuitems"); ?>
			<!-- TASKLIST -->

		</div>
		<!--row -->
	<!-- MODULE: POS -------------------------------------------------------------------->		
<?php
        break;
    case "items":
		?>
	<!-- MODULE: ITEM -------------------------------------------------------------------->	
		<!--row -->
		<div class="row-fluid sortable">
            <!-- ITEMS -->
			<?php $this->load->view("items/item_details"); ?>
			<!-- ITEMS -->

			<!-- ITEMS ADD -->
				<?php $this->load->view("items/item_form"); ?>
			<!-- ITEMS ADD -->
		</div>
		<!--row -->
	<!-- MODULE: ITEM -------------------------------------------------------------------->	
    <?php
        break;
    case "tasks":
		?>
	<!-- MODULE:  TASKS-------------------------------------------------------------------->	
		<!--row -->
		<div class="row-fluid sortable">
            <!-- TASKS -->
			<?php $this->load->view("task/task_details"); ?>
			<!--  TASKS -->

			<!--  TASKS ADD -->
				<?php $this->load->view("task/task_form"); ?>
			<!--  TASKS ADD -->
		</div>
		<!--row -->
	<!-- MODULE:  TASKS-------------------------------------------------------------------->	
    
<?php	
        break;
	case "report":
		?>
	<!-- MODULE: REPORT -------------------------------------------------------------------->	
		<?php if(isset($submodule)){
			switch($submodule){
				case "order_reciept":
					?>
					<!--row -->
					<div class="row-fluid sortable">
						<!-- ORDER RECIEPT -->
						<?php $this->load->view("report/order_reciept"); ?>
						<!-- ORDER RECIEPT -->			
					</div>
					<!--row -->
					<?php
				break;

	
			}
		}
		?>
		
	<!-- MODULE: REPORT -------------------------------------------------------------------->	
		<?php	
        break;
		
}
?>






<?php include('footer.php'); ?>
