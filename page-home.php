<?php
get_header(); ?>

        <section class="hero text-center">
<div class="hero-disk hero-disk-3 is-moving-object is-translating" data-translating-factor="90">
	<svg width="600" height="300" viewbox="0 0 600 300" xmlns="http://www.w3.org/2000/svg">
		<defs>
			<lineargradient x1="100%" y1="100%" x2="-1.265%" y2="100%" id="disk-3-a">
				<stop stop-color="#040404" stop-opacity="0" offset="0%"/>
				<stop stop-color="#3217BB" offset="100%"/>
			</linearGradient>
		</defs>
		<path d="M153 492c0-165.685 134.315-300 300-300s300 134.315 300 300H603c0-82.843-67.157-150-150-150s-150 67.157-150 150H153z" transform="translate(-153 -192)" fill="url(#disk-3-a)" fill-rule="evenodd"/>
	</svg>
</div>
<div class="hero-disk hero-disk-4 is-moving-object is-translating" data-translating-factor="50">
	<svg width="600" height="300" viewbox="0 0 600 300" xmlns="http://www.w3.org/2000/svg">
	    <defs>
	        <lineargradient x1="0%" y1="100%" y2="100%" id="disk-4-a">
	            <stop stop-color="#040404" stop-opacity="0" offset="0%"/>
	            <stop stop-color="#D15680" offset="100%"/>
	        </linearGradient>
	    </defs>
	    <path d="M817 687c0 165.685-134.315 300-300 300S217 852.685 217 687h150c0 82.843 67.157 150 150 150s150-67.157 150-150h150z" transform="translate(-217 -687)" fill="url(#disk-4-a)" fill-rule="evenodd"/>
	</svg>
</div>
<div class="hero-sphere hero-sphere-2 is-moving-object is-translating" data-translating-factor="30">
	<svg width="32" height="32" viewbox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
	    <defs>
	        <radialgradient cx="83.479%" cy="86.284%" fx="83.479%" fy="86.284%" r="128.926%" id="sphere-2-a">
	            <stop stop-color="#3217BB" offset="0%"/>
	            <stop stop-color="#040404" stop-opacity="0" offset="100%"/>
	        </radialGradient>
	    </defs>
	    <circle cx="251" cy="433" r="16" transform="translate(-235 -417)" fill="url(#sphere-2-a)" fill-rule="evenodd"/>
	</svg>
