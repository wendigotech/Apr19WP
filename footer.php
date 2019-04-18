</main>

        <footer class="site-footer">
			<div class="footer-disk footer-disk-1 is-moving-object is-translating" data-translating-factor="60">
				<svg width="600" height="300" viewbox="0 0 600 300" xmlns="http://www.w3.org/2000/svg">
					<defs>
						<lineargradient x1="100%" y1="100%" x2="-1.265%" y2="100%" id="disk-5-a">
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
						<lineargradient x1="0%" y1="100%" y2="100%" id="disk-6-a">
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
						<radialgradient cx="83.479%" cy="86.284%" fx="83.479%" fy="86.284%" r="128.926%" id="sphere-3-a">
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
                        <a href="#">
							<svg width="70" height="70" viewbox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
								<title><?php _e( 'Florence', 'Apr19' ); ?></title>
								<defs>
									<lineargradient x1="100%" y1="0%" x2="0%" y2="100%" id="logo-footer-a">
										<stop stop-color="#FFF" stop-opacity=".48" offset="0%"/>
										<stop stop-color="#FFF" offset="100%"/>
									</linearGradient>
									<lineargradient x1="21.021%" y1="8.197%" y2="50%" id="logo-footer-b">
										<stop stop-color="#3217BB" offset="0%"/>
										<stop stop-color="#D15680" offset="100%"/>
									</linearGradient>
								</defs>
								<g fill="none" fill-rule="evenodd">
									<path d="M16 8h6a2 2 0 0 1 2 2v6h-6a2 2 0 0 1-2-2V8z" fill="url(#logo-footer-a)"/>
									<path d="M16 0v8a8 8 0 1 0 8 8h8c0 8.837-7.163 16-16 16S0 24.837 0 16 7.163 0 16 0z" fill="url(#logo-footer-b)"/>
								</g>
							</svg>
                        </a>
                    </div>
                    <?php if ( has_nav_menu( 'social' ) ) : ?><?php wp_nav_menu( array(
                                    'menu' => 'social',
                                    'menu_class' => 'footer-links list-reset',
                                    'container' => '',
                                    'fallback_cb' => 'wp_bootstrap4_navwalker::fallback',
                                    'walker' => new wp_bootstrap4_navwalker()
                            ) ); ?><?php endif; ?>
                    <ul class="footer-social-links list-reset">
                        <li>
                            <a href="#">
                                <span class="screen-reader-text"><?php _e( 'Facebook', 'Apr19' ); ?></span>
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" src="<?php echo wp_get_attachment_image_url( get_theme_mod( 'footer_img1' ), 'normal' ) ?>">
                                    <path d="M6.023 16L6 9H3V6h3V4c0-2.7 1.672-4 4.08-4 1.153 0 2.144.086 2.433.124v2.821h-1.67c-1.31 0-1.563.623-1.563 1.536V6H13l-1 3H9.28v7H6.023z" fill="#FFFFFF"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="screen-reader-text"><?php _e( 'Twitter', 'Apr19' ); ?></span>
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" src="<?php echo wp_get_attachment_image_url( get_theme_mod( 'footer_img2' ), 'normal' ) ?>">
                                    <path d="M16 3c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7-2.7-.1-5.2-1.4-6.8-3.4-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4C.7 7.7 1.8 9 3.3 9.3c-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H0c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4C15 4.3 15.6 3.7 16 3z" fill="#FFFFFF"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="screen-reader-text"><?php _e( 'Google', 'Apr19' ); ?></span>
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" src="<?php echo wp_get_attachment_image_url( get_theme_mod( 'footer_img3' ), 'normal' ) ?>">
                                    <path d="M7.9 7v2.4H12c-.2 1-1.2 3-4 3-2.4 0-4.3-2-4.3-4.4 0-2.4 2-4.4 4.3-4.4 1.4 0 2.3.6 2.8 1.1l1.9-1.8C11.5 1.7 9.9 1 8 1 4.1 1 1 4.1 1 8s3.1 7 7 7c4 0 6.7-2.8 6.7-6.8 0-.5 0-.8-.1-1.2H7.9z" fill="#FFFFFF"/>
                                </svg>
                            </a>
                        </li><li>
                            <a href="#">
                                <span class="screen-reader-text"><?php _e( 'Google', 'Apr19' ); ?></span>
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" src="<?php echo wp_get_attachment_image_url( get_theme_mod( 'footer_img4' ), 'normal' ) ?>">
                                    <path d="M7.9 7v2.4H12c-.2 1-1.2 3-4 3-2.4 0-4.3-2-4.3-4.4 0-2.4 2-4.4 4.3-4.4 1.4 0 2.3.6 2.8 1.1l1.9-1.8C11.5 1.7 9.9 1 8 1 4.1 1 1 4.1 1 8s3.1 7 7 7c4 0 6.7-2.8 6.7-6.8 0-.5 0-.8-.1-1.2H7.9z" fill="#FFFFFF"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                    <div class="footer-copyright"><?php echo get_theme_mod( 'footer_text' ); ?></div>
                </div>
            </div>
        </footer>
    </div>

    
<?php wp_footer(); ?></body>
</html>
