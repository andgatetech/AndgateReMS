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
			<div class="sortable row-fluid">
				<a data-rel="tooltip" title="" class="well span3 top-block" href="#">
					<span class="icon32 icon-color icon-cart"></span>
					<div>Monthly Sales</div>
					<div>2000000 BDT</div>
					
				</a>
				
				<a data-rel="tooltip" title="" class="well span3 top-block" href="#">
					<span class="icon32 icon-color icon-cart"></span>
					<div>Weekly Sales</div>
					<div>150000 BDT</div>
					
				</a>
				
				<a data-rel="tooltip" title="7000 BDT new sales." class="well span3 top-block" href="#">
					<span class="icon32 icon-color icon-cart"></span>
					<div>Daily Sales</div>
					<div>50000 BDT</div>
					<span class="notification yellow">7000 BDT</span>
				</a>
				
				<a data-rel="tooltip" title="2500 BDT new sales." class="well span3 top-block" href="#">
					<span class="icon32 icon-color icon-cart"></span>
					<div>Last Hour Sales</div>
					<div>400 BDT</div>
					<span class="notification yellow">2500 BDT</span>
				</a>
			</div>
			
			<!--row -->
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
					

				  

		  
       
<?php include('footer.php'); ?>
