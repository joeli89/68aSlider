<?php 

	$filters = array();

		$filters[1] = array(
			"data-filter" => "all",
			"name" => "All"
			);
		$filters[2] = array(
			"data-filter" => "modern",
			"name" => "Modern & Handless"
			);
		$filters[3] = array(
			"data-filter" => "bespoke",
			"name" => "Traditional Bespoke"
			);
		$filters[4] = array(
			"data-filter" => "bedrooms",
			"name" => "Bedrooms"
			);

		


?>



			<!-- Gallery Filter -->
			<div data-scroll-reveal="enter left and move 50px over 1s" class="container text-center">
			  <ul class="nav nav-pills">
			  	<?php foreach($filters as $filter) { $filterName = $filter["data-filter"]; ?>
				    <li class="filter" data-filter='<?php echo $filterName; ?>'><?php echo $filter["name"]; ?></li>
				<?php } ?>
			  </ul>
			</div> 