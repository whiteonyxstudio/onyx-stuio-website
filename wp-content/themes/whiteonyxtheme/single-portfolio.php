

<?php get_header(); ?>
			<!-- main body - start
			================================================== -->
			<main>

				<!-- breadcrumb_section - start
				================================================== -->
				<section class="breadcrumb_section case_hero_section black-bg">
					<div class="container">
						<div class="row">
							<div class="col-12 col-md-6 col-lg-7 order-2 order-md-1">
								
								<div class="section_title style_2">
									<h1 class="big_title text_effect_wrap">
										<span class="text_effect_wrap1">
											<span class="text_effect_wrap2">
												<span class="text_effect_wrap3 text-break"><?php the_title(); ?></span>
											</span>
										</span>
									</h1>
								</div>
							</div>

							<div class="col-12 col-md-6 col-lg-5 text-start order-1 order-md-2 text-md-center">
								<?php 
								$image = get_field('s06_brand_logo');
								if( !empty( $image ) ): ?>
								    <img class="case-image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								<?php endif; ?>
								
							</div>

							<div class="col-12 col-md-6 col-lg-7 order-3">

							<?php $post_id=get_the_ID();  $categories = get_the_terms( $post_id, 'project-category' ); 
								echo '<p>';
								foreach($categories as $category) {
									if( $category->count>0){
											echo '<a href="' . get_category_link($category->term_id) . '" class="button text-uppercase" >' . $category->name . '</a> / ';
									}
								}

								echo '</p>';
							?>
							</div>

							<div class="col-12 col-md-6 col-lg-5 text-start order-4">
								
								<p class="case_description">
									<?php the_field('s06_case_description'); ?>
								</p>
								<a class="btn_text btn_text_white" href="<?php the_field('s06_project_link'); ?>">
									<span><?php the_field('s06_project_link_name'); ?></span> 
									<svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M10 0V7.50063H9.16833V1.42131L0.587991 10L0 9.41015L8.57868 0.833125H2.49418V0H10Z" fill="white"></path>
									</svg>
								</a>
								
							</div>
						</div>
					</div>
				</section>
				<!-- breadcrumb_section - end
				================================================== -->


				<section class="image_section section_space px-0 pt-0 pb-0">
					<?php 
						$image = get_field('s06_full_width_image');
						if( !empty( $image ) ): ?>
					  <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>
				</section>
				

				<section class="about_section section_space">
					<div class="container">
						<div class="row">	
							<div class="col-lg-5 col-xl-4" >									
									<div class="section_title">
										<h3 class="big_title text_effect_wrap">
											<span class="text_effect_wrap1">
												<span class="text_effect_wrap2">
													<span class="text_effect_wrap3 text-break">About Project</span>
												</span>
											</span>
										</h3>
									</div>
							</div>
							<div class="col-lg-7 col-xl-8 ">
								<ul class="portfolio_details_info ul_li">
									<li>
										<h4>Date:</h4>
										<p class="mb-0"><?php the_field('s07_project_date'); ?></p>
									</li>
									<li>
										<h4>Services:</h4>
										<p class="mb-0"><?php the_field('s07_project_services'); ?></p>
									</li>
									<li>
										<h4>Client:</h4>
										<p class="mb-0"><?php the_field('s07_project_client'); ?></p>
									</li>
									<li>
										<h4>Tags:</h4>
										<p class="mb-0"><?php the_field('s07_project_tags'); ?></p>
									</li>
								</ul>
								<p class="p-0  mt-0">
										<?php the_field('s07_about_project_text'); ?>
								</p>
							</div>
						</div>
					</div>
				</section>

				<section class="case_gallery_section section_space pt-0">
					<div class="container">
						<div class="row">	
							<div class="col-12">
								<?php 
									$image = get_field('s07_about_project_main_image');
									if( !empty( $image ) ): ?>
								  <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								<?php endif; ?>
							</div>
						</div>
					</div>
				</section>


				<section class="about_section section_space">
					<div class="container">
						<div class="row">
							<div class="col-lg-5">									
								<div class="section_title ">
									<h3 class="big_title text_effect_wrap">
										<span class="text_effect_wrap1">
											<span class="text_effect_wrap2">
												<span class="text_effect_wrap3 text-break">Typoraphy</span>
											</span>
										</span>
									</h3>
								</div>
							</div>
							<div class="col-lg-7 ">
								<p><?php echo the_field('s08_typography_text'); ?></p>
							</div>
						</div>
					</div>
				</section>


				<section class="case_gallery_section section_space pt-0">
					<div class="container">
						<div class="row">	
							<div class="col-12">
								<?php 
									$typography_image = get_field('s08_typography_image');
									if( !empty( $typography_image ) ): ?>
								  <img src="<?php echo esc_url($typography_image['url']); ?>" alt="<?php echo esc_attr($typography_image['alt']); ?>" />
								<?php endif; ?>
							</div>
						</div>	
					</div>
				</section>

				
				<!-- participation_section - start
				================================================== -->
				<section class="participation_section section_space">
					<div class="container">
						<div class="row">
							
							<div class="col-12 col-lg-4 col-xl-5">
								<div class="section_title">
									<h3 class="big_title text_effect_wrap">
										<span class="text_effect_wrap1">
											<span class="text_effect_wrap2">
												<span class="text_effect_wrap3 text-break">Challanges</span>
											</span>
										</span>
									</h3>
								</div>
          		</div>

							<div class=" col-12 col-lg-8 col-xl-7">
								<p><?php the_field('s09_challanges_text'); ?></p>
								<div class="participation border-0">
								
									<?php if( have_rows('s09_challanges_list') ): ?>
									    <?php $counter=1; while( have_rows('s09_challanges_list') ): the_row(); 
									        $image = get_sub_field('image');
									        ?>
									       		<div class="participation_step">
														 <div class="participation_number">
															 <span style="color:#afed10;">0<?php echo $counter; ?>.</span>
															 <h3><?php the_sub_field('challange_name'); ?></h3>
														 </div>
														 <div class="participation_content">
															 <p><?php the_sub_field('challange_text'); ?></p>
														 </div>
														</div>
									    <?php $counter++; endwhile; ?>
									<?php endif; ?>

								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- participation_section - end
				================================================== -->


				<section class="case_gallery_section section_space pt-0">
					<div class="container">
						<div class="row">
							<?php if( have_rows('s09_images_gallery') ): ?>
							    <?php while( have_rows('s09_images_gallery') ): the_row(); 
							        $image = get_sub_field('gallery_image');
							        ?>
							        <div class="col-12 col-lg-6"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></div>
							    <?php endwhile; ?>
							<?php endif; ?>		
						
						</div>
					</div>
				</section>


				<section class="about_section  section_space">
					<div class="container">
						<div class="row">
							<div class=" col-12 col-lg-4 col-xl-5">									
								<div class="section_title ">
									<h3 class="big_title text_effect_wrap">
										<span class="text_effect_wrap1">
											<span class="text_effect_wrap2">
												<span class="text_effect_wrap3 text-break">Design</span>
											</span>
										</span>
									</h3>
								</div>
							</div>
							<div class="col-12 col-lg-8 col-xl-7">
								<p><?php the_field('s10_design_text'); ?></p>
							</div>
						</div>
					</div>
				</section>


				<section class="case_gallery_section section_space pt-0">
					<div class="container">
						<div class="row">
							<?php if( have_rows('s10_images_gallery') ): ?>
							    <?php while( have_rows('s10_images_gallery') ): the_row(); 
							        $image = get_sub_field('gallery_image');
							        ?>
							        <div class="col-12 col-lg-6"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></div>
							    <?php endwhile; ?>
							<?php endif; ?>		
						</div>
					</div>
				</section>

				<section class="about_section  section_space">
					<div class="container">
						<div class="row">
							<div class="col-lg-8">									
								<div class="section_title ">
									<h3 class="big_title text_effect_wrap">
										<span class="text_effect_wrap1">
											<span class="text_effect_wrap2">
												<span class="text_effect_wrap3 text-break"><?php the_field('s11_results_header'); ?></span>
											</span>
										</span>
									</h3>
								</div>
							</div>
							<div class="col-lg-7 offset-lg-5">
								<p><?php the_field('s11_results_text'); ?></p>
								<div class="participation border-0">
									<?php if( have_rows('s11_results_list') ): ?>
									    <?php $counter=1; while( have_rows('s11_results_list') ): the_row(); 
									        $image = get_sub_field('image');
									        ?>
									       		<div class="participation_step">
														 <div class="participation_number">
															 <span style="color:#afed10;">0<?php echo $counter; ?>.</span>
															 <h3><?php the_sub_field('challange_name'); ?></h3>
														 </div>
														 <div class="participation_content">
															 <p><?php the_sub_field('challange_text'); ?></p>
														 </div>
														</div>
									    <?php $counter++; endwhile; ?>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</section>


				<section class="case_gallery_section  section_space pt-0">
					<div class="container">
						<div class="row">
							<?php if( have_rows('s11_images_gallery') ): ?>
							    <?php while( have_rows('s11_images_gallery') ): the_row(); 
							        $image = get_sub_field('gallery_image');
							        ?>
							        <div class="col-12 col-lg-6"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></div>
							    <?php endwhile; ?>
							<?php endif; ?>	
						</div>
					</div>
				</section>

				<!-- cta_section - start
				================================================== -->
				<section class="cta_section section_space">
					<div class="container">
						<div class="row">

							<div class="col-lg-3">
								<div class="section_title style_2">
									<h2 class="small_title">
										contact us
										<span class="line"></span>
									</h2>
								</div>
							</div>
              <div class="col-lg-7">
								<div class="about_content mt-0">
									<div class="section_title style_2">
										<h3 class="big_title text_effect_wrap mb-0">
											<span class="text_effect_wrap1">
												<span class="text_effect_wrap2">
													<span class="text_effect_wrap3 text-break">Any enquiries? </span>
												</span>
											</span>
											<a href="<?php the_field('s25_agency_contact_page_link', 'option'); ?>">
												<span class="text_effect_wrap1">
													<span class="text_effect_wrap2">
														<span class="text_effect_wrap3 text-break">Get in touch now!</span>
													</span>
												</span>
											</a>
										</h3>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- cta_section - end
				================================================== -->

	
				<!-- portfolio_section - start
				================================================== -->
				<section class="portfolio_section section_space ">
					<div class="container">
						<div class="row">
							<div class="section_title ">
								<h3 class="big_title text_effect_wrap">
									<span class="text_effect_wrap1">
										<span class="text_effect_wrap2">
											<span class="text_effect_wrap3 text-break">See other Projects</span>
										</span>
									</span>
								</h3>
							</div>
						</div>
						<div class="row">
							<?php
							$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 2,'post_type' => 'portfolio', 'post__not_in' => array($post->ID) ) );
							if( $related ) foreach( $related as $post ) {
							setup_postdata($post); ?>
							  <div class="col-lg-6 col-md-6 col-sm-6">
									<a class="portfolio_fullimage_layout" href="<?php the_permalink() ?>">
										<?php  the_post_thumbnail(); ?>
										<span class="item_content">
											<strong class="item_title"><?php the_title(); ?></strong>
											<small class="item_categories text-uppercase">Brand, Design</small>
										</span>
									</a>
								</div>
							
							<?php }
							wp_reset_postdata(); ?>
						</div>
					</div>
				</section>
				<!-- portfolio_section - end
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