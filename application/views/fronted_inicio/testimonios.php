

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		
		<!-- #header end -->

		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Testimonios</h1>
				<!--<span>Show what your Customers say about you</span>-->
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li class="active">Testimonios</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					

					

					<div class="line"></div>

					

					
					<div class="clear"></div>

					<div class="fslider testimonial testimonial-full bottommargin" data-animation="fade" data-arrows="false">
						<div class="flexslider">
							<!--<div class="slider-wrap">-->
							<div class="slide">
								<div class="testi-image">
									<a href="#"><img src="<?=$this->config->base_url();?>fronted_inicio/images/testimonials/3.jpg" alt="Customer Testimonails"></a>
								</div>
								<div class="testi-content">
									<p>Similique fugit repellendus expedita excepturi iure perferendis provident quia eaque. Repellendus, vero numquam?</p>
									<div class="testi-meta">
										Steve Jobs
										<span>Apple Inc.</span>
									</div>
								</div>
							</div>
							<!--</div>-->
						</div>
					</div>
					
					<div class="fslider testimonial testimonial-full bottommargin" data-animation="fade" data-arrows="false">
						<div class="flexslider">
							<!--<div class="slider-wrap">-->
							<div class="slide">
								<div class="testi-image">
									<a href="#"><img src="<?=$this->config->base_url();?>fronted_inicio/images/testimonials/2.jpg" alt="Customer Testimonails"></a>
								</div>
								<div class="testi-content">
									<p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
									<div class="testi-meta">
										Collis Ta'eed
										<span>Envato Inc.</span>
									</div>
								</div>
							</div>
							<!--</div>-->
						</div>
					</div>
					
					<div class="fslider testimonial testimonial-full bottommargin" data-animation="fade" data-arrows="false">
						<div class="flexslider">
							<!--<div class="slider-wrap">-->
							<div class="slide">
								<div class="testi-image">
									<a href="#"><img src="<?=$this->config->base_url();?>fronted_inicio/images/testimonials/1.jpg" alt="Customer Testimonails"></a>
								</div>
								<div class="testi-content">
									<p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
									<div class="testi-meta">
										John Doe
										<span>XYZ Inc.</span>
									</div>
								</div>
							</div>
							<!--</div>-->
						</div>
					</div>


					<script type="text/javascript">

						jQuery(document).ready(function($) {

							var ocTesti = $("#oc-testi");

							ocTesti.owlCarousel({
								margin: 20,
								nav: true,
								navText: ['<i class="icon-angle-left"></i>','<i class="icon-angle-right"></i>'],
								dots: true,
								responsive:{
									0:{ items:1 },
									768:{ items:2 },
									992:{ items:3 }
								}
							});

						});

					</script>

				</div>

				<div class="section center footer-stick">

					<div class="fslider testimonial testimonial-full twitter-scroll twitter-feed" data-username="envato" data-count="2" data-animation="slide" data-arrows="false">
						<i class="i-plain i-large color icon-twitter divcenter bottommargin-sm"></i>
						<div class="flexslider">
							<div class="slider-wrap">
								<div class="slide"></div>
							</div>
						</div>
					</div>

				</div>

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		
		<!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="<?=$this->config->base_url();?>fronted_inicio/js/functions.js"></script>

</body>
</html>