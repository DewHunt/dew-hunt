
	
	<body>
		<!-- Loading animation -->
		<div class="preloader">
			<div class="preloader-animation">
				<div class="dot1"></div>
				<div class="dot2"></div>
			</div>
		</div>
		<!-- /Loading animation -->
		
		<div id="page" class="page">
			<!-- Header -->
			<header id="site_header" class="header mobile-menu-hide header-color-light">
				<div class="my-photo tilt-effect">
					<img src="<?= base_url(); ?>assets/web2/images/photo.png" alt="image">
				</div>
				<div class="site-title-block"><h1 class="site-title">Alex Smith</h1></div>
				<!-- Navigation -->
				<div class="site-nav">
					<!-- Main menu -->
					<ul id="nav" class="site-main-menu">
						<li>
							<a class="pt-trigger" href="#home" data-animation="21">
								<i class="menu-icon pe-7s-icon pe-7s-home"></i>Home
							</a><!-- href value = data-id without # of .pt-page. -->
						</li>
						
						<li>
							<a class="pt-trigger" href="#about_me" data-animation="17">
								<i class="menu-icon pe-7s-icon pe-7s-user"></i>About me
							</a>
						</li>
						
						<li>
							<a class="pt-trigger" href="#resume" data-animation="18">
								<i class="menu-icon pe-7s-icon pe-7s-id"></i>Resume
							</a>
						</li>
						
						<li>
							<a class="pt-trigger" href="#portfolio" data-animation="19">
								<i class="menu-icon pe-7s-icon pe-7s-portfolio"></i>Portfolio
							</a>
						</li>
						
						<li>
							<a class="pt-trigger" href="#contact" data-animation="20">
								<i class="menu-icon pe-7s-icon pe-7s-mail"></i>Contact
							</a>
						</li>
						</ul>
					<!-- /Main menu -->
				</div>
				<!-- Navigation -->
			</header>
			<!-- /Header -->
			
			<!-- Mobile Header -->
			<div class="mobile-header mobile-visible">
				<div class="mobile-logo-container">
					<div class="mobile-site-title">Alex Smith</div>
				</div>
				
				<a class="menu-toggle mobile-visible"><i class="fa fa-bars"></i></a>
			</div>
			<!-- /Mobile Header -->
			
			<!-- Main Content -->
			<div id="main" class="site-main">
				<!-- Page changer wrapper -->
				<div class="pt-wrapper" style="background-image: url(images/bg.png);">
					<!-- Subpages -->
					<div class="subpages">
						<!-- Home Subpage -->
						<section class="pt-page pt-page-1 section-without-bg section-paddings-0 table" data-id="home">
							<div class="section-inner">
								<div class="home-page-block">
									<h2><?= $homeInfo->Name; ?></h2>
									<div class="owl-carousel text-rotation">
										<?php
											foreach ($homeDesignationInfo as $value)
											{
										?>
											<div class="item">
												<p class="home-page-description">
													<?= $value->Designation; ?>
												</p>
											</div>
										<?php												
											}
										?>
