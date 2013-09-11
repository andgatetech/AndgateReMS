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
    case "items":
		?>
		<div class="row-fluid sortable">
            <!-- ITEMS -->
			<?php $this->load->view("items/item_details"); ?>
			<!-- ITEMS -->

			<!-- ITEMS ADD -->
				<?php $this->load->view("items/item_add"); ?>
			<!-- ITEMS ADD -->

			

		</div>
		

<!-- MODULE: ITEM -------------------------------------------------------------------->	

<!-- MODULE: ITEM -------------------------------------------------------------------->	
		<?php	
        break;
		
}
?>






<?php include('footer.php'); ?>
