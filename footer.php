
            </main>
            <footer class="site-footer">
                <div class="footer-disk footer-disk-1 is-moving-object is-translating" data-translating-factor="60">
                    <svg width="600" height="300" viewbox="0 0 600 300" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <linearGradient x1="100%" y1="100%" x2="-1.265%" y2="100%" id="disk-5-a">
                                <stop stop-color="#040404" stop-opacity="0" offset="0%"/>
                                <stop stop-color="#3217BB" offset="100%"/>
                            </linearGradient>
                        </defs>
                        <path d="M153 492c0-165.685 134.315-300 300-300s300 134.315 300 300H603c0-82.843-67.157-150-150-150s-150 67.157-150 150H153z" transform="translate(-153 -192)" fill="url(#disk-5-a)" fill-rule="evenodd"/>
                    </svg>
                </div>
                <div class="footer-disk footer-disk-2 is-moving-object is-translating" data-translating-factor="80">
                    <svg width="600" height="300" viewbox="0 0 600 300" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <linearGradient x1="0%" y1="100%" y2="100%" id="disk-6-a">
                                <stop stop-color="#040404" stop-opacity="0" offset="0%"/>
                                <stop stop-color="#D15680" offset="100%"/>
                            </linearGradient>
                        </defs>
                        <path d="M1153 63c0 165.685-134.315 300-300 300S553 228.685 553 63h150c0 82.843 67.157 150 150 150s150-67.157 150-150h150z" transform="translate(-553 -63)" fill="url(#disk-6-a)" fill-rule="evenodd"/>
                    </svg>
                </div>
                <div class="footer-sphere footer-sphere-1 is-moving-object is-translating" data-translating-factor="20">
                    <svg width="32" height="32" viewbox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <radialGradient cx="83.479%" cy="86.284%" fx="83.479%" fy="86.284%" r="128.926%" id="sphere-3-a">
                                <stop stop-color="#D15680" offset="0%"/>
                                <stop stop-color="#040404" stop-opacity="0" offset="100%"/>
                            </radialGradient>
                        </defs>
                        <circle cx="251" cy="433" r="16" transform="translate(-235 -417)" fill="url(#sphere-3-a)" fill-rule="evenodd"/>
                    </svg>
                </div>
                <div class="container">
                    <div class="site-footer-inner has-top-divider">
                        <div class="brand footer-brand">
                            <a href="<?php echo esc_url( get_home_url() ); ?>"> <svg width="70" height="70" viewbox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                    <defs>
                                        <linearGradient x1="100%" y1="0%" x2="0%" y2="100%" id="logo-footer-a">
                                            <stop stop-color="#FFF" stop-opacity=".48" offset="0%"/>
                                            <stop stop-color="#FFF" offset="100%"/>
                                        </linearGradient>
                                        <linearGradient x1="21.021%" y1="8.197%" y2="50%" id="logo-footer-b">
                                            <stop stop-color="#3217BB" offset="0%"/>
                                            <stop stop-color="#D15680" offset="100%"/>
                                        </linearGradient>
                                    </defs>
                                    <g fill="none" fill-rule="evenodd">
                                        <path d="M16 8h6a2 2 0 0 1 2 2v6h-6a2 2 0 0 1-2-2V8z" fill="url(#logo-footer-a)"/>
                                        <path d="M16 0v8a8 8 0 1 0 8 8h8c0 8.837-7.163 16-16 16S0 24.837 0 16 7.163 0 16 0z" fill="url(#logo-footer-b)"/>
                                    </g>
                                </svg> </a>
                        </div>
                        <?php if ( has_nav_menu( 'social' ) ) : ?>
                            <ul class="footer-links list-reset">
                                <?php
                                    PG_Smart_Walker_Nav_Menu::$options['template'] = '<li id="{ID}" class="{CLASSES}">
                                                                    <a {ATTRS}>{TITLE}</a>
                                                                </li>';
                                    wp_nav_menu( array(
                                        'menu' => 'secondary',
                                        'container' => '',
                                        'items_wrap' => '<ul class="footer-links list-reset %2$s" id="%1$s">%3$s</ul>',
                                        'walker' => new PG_Smart_Walker_Nav_Menu()
                                ) ); ?>
                            </ul>
                        <?php endif; ?>
                        <ul class="footer-social-links list-reset d-flex flex-row justify-content-center align-items-center align-content-center">
                            <li>
                                <a href="<?php echo get_theme_mod( 'footer_img1_link', '#' ); ?>"> <img src="<?php echo PG_Image::getUrl( get_theme_mod( 'footer_img1', 'http://pinegrow.com/placeholders/img15.jpg' ), 'large' ) ?>" height="50"> </a>
                            </li>
                            <li>
                                <a href="<?php echo get_theme_mod( 'footer_img2_link', '#' ); ?>"> <img src="<?php echo PG_Image::getUrl( get_theme_mod( 'footer_img2', 'http://pinegrow.com/placeholders/img15.jpg' ), 'large' ) ?>" height="50"> </a>
                            </li>
                            <li>
                                <a href="<?php echo get_theme_mod( 'footer_img3_link', '#' ); ?>"> <img src="<?php echo PG_Image::getUrl( get_theme_mod( 'footer_img3', 'http://pinegrow.com/placeholders/img15.jpg' ), 'large' ) ?>" height="50"> </a>
                            </li>
                        </ul>
                        <div class="footer-copyright">
                            <?php echo get_theme_mod( 'footer_text', __( '&copy; 2018 Florence, all rights reserved', 'Apr19' ) ); ?>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <?php wp_footer(); ?>
    </body>
</html>
