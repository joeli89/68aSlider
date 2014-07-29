	<!-- Begin Navigation -->
	<div class="navbar navbar-fixed-top">

		<div class="container">

			<div class="navbar-header">

				<!-- Brand -->
				<a href="index.php" class="navbar-brand">
					<div class="breadcrumb"><a href="index.php">Home</a> <i class="ion-chevron-right"></i> <?php echo $product["name"]; ?> </div>
				</a>

				<!-- Mobile Navigation -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
					<span class="ion-navicon toggle-icon"></span>
				</button>

			</div>

			<!-- Main Navigation -->
			<nav class="navbar-collapse collapse navHeaderCollapse" id="myScrollSpy" role="navigation">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.php" data-id="section1"><i class="ion-chevron-left"></i> Back</a></li>
				</ul>
			</nav>

		</div>

	</div>
	<!-- End Navigation -->