</div>
            <div class="container-sm">
                <div class="hero-inner">



                    <div class="hero-browser">

                    <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h1><?php bloginfo( 'name' ); ?></h1> 
                                        <p><?php bloginfo( 'description' ); ?></p> 
                                    </div>
                                </div><div class="row">
                                    <?php
                                        $slider_args = array(
                                            'category_name' => 'slider',
                                            'nopaging' => true,
                                            'order' => 'DESC',
                                            'orderby' => 'date'
                                        )
                                    ?><?php $slider = new WP_Query( $slider_args ); ?><?php if ( $slider->have_posts() ) : ?><?php while ( $slider->have_posts() ) : $slider->the_post(); ?><div class="col-md-12">
                                        <h3><?php the_title(); ?></h3><?php the_content(); ?> 

                                    </div><?php endwhile; ?><?php wp_reset_postdata(); ?><?php else : ?><p><?php _e( 'Sorry, no posts matched your criteria.', 'Apr19' ); ?></p><?php endif; ?>
                                </div>
                            </div></div>
                </div>
            </div>
        </section>

        <?php if ( have_posts() ) : ?><?php while ( have_posts() ) : the_post(); ?><section <?php post_class( 'features section text-center' ); ?> id="post-<?php the_ID(); ?>">
            <div class="container-sm">
                <div class="features-inner section-inner has-bottom-divider">
                    <div class="features-wrap">
                        <div class="feature">
                            <div class="feature-inner">
                                <div class="feature-icon">
						<svg width="64" height="64" xmlns="http://www.w3.org/2000/svg">
						    <defs>
						        <lineargradient x1="16.65%" y1="87.231%" x2="90.35%" y2="8.197%" id="feature-1-a">
						            <stop stop-color="#3217BB" offset="0%"/>
						            <stop stop-color="#D15680" offset="100%"/>
						        </linearGradient>
						        <lineargradient x1="100%" y1="100%" x2="0%" y2="0%" id="feature-1-b">
						            <stop stop-color="#FFF" stop-opacity=".48" offset="0%"/>
						            <stop stop-color="#FFF" stop-opacity=".24" offset="100%"/>
						        </linearGradient>
						    </defs>
						    <g fill="none" fill-rule="evenodd">
						        <path fill="url(#feature-1-a)" d="M64 32v32H32V32H0V0h32v32z"/>
						        <path fill="url(#feature-1-b)" d="M16 16h32v32H16z"/>
						    </g>
						</svg>
                                </div>
                                <h3 class="feature-title mt-24"><?php _e( 'Feature', 'Apr19' ); ?></h3>
                                <p class="text-sm"><?php _e( 'A pseudo-Latin text used in web design, layout, and printing in place of English to emphasise design elements.', 'Apr19' ); ?></p>
                            </div>
                        </div>
                        <div class="feature">
                            <div class="feature-inner">
                                <div class="feature-icon">
						<svg width="64" height="64" xmlns="http://www.w3.org/2000/svg">
						    <defs>
						        <lineargradient x1="16.65%" y1="87.231%" x2="90.35%" y2="8.197%" id="feature-2-a">
						            <stop stop-color="#3217BB" offset="0%"/>
						            <stop stop-color="#D15680" offset="100%"/>
						        </linearGradient>
						        <lineargradient x1="100%" y1="100%" x2="0%" y2="0%" id="feature-2-b">
						            <stop stop-color="#FFF" stop-opacity=".48" offset="0%"/>
						            <stop stop-color="#FFF" stop-opacity=".24" offset="100%"/>
						        </linearGradient>
						    </defs>
						    <g fill="none" fill-rule="evenodd">
						        <path d="M32 64C14.327 64 0 49.673 0 32 0 14.327 14.327 0 32 0c17.673 0 32 14.327 32 32 0 17.673-14.327 32-32 32zm0-16c8.837 0 16-7.163 16-16s-7.163-16-16-16-16 7.163-16 16 7.163 16 16 16z" fill="url(#feature-2-a)"/>
						        <path fill="url(#feature-2-b)" d="M0 0h32v32H0z"/>
						    </g>
						</svg>
                                </div>
                                <h3 class="feature-title mt-24"><?php _e( 'Feature', 'Apr19' ); ?></h3>
                                <p class="text-sm"><?php _e( 'A pseudo-Latin text used in web design, layout, and printing in place of English to emphasise design elements.', 'Apr19' ); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="features-wrap">
                        <div class="feature">
                            <div class="feature-inner">
                                <div class="feature-icon">
						<svg width="64" height="64" xmlns="http://www.w3.org/2000/svg">
						    <defs>
						        <lineargradient x1="50%" y1="0%" x2="50%" y2="100%" id="feature-3-a">
						            <stop stop-color="#3217BB" offset="0%"/>
						            <stop stop-color="#D15680" offset="100%"/>
						        </linearGradient>
						    </defs>
						    <g fill="none" fill-rule="evenodd">
						        <path d="M0 32h32V0c17.673 0 32 14.327 32 32 0 17.673-14.327 32-32 32C14.327 64 0 49.673 0 32z" fill="url(#feature-3-a)"/>
						        <path fill-opacity=".32" fill="#FFF" d="M32 32h32v32H32z"/>
						    </g>
						</svg>
                                </div>
                                <h3 class="feature-title mt-24"><?php _e( 'Feature', 'Apr19' ); ?></h3>
                                <p class="text-sm"><?php _e( 'A pseudo-Latin text used in web design, layout, and printing in place of English to emphasise design elements.', 'Apr19' ); ?></p>
                            </div>
                        </div>
                        <div class="feature">
                            <div class="feature-inner">
                                <div class="feature-icon">
						<svg width="64" height="64" xmlns="http://www.w3.org/2000/svg">
						    <defs>
						        <lineargradient x1="50%" y1="0%" x2="50%" y2="100%" id="feature-4-a">
						            <stop stop-color="#3217BB" offset="0%"/>
						            <stop stop-color="#D15680" offset="100%"/>
						        </linearGradient>
						    </defs>
						    <g fill="none" fill-rule="evenodd">
						        <path d="M64 32H32V0c17.673 0 32 14.327 32 32z" fill="url(#feature-4-a)"/>
						        <path d="M32 64H0V32c17.673 0 32 14.327 32 32z" fill="url(#feature-4-a)" transform="rotate(180 16 48)"/>
						        <path fill-opacity=".32" fill="#FFF" d="M16 16h32v32H16z"/>
						    </g>
						</svg>
                                </div>
                                <h3 class="feature-title mt-24"><?php _e( 'Feature', 'Apr19' ); ?></h3>
                                <p class="text-sm"><?php _e( 'A pseudo-Latin text used in web design, layout, and printing in place of English to emphasise design elements.', 'Apr19' ); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><?php endwhile; ?><?php else : ?><p><?php _e( 'Sorry, no posts matched your criteria.', 'Apr19' ); ?></p><?php endif; ?>

        <section class="cta section">
            <div class="container-sm">
                <div class="cta-inner section-inner">
                    <div class="cta-content text-center">
                        <h2 class="section-title mt-0"><?php _e( 'Stay in the know', 'Apr19' ); ?></h2>
                        <p class="section-paragraph"><?php _e( 'Lorem ipsum is common placeholder text used to demonstrate the graphic elements of a document or visual presentation.', 'Apr19' ); ?></p>
			<div class="section-cta">
				<a class="button button-primary button-shadow" href="#"><?php _e( 'Get early access', 'Apr19' ); ?></a>
			</div>
		</div>
                </div>
            </div>
        </section>


<?php get_footer(); ?>