<!-- 										<div class="item">
											<p class="home-page-description">Web Designer</p>
										</div>
										<div class="item">
											<p class="home-page-description">Frontend-developer</p>
										</div> -->
									</div>
								</div>
							</div>
						</section>
						<!-- End of Home Subpage -->
						
						<!-- About Me Subpage -->
						<section class="pt-page pt-page-2" data-id="about_me">
							<div class="border-block-top-110"></div>
							<div class="section-inner">
								<div class="section-title-block">
									<div class="section-title-wrapper clearfix">
										<h2 class="section-title">About Me</h2>
										<h5 class="section-description">Artist, Thinker, Creative Doer</h5>
									</div>
								</div>
								
								<div class="row">
									<div class="col-sm-6 col-md-6 col-lg-4 subpage-block">
										<div class="my-photo-block tilt-effect">
											<img src="<?= base_url(); ?>assets/web2/images/photo.png" alt="">
										</div>
									</div>
									
									<div class="col-sm-6 col-md-6 col-lg-4">
										<h3>I am Web Designer @ Company.com</h3>
										<p>
											Praesent ut tortor consectetur, semper sapien non, lacinia augue. Aenean arcu libero, facilisis et nisi non, tempus faucibus tortor. Mauris vel nulla aliquam, pellentesque enim ac, faucibus tortor. Nulla odio nibh, cursus sit amet urna id, dignissim euismod augue.
										</p>
										
										<p>
											Duis sollicitudin, libero porttitor rutrum ultrices, turpis lorem fermentum justo, quis ornare augue tortor non est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
										</p>
									</div>
									
									<div class="col-sm-6 col-md-6 col-lg-4 subpage-block">
										<ul class="info-list">
											<li>
												<span class="title">Age</span>
												<span class="value">29</span>
											</li>
											
											<li>
												<span class="title">Residence</span>
												<span class="value">USA</span>
											</li>
											
											<li>
												<span class="title">Address</span>
												<span class="value">88 Some Street, Some Town</span>
											</li>
											
											<li>
												<span class="title">e-mail</span>
												<span class="value">
													<a href="https://lmpixels.com/cdn-cgi/l/email-protection#4c29212d25200c29342d213c2029622f2321">
														<span class="__cf_email__" data-cfemail="4b2e262a22270b2e332a263b272e65282426">[email&#160;protected]</span>
													</a>
												</span>
											</li>
											
											<li>
												<span class="title">Phone</span>
												<span class="value">+0123 123 456 789</span>
											</li>
											
											<li>
												<span class="title">Skype</span>
												<span class="value">alex.smith</span>
											</li>
											
											
											<li>
												<span class="title">Freelance</span>
												<span class="value available">Available</span>
											</li>
										</ul>
										
										<ul class="social-links">
											<li>
												<a class="tip social-button" href="#" title="Twitter">
													<i class="fa fa-twitter"></i>
												</a>
											</li> <!-- Full list of social icons: http://fontawesome.io/icons/#brand -->
											
											<li>
												<a class="tip social-button" href="#" title="Facebook">
													<i class="fa fa-facebook"></i>
												</a>
											</li>
											
											<li>
												<a class="tip social-button" href="#" title="Google Plus">
													<i class="fa fa-google-plus"></i>
												</a>
											</li>
											
											<li>
												<a class="tip social-button" href="#" title="Youtube">
													<i class="fa fa-youtube"></i>
												</a>
											</li>
											
											<li>
												<a class="tip social-button" href="#" title="Instagram">
													<i class="fa fa-instagram"></i>
												</a>
											</li>
											
											<li>
												<a class="tip social-button" href="#" title="last.fm">
													<i class="fa fa-lastfm"></i>
												</a>
											</li>
											
											<li>
												<a class="tip social-button" href="#" title="Dribbble">
													<i class="fa fa-dribbble"></i>
												</a>
											</li>
										</ul>
									</div>
								</div>
								
								<!-- Services block -->
								<div class="block-title">
									<h3>Services</h3>
								</div>
								
								<div class="row">
									<?php
										foreach ($serviceInfo as $value)
										{
									?>
										<div class="col-sm-6 col-md-3 subpage-block">
											<div class="service-block">
												<div class="service-info">
													<img src="<?= base_url(); ?>assets/web2/images/service/<?= $value->Icon; ?>" alt="Responsive Design">
													<!-- <i class="fa fa-<?= $value->Icon; ?>"></i> -->
													<h4><?= $value->Title; ?></h4>
													<p><?= $value->Description; ?></p>
												</div>
											</div>
										</div>
									<?php
										}
									?>
<!-- 									<div class="col-sm-6 col-md-3 subpage-block">
										<div class="service-block">
											<div class="service-info">
												<img src="<?= base_url(); ?>assets/web2/images/service/web_design_icon1.png" alt="Responsive Design">
												<h4>Web Design</h4>
												<p>
													Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
												</p>
											</div>
										</div>
									</div>
									
									<div class="col-sm-6 col-md-3 subpage-block">
										<div class="service-block">
											<div class="service-info">
												<img src="<?= base_url(); ?>assets/web2/images/service/photography_icon.png" alt="Photography">
												<h4>Photography</h4>
												<p>
													Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
												</p>
											</div>
										</div>
									</div>
									
									<div class="col-sm-6 col-md-3 subpage-block">
										<div class="service-block">
											<div class="service-info">
												<img src="<?= base_url(); ?>assets/web2/images/service/creativity_icon.png" alt="Creativity">
												<h4>Creativity</h4>
												<p>
													Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
												</p>
											</div>
										</div>
									</div>
									
									<div class="col-sm-6 col-md-3 subpage-block">
										<div class="service-block">
											<div class="service-info">
												<img src="<?= base_url(); ?>assets/web2/images/service/advetising_icon.png" alt="Advetising">
												<h4>Advertising</h4>
												<p>
													Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
												</p>
											</div>
										</div>
									</div>
								</div> -->
								<!-- End of Services block -->
							</div>
						</section>
						<!-- End of About Me Subpage -->
						
						<!-- Resume Subpage -->
						<section class="pt-page pt-page-3" data-id="resume">
							<div class="border-block-top-110"></div>
							<div class="section-inner">
								<div class="section-title-block">
									<div class="section-title-wrapper">
										<h2 class="section-title">Resume</h2>
										<h5 class="section-description">6 Years of Experience</h5>
									</div>
								</div>
								
								<div class="row">
									<div class="col-sm-6 col-md-4 subpage-block">
										<div class="block-title">
											<h3>Education</h3>
										</div>
										
										<div class="timeline">
											<!-- Single event -->
											<div class="timeline-event te-primary">
												<h5 class="event-date">2010</h5>
												<h4 class="event-name">Specialization Course</h4>
												<span class="event-description">University of Studies</span>
												<p>
													Mauris magna sapien, pharetra consectetur fringilla vitae, interdum sed tortor.
												</p>
											</div>
											
											<!-- Single event -->
											<div class="timeline-event te-primary">
												<h5 class="event-date">2009</h5>
												<h4 class="event-name">Specialization Course</h4>
												<span class="event-description">University of Studies</span>
												<p>
													Mauris magna sapien, pharetra consectetur fringilla vitae, interdum sed tortor.
												</p>
											</div>
											<!-- Single event -->
											
											<div class="timeline-event te-primary">
												<h5 class="event-date">2008</h5>
												<h4 class="event-name">Specialization Course</h4>
												<span class="event-description">University of Studies</span>
												<p>
													Mauris magna sapien, pharetra consectetur fringilla vitae, interdum sed tortor.
												</p>
											</div>
										</div>
									</div>
									
									<div class="col-sm-6 col-md-4 subpage-block">
										<div class="block-title">
											<h3>Experience</h3>
										</div>
										
										<div class="timeline">
											<!-- Single event -->
											<div class="timeline-event te-primary">
												<h5 class="event-date">Dec 2012 - Current</h5>
												<h4 class="event-name">Frontend-developer</h4>
												<span class="event-description">Web Agency</span>
												<p>
													Mauris magna sapien, pharetra consectetur fringilla vitae, interdum sed tortor.
												</p>
											</div>
											<!-- Single event -->
											
											<div class="timeline-event te-primary">
												<h5 class="event-date">Dec 2011 - Nov 2012</h5>
												<h4 class="event-name">Web Designer</h4>
												<span class="event-description">Apple Inc.</span>
												<p>
													Mauris magna sapien, pharetra consectetur fringilla vitae, interdum sed tortor.
												</p>
											</div>
											<!-- Single event -->
											
											<div class="timeline-event te-primary">
												<h5 class="event-date">Jan 2010 - Dec 2011</h5>
												<h4 class="event-name">Graphic Designer</h4>
												<span class="event-description">Web Agency</span>
												<p>
													Mauris magna sapien, pharetra consectetur fringilla vitae, interdum sed tortor.
												</p>
											</div>
										</div>
									</div>
									
									<div class="col-sm-6 col-md-4 subpage-block">
										<div class="block-title">
											<h3>Design Skills</h3>
										</div>
										
										<div class="skills-info">
											<h4>Web Design</h4>
											<div class="skill-container">
												<div class="skill-percentage skill-1"></div>
											</div>
											
											<h4>Graphic Design</h4>
											<div class="skill-container">
												<div class="skill-percentage skill-2"></div>
											</div>
											
											<h4>Print Design</h4>
											<div class="skill-container">
												<div class="skill-percentage skill-3"></div>
											</div>
										</div>
										
										<div class="block-title">
											<h3>Coding Skills</h3>
										</div>
										
										<div class="skills-info">
											<h4>HML5</h4>
											<div class="skill-container">
												<div class="skill-percentage skill-4"></div>
											</div>
											
											<h4>CSS3</h4>
											<div class="skill-container">
												<div class="skill-percentage skill-5"></div>
											</div>
											
											<h4>jQuery</h4>
											<div class="skill-container">
												<div class="skill-percentage skill-6"></div>
											</div>
											
											<h4>Wordpress</h4>
											<div class="skill-container">
												<div class="skill-percentage skill-7"></div>
											</div>
											
											<h4>PHP</h4>
											<div class="skill-container">
												<div class="skill-percentage skill-8"></div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="col-sm-12 col-md-12">
										<div class="download-cv-block">
											<a class="button" target="_blank" href="#">Download CV</a>
										</div>
									</div>
								</div>
							</div>
						</section>
						<!-- End Resume Subpage -->
						
						<!-- Portfolio Subpage -->
						<section class="pt-page pt-page-4" data-id="portfolio">
							<div class="border-block-top-110"></div>
							<div class="section-inner">
								<div class="section-title-block">
									<div class="section-title-wrapper">
										<h2 class="section-title">Portfolio</h2>
										<h5 class="section-description">My Best Works</h5>
									</div>
								</div>
								
								<!-- Portfolio Content -->
								<div class="portfolio-content">
									<!-- Portfolio filter -->
									<ul id="portfolio_filters" class="portfolio-filters">
										<li class="active">
											<a class="filter btn btn-sm btn-link active" data-group="all">All</a>
										</li>
										
										<li>
											<a class="filter btn btn-sm btn-link" data-group="media">Media</a>
										</li>
										
										<li>
											<a class="filter btn btn-sm btn-link" data-group="illustration">Illustration</a>
										</li>
										
										<li>
											<a class="filter btn btn-sm btn-link" data-group="video">Video</a>
										</li>
									</ul>
									<!-- End of Portfolio filter -->
									
									<!-- Portfolio Grid -->
									<div id="portfolio_grid" class="portfolio-grid portfolio-masonry masonry-grid-3">
										<!-- Portfolio Item 1 -->
										<figure class="item" data-groups='["all", "media"]'>
											<a class="ajax-page-load" href="portfolio-1.html">
												<img src="<?= base_url(); ?>assets/web2/images/portfolio/1.jpg" alt="">
												<div>
													<h5 class="name">Project Name</h5>
													<small>Media</small>
													<i class="pe-7s-icon pe-7s-display2"></i>
												</div>
											</a>
										</figure>
										<!-- /Portfolio Item 1 -->
										
										<!-- Portfolio Item 2 -->
										<figure class="item" data-groups='["all", "video"]'>
											<a href="https://player.vimeo.com/video/97102654?autoplay=1" title="Praesent Dolor Ex" class="lightbox mfp-iframe">
												<img src="<?= base_url(); ?>assets/web2/images/portfolio/2.jpg" alt="">
												<div>
													<h5 class="name">Project Name</h5>
													<small>Video</small>
													<i class="pe-7s-icon pe-7s-video"></i>
												</div>
											</a>
										</figure>
										<!-- /Portfolio Item 2 -->
										
										<!-- Portfolio Item 3 -->
										<figure class="item" data-groups='["all","illustration"]'>
											<a href="images/portfolio/full/3.jpg" class="lightbox" title="Duis Eu Eros Viverra">
												<img src="<?= base_url(); ?>assets/web2/images/portfolio/3.jpg" alt="">
												<div>
													<h5 class="name">Project Name</h5>
													<small>Illustration</small>
													<i class="pe-7s-icon pe-7s-photo"></i>
												</div>
											</a>
										</figure>
										<!-- /Portfolio Item 3 -->
										
										<!-- Portfolio Item 4 -->
										<figure class="item" data-groups='["all", "media"]'>
											<a class="ajax-page-load" href="portfolio-2.html">
												<img src="<?= base_url(); ?>assets/web2/images/portfolio/4.jpg" alt="">
												<div>
													<h5 class="name">Project Name</h5>
													<small>Media</small>
													<i class="pe-7s-icon pe-7s-display2"></i>
												</div>
											</a>
										</figure>
										<!-- /Portfolio Item 4 -->
										
										<!-- Portfolio Item 5 -->
										<figure class="item" data-groups='["all", "illustration"]'>
											<a href="images/portfolio/full/5.jpg" class="lightbox" title="Aliquam Condimentum Magna Rhoncus">
												<img src="<?= base_url(); ?>assets/web2/images/portfolio/5.jpg" alt="">
												<div>
													<h5 class="name">Project Name</h5>
													<small>Illustration</small>
													<i class="pe-7s-icon pe-7s-photo"></i>
												</div>
											</a>
										</figure>
										<!-- /Portfolio Item 5 -->
										
										<!-- Portfolio Item 6 -->
										<figure class="item" data-groups='["all", "media"]'>
											<a class="ajax-page-load" href="portfolio-3.html">
												<img src="<?= base_url(); ?>assets/web2/images/portfolio/6.jpg" alt="">
												<div>
													<h5 class="name">Project Name</h5>
													<small>Media</small>
													<i class="pe-7s-icon pe-7s-display2"></i>
												</div>
											</a>
										</figure>
										<!-- /Portfolio Item 6 -->
										
										<!-- Portfolio Item 7 -->
										<figure class="item" data-groups='["all", "video"]'>
											<a href="https://player.vimeo.com/video/97102654?autoplay=1" title="Nulla Facilisi" class="lightbox mfp-iframe">
												<img src="<?= base_url(); ?>assets/web2/images/portfolio/7.jpg" alt="">
												<div>
													<h5 class="name">Project Name</h5>
													<small>Video</small>
													<i class="pe-7s-icon pe-7s-video"></i>
												</div>
											</a>
										</figure>
										<!-- /Portfolio Item 7 -->
										
										<!-- Portfolio Item 8 -->
										<figure class="item" data-groups='["all",  "media"]'>
											<a class="ajax-page-load" href="portfolio-4.html">
												<img src="<?= base_url(); ?>assets/web2/images/portfolio/8.jpg" alt="">
												<div>
													<h5 class="name">Project Name</h5>
													<small>Media</small>
													<i class="pe-7s-icon pe-7s-display2"></i>
												</div>
											</a>
										</figure>
										<!-- /Portfolio Item 8 -->
										
										<!-- Portfolio Item 9 -->
										<figure class="item" data-groups='["all","illustration"]'>
											<a href="images/portfolio/full/9.jpg" class="lightbox" title="Mauris Neque Dolor">
												<img src="<?= base_url(); ?>assets/web2/images/portfolio/9.jpg" alt="">
												<div>
													<h5 class="name">Project Name</h5>
													<small>Illustration</small>
													<i class="pe-7s-icon pe-7s-photo"></i>
												</div>
											</a>
										</figure>
										<!-- /Portfolio Item 9 -->
										
										<!-- Portfolio Item 10 -->
										<figure class="item" data-groups='["all", "video"]'>
											<a href="https://player.vimeo.com/video/97102654?autoplay=1" title="Donec Lectus Arcu" class="lightbox mfp-iframe">
												<img src="<?= base_url(); ?>assets/web2/images/portfolio/10.jpg" alt="">
												<div>
													<h5 class="name">Project Name</h5>
													<small>Video</small>
													<i class="pe-7s-icon pe-7s-video"></i>
												</div>
											</a>
										</figure>
										<!-- /Portfolio Item 10 -->
										
										<!-- Portfolio Item 11 -->
										<figure class="item" data-groups='["all","illustration"]'>
											<a href="images/portfolio/full/11.jpg" class="lightbox" title="Duis Eu Eros Viverra">
												<img src="<?= base_url(); ?>assets/web2/images/portfolio/11.jpg" alt="">
												<div>
													<h5 class="name">Project Name</h5>
													<small>Illustration</small>
													<i class="pe-7s-icon pe-7s-photo"></i>
												</div>
											</a>
										</figure>
										<!-- /Portfolio Item 11 -->
										
										<!-- Portfolio Item 12 -->
										<figure class="item" data-groups='["all","media"]'>
											<a class="ajax-page-load" href="portfolio-5.html">
												<img src="<?= base_url(); ?>assets/web2/images/portfolio/12.jpg" alt="">
												<div>
													<h5 class="name">Project Name</h5>
													<small>Media</small>
													<i class="pe-7s-icon pe-7s-display2"></i>
												</div>
											</a>
										</figure>
										<!-- /Portfolio Item 12 -->
									</div>
									<!-- /Portfolio Grid -->
								</div>
								<!-- /Portfolio Content -->
							</div>
						</section>
						<!-- /Portfolio Subpage -->
						
						<!-- Contact Subpage -->
						<section class="pt-page pt-page-5" data-id="contact">
							<div class="border-block-top-110"></div>
							<div class="section-inner">
								<div class="section-title-block">
									<div class="section-title-wrapper">
										<h2 class="section-title">Contact</h2>
										<h5 class="section-description">Get in Touch</h5>
									</div>
								</div>
								
								<div class="row">
									<div class="col-sm-6 col-md-6 subpage-block">
										<div class="block-title">
											<h3>Get in Touch</h3>
										</div>
										<p>
											Sed eleifend sed nibh nec fringilla. Donec eu cursus sem, vitae tristique ante. Cras pretium rutrum egestas. Integer ultrices libero sed justo vehicula, eget tincidunt tortor tempus.
										</p>
										
										<div class="contact-info-block">
											<div class="ci-icon">
												<i class="pe-7s-icon pe-7s-map-marker"></i>
											</div>
											
											<div class="ci-text">
												<h5>Los Angeles, USA</h5>
											</div>
										</div>
										
										<div class="contact-info-block">
											<div class="ci-icon">
												<i class="pe-7s-icon pe-7s-mail"></i>
											</div>
											
											<div class="ci-text">
												<h5>
													<a href="https://lmpixels.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="71101d1409021c180519311409101c011d145f121e1c">
														[email&#160;protected]
													</a>
												</h5>
											</div>
										</div>
										
										<div class="contact-info-block">
											<div class="ci-icon">
												<i class="pe-7s-icon pe-7s-call"></i>
											</div>
											
											<div class="ci-text">
												<h5>+123 654 78900</h5>
											</div>
										</div>
										
										<div class="contact-info-block">
											<div class="ci-icon">
												<i class="pe-7s-icon pe-7s-check"></i>
											</div>
											
											<div class="ci-text">
												<h5>Freelance Available</h5>
											</div>
										</div>
									</div>
									
									<div class="col-sm-6 col-md-6 subpage-block">
										<div class="block-title">
											<h3>Contact Form</h3>
										</div>
										
										<form id="contact-form" method="post" action="https://lmpixels.com/demo/unique/unique-vcard/contact_form/contact_form.php">
											<div class="messages"></div>
											
											<div class="controls">
												<div class="form-group">
													<input id="form_name" type="text" name="name" class="form-control" placeholder="Full Name" required="required" data-error="Name is required.">
													
													<div class="form-control-border"></div>
													<i class="form-control-icon pe-7s-user"></i>
													<div class="help-block with-errors"></div>
												</div>
												
												<div class="form-group">
													<input id="form_email" type="email" name="email" class="form-control" placeholder="Email Address" required="required" data-error="Valid email is required.">
													
													<div class="form-control-border"></div>
													<i class="form-control-icon pe-7s-mail"></i>
													<div class="help-block with-errors"></div>
												</div>
												
												<div class="form-group">
													<textarea id="form_message" name="message" class="form-control" placeholder="Message for Me" rows="4" required="required" data-error="Please, leave me a message."></textarea>
													
													<div class="form-control-border"></div>
													<i class="form-control-icon pe-7s-comment"></i>
													<div class="help-block with-errors"></div>
												</div>
												
												<input type="submit" class="button btn-send" value="Send message">
											</div>
										</form>
									</div>
								</div>
							</div>
						</section>
						<!-- End Contact Subpage -->
					</div>
				</div>
				<!-- /Page changer wrapper -->
			</div>
			<!-- /Main Content -->
		</div>
		
		<!-- Demo Color changer -->
		<a id="lm_demo_panel_switcher" class="lm-demo-panel-switcher right">
			<i class="fa fa-gear"></i>
		</a>
		
		<div id="lm_demo_panel" class="lm-demo-panel right panel-color-red active">
			<div class="demo-panel-title">Template Style</div>
			<div id="t_style" class="demo-panel-options">
				<a class="current-t-style t-style-switcher" data-id="template-style-light">
					<div class="preview w-border t-style t-style-light">Light</div>
				</a>
				<a class="t-style-switcher" data-id="template-style-dark">
					<div class="preview t-style t-style-dark">Dark</div>
				</a>
			</div>
			
			<div class="demo-panel-title">Main Color</div>
			
			<div id="main_color" class="demo-panel-options">
				<a data-id="red" class="current-main-color">
					<div class="preview color-1">&nbsp;</div>
				</a>
				
				<a data-id="blue">.
					<div class="preview color-2">&nbsp;</div>
				</a>
				
				<a data-id="green">
					<div class="preview color-3">&nbsp;</div>
				</a>
				
				<a data-id="orange">
					<div class="preview color-4">&nbsp;</div>
				</a>
				
				<a data-id="yellow">
					<div class="preview color-5">&nbsp;</div>
				</a>
				
				<a data-id="violet">
					<div class="preview color-6">&nbsp;</div>
				</a>
			</div>
			
			<div class="demo-panel-title">Nav Color</div>
			
			<div id="header_color" class="demo-panel-options">
				<a class="current-h-color inverse h-color-switcher" data-id="header-color-light">
					<div class="preview h-color h-color-1 w-border">&nbsp;</div>
				</a>
				
				<a class="h-color-switcher" data-id="header-color-main">
					<div class="preview h-color h-color-2">&nbsp;</div>
				</a>
				
				<a class="h-color-switcher" data-id="header-color-dark">
					<div class="preview h-color h-color-3">&nbsp;</div>
				</a>
			</div>
			
			<div class="demo-panel-title mobile-hidden">Nav Position</div>
			
			<div id="header_position" class="demo-panel-options mobile-hidden">
				<a class="current-layout layout-switcher" data-id="layout-menu-left">
					<div class="preview layout left">Left</div>
				</a>
				
				<a class="layout-switcher" data-id="layout-menu-top">
					<div class="preview layout top">Top</div>
				</a>
				
				<a class="layout-switcher" data-id="layout-menu-bottom">
					<div class="preview layout bottom">Bottom</div>
				</a>
			</div>
		</div>
		<!-- /Demo Color changer -->