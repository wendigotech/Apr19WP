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
                    <div class="container">
                        <div class="hero-inner">
                            <div class="hero-browser">
                                <div class="container">
                                    <div class="row">
                                        <?php
                                            $slider_args = array(
                                                'category_name' => 'slider',
                                                'nopaging' => true,
                                                'order' => 'DESC',
                                                'orderby' => 'date'
                                            )
                                        ?>
                                        <?php $slider = new WP_Query( $slider_args ); ?>
                                        <?php if ( $slider->have_posts() ) : ?>
                                            <?php while ( $slider->have_posts() ) : $slider->the_post(); ?>
                                                <div class="col-md-12">
                                                    <h3><?php the_title(); ?></h3>
                                                    <?php the_content(); ?> 
                                                </div>
                                            <?php endwhile; ?>
                                            <?php wp_reset_postdata(); ?>
                                        <?php else : ?>
                                            <p><?php _e( 'Sorry, no posts matched your criteria.', 'Apr19' ); ?></p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="row">
                                        <?php
                                            $choice_args = array(
                                                'category_name' => 'choice',
                                                'nopaging' => true,
                                                'order' => 'DESC',
                                                'orderby' => 'date'
                                            )
                                        ?>
                                        <?php $choice = new WP_Query( $choice_args ); ?>
                                        <?php if ( $choice->have_posts() ) : ?>
                                            <?php while ( $choice->have_posts() ) : $choice->the_post(); ?>
                                                <div class="col-md-12">
                                                    <h3><?php the_title(); ?></h3>
                                                    <?php the_content(); ?> 
                                                </div>
                                            <?php endwhile; ?>
                                            <?php wp_reset_postdata(); ?>
                                        <?php else : ?>
                                            <p><?php _e( 'Sorry, no posts matched your criteria.', 'Apr19' ); ?></p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="row">
                                        <?php if ( have_posts() ) : ?>
                                            <?php while ( have_posts() ) : the_post(); ?>
                                                <div class="col-md-12">
                                                    <?php the_content(); ?> 
                                                </div>
                                            <?php endwhile; ?>
                                        <?php else : ?>
                                            <p><?php _e( 'Sorry, no posts matched your criteria.', 'Apr19' ); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="cta section">
</section>                

<?php get_footer(); ?>