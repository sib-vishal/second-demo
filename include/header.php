<header class="stricky">
	<nav class=" navbar navbar navbar-expand-lg  " arial-label="Furni navigation bar">

		<div class="navbar-inner containerFull navbar-inner  w-100">
			<a class="navbar-brand" href="index.php">
				<img src="images/logo.png" alt="">
			</a>

			<button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
				data-bs-target="#navbarsbloom" aria-controls="navbarsbloom" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="navbar-collapse collapse" id="navbarsbloom" style="">
				<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">

					<a href="index.php"
						class="nav-item nav-link <?php echo ($page == 'home') ? 'active' : ''; ?>">Home</a>
					<a href="about-us.php"
						class="nav-item nav-link  <?php echo ($page == 'about') ? 'active' : ''; ?>">About Us</a>
					<a href="services.php"
						class="nav-item nav-link  <?php echo ($page == 'services') ? 'active' : ''; ?>">Our Services</a>
					<a href="gallery.php"
						class="nav-item nav-link  <?php echo ($page == 'gallery') ? 'active' : ''; ?>">Gallery</a>

					<!-- <li class="nav-item">
						<a class="nav-link" href="index.php">Home</a>
					</li>
					<li><a class="nav-link" href="about-us.php">About us</a></li>
					<li><a class="nav-link" href="services.php">Services</a></li>
					<li><a class="nav-link" href="gallery.php">Gallery</a></li>
					<li><a class="nav-link" href="blog.php">Blog</a></li> -->
					<a class="nav-link nav-item	<?php echo ($page == 'contact') ? 'active' : ''; ?>" href="contact-us.php">Contact us</a></li>
				</ul>

				<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5 d-none d-lg-block">
					<a class="btn_1 " href="#">
						Let's Connect
					</a>
				</ul>
			</div>
		</div>

	</nav>
</header>