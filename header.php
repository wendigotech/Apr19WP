<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
    
    
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"><?php wp_head(); ?></head>
<body class="is-boxed <?php echo implode(' ', get_body_class()); ?>">
    <div class="body-wrap boxed-container">
        <header class="site-header">
			<div class="hero-disk hero-disk-1 is-moving-object is-translating" data-translating-factor="60">
				<svg width="600" height="300" viewbox="0 0 600 300" xmlns="http://www.w3.org/2000/svg">
				    <defs>
				        <lineargradient x1="-1.265%" y1="100%" y2="100%" id="disk-1-a">
				            <stop stop-color="#040404" stop-opacity="0" offset="0%"/>
				            <stop stop-color="#3217BB" offset="100%"/>
				        </linearGradient>
				    </defs>
				    <path d="M846 515c0-165.685 134.315-300 300-300s300 134.315 300 300h-150c0-82.843-67.157-150-150-150s-150 67.157-150 150H846z" transform="translate(-846 -215)" fill="url(#disk-1-a)" fill-rule="evenodd"/>
				</svg>
			</div>
			<div class="hero-disk hero-disk-2 is-moving-object is-translating" data-translating-factor="20">
				<svg width="600" height="300" viewbox="0 0 600 300" xmlns="http://www.w3.org/2000/svg">
				    <defs>
				        <lineargradient x1="0%" y1="100%" y2="100%" id="disk-2-a">
				            <stop stop-color="#040404" stop-opacity="0" offset="0%"/>
				            <stop stop-color="#D15680" offset="100%"/>
				        </linearGradient>
				    </defs>
				    <path d="M1153 63c0 165.685-134.315 300-300 300S553 228.685 553 63h150c0 82.843 67.157 150 150 150s150-67.157 150-150h150z" transform="translate(-553 -63)" fill="url(#disk-2-a)" fill-rule="evenodd"/>
				</svg>
            </div>
			<div class="hero-sphere hero-sphere-1 is-moving-object is-translating" data-translating-factor="10">
				<svg width="48" height="48" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
				    <defs>
				        <radialgradient cx="83.479%" cy="86.284%" fx="83.479%" fy="86.284%" r="128.926%" id="sphere-1-a">
				            <stop stop-color="#D15680" offset="0%"/>
				            <stop stop-color="#040404" stop-opacity="0" offset="100%"/>
				        </radialGradient>
				    </defs>
				    <circle cx="1522" cy="447" r="24" transform="translate(-1498 -423)" fill="url(#sphere-1-a)" fill-rule="evenodd"/>
				</svg>
			</div>
            <div class="container">
                <div class="site-header-inner">
                    <nav class="navbar navbar-expand-lg fixed-top navbar-light">                              

                            <div class="brand header-brand">
                                <h1 class="m-0"> <a href="<?php echo esc_url( get_home_url() ); ?>">
                                        <svg width="70" height="70" viewbox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                            
                                            <defs>
                                                <lineargradient x1="100%" y1="0%" x2="0%" y2="100%" id="logo-a">
                                                    <stop stop-color="#FFF" stop-opacity=".48" offset="0%"/>
                                                    <stop stop-color="#FFF" offset="100%"/>
                                                </linearGradient>
                                                <lineargradient x1="21.021%" y1="8.197%" y2="50%" id="logo-b">
                                                    <stop stop-color="#3217BB" offset="0%"/>
                                                    <stop stop-color="#D15680" offset="100%"/>
                                                </linearGradient>
                                            </defs>
                                            <g fill="none" fill-rule="evenodd">
                                                <path d="M16 8h6a2 2 0 0 1 2 2v6h-6a2 2 0 0 1-2-2V8z" fill="url(#logo-a)"/>
                                                <path d="M16 0v8a8 8 0 1 0 8 8h8c0 8.837-7.163 16-16 16S0 24.837 0 16 7.163 0 16 0z" fill="url(#logo-b)"/>
                                            </g>
                                        </svg>
                                    </a> </h1>
                            </div>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler20" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation"> 
                                <span class="navbar-toggler-icon"></span> 
                            </button>                             

                            <div class="collapse navbar-collapse" id="navbarToggler20"> 
                                <?php if ( has_nav_menu( 'primary' ) ) : ?><?php wp_nav_menu( array(
                                            'menu' => 'primary',
                                            'menu_class' => 'navbar-nav mt-lg-auto ml-auto goo',
                                            'container' => '',
                                            'fallback_cb' => 'wp_bootstrap4_navwalker::fallback',
                                            'walker' => new wp_bootstrap4_navwalker()
                                    ) ); ?><?php endif; ?>
                                                                                                  
                            </div>                             
                        </nav>
                </div><?php if ( is_active_sidebar( 'sidebar1' ) ) : ?><div class="col-md-12"><?php dynamic_sidebar( 'sidebar1' ); ?></div><?php endif; ?>
            </div>
        </header>

        <main>