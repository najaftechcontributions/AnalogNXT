<?php
/**
 * Hero Block
 * 
 * Can be converted to ACF block in the future
 * 
 * @package AnalogNXT
 */

$theme_url = get_template_directory_uri() . '/analogNXTTheme';
?>

<section class="hero-section u-section u-min-height-screen u-zindex-3">
    <div class="u-section-spacer"></div>
    
    <div class="home_hero_contain u-container">
        <!-- Background Video -->
        <div data-player-activated="false" 
             data-bunny-background-init=""
             data-player-src="https://vz-bf52cb50-0a5.b-cdn.net/ce1749fb-077d-416a-8df8-bc32ac669c3c/playlist.m3u8"
             data-player-status="idle" 
             data-player-lazy="false" 
             data-player-autoplay="true" 
             class="bunny-bg">
            
            <video preload="auto" width="1920" height="1080" playsinline muted class="bunny-bg__video"></video>
            
            <img src="<?php echo esc_url($theme_url . '/images/692f05c4b38ee040469f3443_main.avif'); ?>" 
                 alt="Hero Background" 
                 class="bunny-bg__placeholder">
            
            <div data-player-control="playpause" class="bunny-bg__playpause">
                <div class="bunny-bg__btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 24 24" fill="none" class="bunny-bg__pause-svg">
                        <path d="M16 5V19" stroke="currentColor" stroke-width="3" stroke-miterlimit="10"></path>
                        <path d="M8 5V19" stroke="currentColor" stroke-width="3" stroke-miterlimit="10"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 24 24" fill="none" class="bunny-bg__play-svg">
                        <path d="M6 12V5.01109C6 4.05131 7.03685 3.4496 7.87017 3.92579L14 7.42855L20.1007 10.9147C20.9405 11.3945 20.9405 12.6054 20.1007 13.0853L14 16.5714L7.87017 20.0742C7.03685 20.5503 6 19.9486 6 18.9889V12Z" fill="currentColor"></path>
                    </svg>
                </div>
            </div>
            
            <div class="bunny-bg__loading">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="bunny-bg__loading-svg" fill="none">
                    <path fill="currentColor" d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
                        <animateTransform attributeName="transform" attributeType="XML" type="rotate" dur="1s" from="0 50 50" to="360 50 50" repeatCount="indefinite"></animateTransform>
                    </path>
                </svg>
            </div>
        </div>
        
        <!-- Hero Title and Featured Project -->
        <div class="home_hero_title_wrap u-grid-custom">
            <div class="home_title_column u-column-8 u-zindex-2">
                <h1 class="u-text-style-h1">Art Comes First — Creative Aboves All</h1>
            </div>
            
            <div class="home_featured_column u-column-4 w-dyn-list">
                <div class="u-width-full w-dyn-items">
                    <div class="w-dyn-item">
                        <a href="/work/campaign-we-got-you" class="featured_link w-inline-block">
                            <img src="<?php echo esc_url($theme_url . '/images/691e079bbb08c7d95e21ce95_558668654_122111472849000964_2632479379113715627_n.avif'); ?>" 
                                 alt="Featured Project" 
                                 class="featured_image">
                            <div class="featured_info_wrap">
                                <div class="featured_info_text">New Project</div>
                                <div class="featured_cs_title">CAMPAIGN "WE GOT YOU"</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Hero Bottom Links -->
        <div class="home_hero_bottom_wrap">
            <div class="home_hero_bottom u-grid-custom">
                <div class="home_hero_bottom_left u-column-4">
                    <a href="https://www.instagram.com/zeitmedia.vn" target="_blank" class="link w-inline-block">
                        <div>IG</div>
                    </a>
                    <div class="text-divider">/</div>
                    <a href="https://www.facebook.com/ZeitMediaVN" target="_blank" class="link w-inline-block">
                        <div>FB</div>
                    </a>
                    <div class="text-divider">/</div>
                    <a href="https://www.behance.net/ZeitMediaVN" target="_blank" class="link w-inline-block">
                        <div>BEHANCE</div>
                    </a>
                </div>
                
                <div class="home_hero_bottom_center u-column-4">
                    <a href="/works" class="link w-inline-block">
                        <div>[ALL WORKS]</div>
                    </a>
                </div>
                
                <div class="home_hero_bottom_right u-column-4">
                    <button data-bunny-lightbox-control="open"
                            data-bunny-lightbox-src="https://vz-bf52cb50-0a5.b-cdn.net/ce1749fb-077d-416a-8df8-bc32ac669c3c/playlist.m3u8"
                            class="link">
                        <div>[SHOW REEL]</div>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
