<?php get_header(); ?>
			<!-- main body - start
			================================================== -->
			<main>
				<!-- breadcrumb_section - start
				================================================== -->
				<section class="breadcrumb_section breadcrumbs_blog  section_space pb-0">
					<div class="container ">
						<h1 class="page_title">
							<span class="d-block">Blog</span>
						</h1>
						<p class="mb-0 d-none d-md-inline">
							Regular dose of usefull content from our studio experts
						</p>
						<div class="category-navigation d-block d-lg-none pt-0">
							<div class="container mx-0 px-0">
								<div class="row">
									<div class="filter_nav_wrap">
										<ul class="filter-btns-group button-group ul_li">
											<li><button class="button active" data-filter="*">All<sup>10</sup></button></li>
											<li><button class="button" data-filter=".creative">Web development<sup>12</sup></button></li>
											<li><button class="button" data-filter=".branding">Web design<sup>08</sup></button></li>
											<li><button class="button" data-filter=".insparation">Branding<sup>03</sup></button></li>
											<li><button class="button" data-filter=".design">SEO<sup>01</sup></button></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- breadcrumb_section - end
				================================================== -->

				<!-- blog_section - start
				================================================== -->
				<section class="blog_archive_section section_space ">
					<div class="container">
						<div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">
							<div class="col-12 col-sm-12 col-md-12 col-lg-8 ">

							<article class="blog_standard_layout">
								<div class="item_image">
									<div class="blog_image_carousel">
										<div class="slider_item">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/seo-1.jpg" alt="image_not_found">
										</div>
										<div class="slider_item">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/seo-2.jpg" alt="image_not_found">
										</div>
										<div class="slider_item">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/seo-3.jpg" alt="image_not_found">
										</div>
									</div>
									<div class="carousel_nav">
										<button type="button" class="bic_left_arrow"><i class="fal fa-long-arrow-left"></i></button>
										<button type="button" class="bic_right_arrow"><i class="fal fa-long-arrow-right"></i></button>
									</div>
								</div>
								<div class="item_content">
									<ul class="post_meta ul_li text-uppercase">
										<li>By - <a href="#!">Admin</a></li>
										<li><a href="#!">Branding</a></li>
									</ul>
									<h3 class="item_title text_effect_wrap">
										<a href="blog_single.html">
											<span class="text_effect_wrap1">
												<span class="text_effect_wrap2">
													<span class="text_effect_wrap3">Person and improve your startup</span>
												</span>
											</span>
										</a>
									</h3>
									<p>
										Northely was hardly able to cover it and seemed ready to slide off any moment his many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked what's happened to me he thought It wasn't a dream. His room proper over the horizonela
									</p>
									<a class="btn_text text-uppercase" href="blog_single.html"><span>Read More</span> <i class="fal fa-long-arrow-right"></i></a>
								</div>
							</article>

							<?php 
                if ( have_posts() ) {
                  $counter=1;
                	while ( have_posts() ) {
                		the_post(); 
                		?>
                      <article class="blog_standard_layout">
												<a class="item_image" href="<?php the_permalink(); ?>">
													<img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/tech-start-up.jpg" alt="image_not_found">
												</a>
												<div class="item_content">
													<ul class="post_meta ul_li text-uppercase">
														<li>By - <a href="#!">Admin</a></li>
														<li><a href="#!">Branding</a></li>
													</ul>
													<h3 class="item_title text_effect_wrap">
														<a href="<?php the_permalink(); ?>">
															<span class="text_effect_wrap1">
																<span class="text_effect_wrap2">
																	<span class="text_effect_wrap3"><?php the_title(); ?></span>
																</span>
															</span>
														</a>
													</h3>
													<p>
														<?php echo get_the_excerpt(); ?>
													</p>
													<a class="btn_text text-uppercase" href="<?php the_permalink(); ?>"><span>Read More</span> <i class="fal fa-long-arrow-right"></i></a>
												</div>
											</article>
                    <?php
                    $counter++;
                	} // end while
                } // end if
              ?>



								<ul class="pagination_nav ul_li">
									<li class="d-none"><a href="#!">prev</a></li>
									<li class="active"><a href="#!">1</a></li>
									<li><a href="#!">2</a></li>
									<li><a href="#!">3</a></li>
									<li><a href="#!">next</a></li>
								</ul>
							</div>

							<div class="col-12 col-sm-12 col-md-12 col-lg-4  ">
								<aside class="sidebar_section">

									<div class="sb_widget sb_category">
										<h3 class="sb_widget_title text-uppercase">Categories</h3>
										<ul class="ul_li_block">
											<li><a href="blog_category.html">Branding</a></li>
											<li><a href="blog_category.html">Art direction</a></li>
											<li><a href="blog_category.html">App development</a></li>
											<li><a href="blog_category.html">Graphic design</a></li>
										</ul>
									</div>

									<div class="sb_widget sb_recent_post">
										<h3 class="sb_widget_title text-uppercase">Recent Post</h3>
										<div class="recent_post_item">
											<h3 class="item_title">
												<a href="#!">Ransformed in his bed into a horrible vermin</a>
											</h3>
											<span class="post_date text-uppercase">25 Mar 2021</span>
										</div>
										<div class="recent_post_item">
											<h3 class="item_title">
												<a href="#!">Northely was hardly able to cover ready</a>
											</h3>
											<span class="post_date text-uppercase">25 Apr 2021</span>
										</div>
										<div class="recent_post_item">
											<h3 class="item_title">
												<a href="#!">Moment his many legs pitifully thin</a>
											</h3>
											<span class="post_date text-uppercase">25 Apr 2021</span>
										</div>
									</div>

									<div class="sb_widget sb_banner black-bg">
										<h3 class="sb_widget_title text-uppercase mb-0">Want to get useful content?</h3>
										<p >Subscribe to our blog!</p>
										<form action="#">
											<div class="form_item">
												<input type="email" name="email" placeholder="Your Email*">
											</div>
											<buton type="submit" class="btn btn_border border_dark text-uppercase" href="about.html">   Subscribe   </buton>
										</form>
									</div>

									<div class="sb_widget sb_tags">
										<h3 class="sb_widget_title text-uppercase">Tags</h3>
										<ul class="tags_primary ul_li text-uppercase">
											<li><a href="#!">Portfolio</a></li>
											<li><a href="#!">branding</a></li>
											<li><a href="#!">art</a></li>
											<li><a href="#!">philoshipy</a></li>
											<li><a href="#!">analylic</a></li>
											<li><a href="#!">services</a></li>
										</ul>
									</div>

								</aside>
							</div>
						</div>
					</div>
				</section>
				<!-- blog_section - end
				================================================== -->

			</main>
			<!-- main body - end
			================================================== -->

			<section class="title_section ">
				<div class="container">
					<h2 class="biggest_title text-center">A modern digital agency</h2>
				</div>
			</section>

		<?php get_footer(); ?>