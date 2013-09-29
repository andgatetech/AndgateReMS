        <div class="sortable row-fluid">
            <a data-rel="tooltip" title="Monthly total sales = <?php echo round($monthlyTotalSale, 2);?> BDT" class="well span3 top-block" href="#">
                <span class="icon32 icon-color icon-cart"></span>
                <div>Monthly Sales</div>
                <div><?php echo round($monthlyTotalSale, 2);?> BDT</div>

            </a>

            <a data-rel="tooltip" title="Last week total = sales <?php echo round($weeklyTotalSale, 2);?> BDT" class="well span3 top-block" href="#">
                <span class="icon32 icon-color icon-cart"></span>
                <div>Weekly Sales</div>
                <div><?php echo round($weeklyTotalSale, 2);?> BDT</div>

            </a>

            <a data-rel="tooltip" title="Todays total sales = <?php echo round($dailyTotalSale, 2);?> BDT" class="well span3 top-block" href="#">
                <span class="icon32 icon-color icon-cart"></span>
                <div>Daily Sales</div>
                <div><?php echo round($dailyTotalSale, 2);?> BDT</div>
                
            </a>

            <a data-rel="tooltip" title="Last hour total sales = <?php echo round($lastHourTotalSale, 2);?> BDT" class="well span3 top-block" href="#">
                <span class="icon32 icon-color icon-cart"></span>
                <div>Last Hour Sales</div>
                <div><?php echo round($lastHourTotalSale, 2);?> BDT</div>
                
            </a>
        </div>

        <!--row -->