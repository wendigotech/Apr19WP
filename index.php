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
                                    <div class="col-md-4">
                                        <h1><?php the_title(); ?></h1> 
                                        <?php the_content(); ?> 
                                    </div>
                                </div><div class="row">
                                    <?php
                                        $slider_args = array(
                                            'category_name' => 'slider',
                                            'nopaging' => true,
                                            'order' => 'ASC',
                                            'orderby' => 'date'
                                        )
                                    ?><?php $slider = new WP_Query( $slider_args ); ?><?php if ( $slider->have_posts() ) : ?><?php while ( $slider->have_posts() ) : $slider->the_post(); ?><div class="col-md-4">
                                        <h3><?php the_title(); ?></h3><div class="hero-browser">
                                                    <svg width="800" height="450" viewbox="0 0 800 450" xmlns="http://www.w3.org/2000/svg">
                                                        <defs>
                                                            <lineargradient x1="50%" y1="0%" x2="50%" y2="100%" id="browser-a">
                                                                <stop stop-color="#474452" offset="0%"></stop>
                                                                <stop stop-color="#363342" offset="100%"></stop>
                                                            </linearGradient>
                                                            <lineargradient x1="100%" y1="0%" x2="0%" y2="100%" id="browser-b">
                                                                <stop stop-color="#302D3B" stop-opacity=".24" offset="0%"></stop>
                                                                <stop stop-color="#302D3B" offset="100%"></stop>
                                                            </linearGradient>
                                                            <lineargradient x1="100%" y1="-12.816%" x2="0%" y2="-12.816%" id="browser-c">
                                                                <stop stop-color="#5A5667" stop-opacity="0" offset="0%"></stop>
                                                                <stop stop-color="#5A5667" offset="50.045%"></stop>
                                                                <stop stop-color="#5A5667" stop-opacity="0" offset="100%"></stop>
                                                            </linearGradient>
                                                        </defs>
                                                        <g fill="none" fill-rule="evenodd">
                                                            <rect fill="url(#browser-a)" width="800" height="450" rx="4"></rect>
                                                            <?php the_content(); ?>
                                                            <circle fill="#D15680" cx="24" cy="16" r="4"></circle>
                                                            <circle fill="#F2D084" cx="40" cy="16" r="4"></circle>
                                                            <circle fill="#84F293" cx="56" cy="16" r="4"></circle>
                                                            <path fill="#5D5B6E" d="M756 14h24v4h-24z"></path>
                                                            <path fill="url(#browser-c)" d="M47 32h706v2H47z"></path>
                                                        </g>
                                                    </svg>
                                                </div> 

                                    </div><?php endwhile; ?><?php wp_reset_postdata(); ?><?php else : ?><p><?php _e( 'Sorry, no posts matched your criteria.', 'Apr19' ); ?></p><?php endif; ?>
                                </div>
                            </div></div>
                </div>
            </div>
        </section>

        <section class="features section text-center">
            <div class="container-sm"><?php the_content(); ?></div>
        </section>

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