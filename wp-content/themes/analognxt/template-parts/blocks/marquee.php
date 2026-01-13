<?php
/**
 * Marquee Block
 * 
 * Can be converted to ACF block in the future
 * 
 * @package AnalogNXT
 */

$theme_url = get_template_directory_uri() . '/analogNXTTheme';
?>

<section class="marquee-section u-section u-zindex-2">
    <div class="u-section-spacer"></div>
    
    <!-- Marquee Row 1 -->
    <div data-marquee-duplicate="2"
         data-marquee-direction="right"
         data-marquee-status="normal"
         data-marquee-speed="15"
         data-marquee-scroll-speed="10"
         class="marquee-advanced">
        <div class="marquee-advanced__scroll">
            <div class="marquee-advanced__collection">
                <p class="marquee__advanced__p">Be different.</p>
                <div class="home_marquee_image_wrap">
                    <img src="<?php echo esc_url($theme_url . '/images/68c8f23224ac0da127d2d801_Rectangle%2038.avif'); ?>"
                         alt="Marquee Image"
                         class="u-cover-absolute">
                </div>
                <p class="marquee__advanced__p">Lead Boldly.</p>
                <div class="home_marquee_image_wrap">
                    <img src="<?php echo esc_url($theme_url . '/images/692f05c4b38ee040469f3443_main.avif'); ?>"
                         alt="Marquee Image"
                         class="u-cover-absolute">
                </div>
            </div>
            <!-- Duplicated content for seamless loop -->
            <div class="marquee-advanced__collection" aria-hidden="true">
                <p class="marquee__advanced__p">Be different.</p>
                <div class="home_marquee_image_wrap">
                    <img src="<?php echo esc_url($theme_url . '/images/68c8f23224ac0da127d2d801_Rectangle%2038.avif'); ?>"
                         alt=""
                         class="u-cover-absolute">
                </div>
                <p class="marquee__advanced__p">Lead Boldly.</p>
                <div class="home_marquee_image_wrap">
                    <img src="<?php echo esc_url($theme_url . '/images/692f05c4b38ee040469f3443_main.avif'); ?>"
                         alt=""
                         class="u-cover-absolute">
                </div>
            </div>
            <!-- Second duplicate for smoother loop -->
            <div class="marquee-advanced__collection" aria-hidden="true">
                <p class="marquee__advanced__p">Be different.</p>
                <div class="home_marquee_image_wrap">
                    <img src="<?php echo esc_url($theme_url . '/images/68c8f23224ac0da127d2d801_Rectangle%2038.avif'); ?>"
                         alt=""
                         class="u-cover-absolute">
                </div>
                <p class="marquee__advanced__p">Lead Boldly.</p>
                <div class="home_marquee_image_wrap">
                    <img src="<?php echo esc_url($theme_url . '/images/692f05c4b38ee040469f3443_main.avif'); ?>"
                         alt=""
                         class="u-cover-absolute">
                </div>
            </div>
        </div>
    </div>
    
    <!-- Marquee Row 2 -->
    <div data-marquee-duplicate="2"
         data-marquee-direction="left"
         data-marquee-status="normal"
         data-marquee-speed="15"
         data-marquee-scroll-speed="10"
         class="marquee-advanced">
        <div class="marquee-advanced__scroll u-text-trim-off">
            <div class="marquee-advanced__collection">
                <p class="marquee__advanced__p">That's the Zeit way</p>
                <div class="home_marquee_image_wrap">
                    <img src="<?php echo esc_url($theme_url . '/images/68c8f23224ac0da127d2d803_image%201113.avif'); ?>"
                         alt="Marquee Image"
                         class="u-cover-absolute">
                </div>
                <p class="marquee__advanced__p">Lead Boldly.</p>
                <div class="home_marquee_image_wrap">
                    <img src="<?php echo esc_url($theme_url . '/images/6928001b98c98b15b48a12d5_haniff%201.avif'); ?>"
                         alt="Marquee Image"
                         class="u-cover-absolute">
                </div>
            </div>
            <!-- Duplicated content for seamless loop -->
            <div class="marquee-advanced__collection" aria-hidden="true">
                <p class="marquee__advanced__p">That's the Zeit way</p>
                <div class="home_marquee_image_wrap">
                    <img src="<?php echo esc_url($theme_url . '/images/68c8f23224ac0da127d2d803_image%201113.avif'); ?>"
                         alt=""
                         class="u-cover-absolute">
                </div>
                <p class="marquee__advanced__p">Lead Boldly.</p>
                <div class="home_marquee_image_wrap">
                    <img src="<?php echo esc_url($theme_url . '/images/6928001b98c98b15b48a12d5_haniff%201.avif'); ?>"
                         alt=""
                         class="u-cover-absolute">
                </div>
            </div>
            <!-- Second duplicate for smoother loop -->
            <div class="marquee-advanced__collection" aria-hidden="true">
                <p class="marquee__advanced__p">That's the Zeit way</p>
                <div class="home_marquee_image_wrap">
                    <img src="<?php echo esc_url($theme_url . '/images/68c8f23224ac0da127d2d803_image%201113.avif'); ?>"
                         alt=""
                         class="u-cover-absolute">
                </div>
                <p class="marquee__advanced__p">Lead Boldly.</p>
                <div class="home_marquee_image_wrap">
                    <img src="<?php echo esc_url($theme_url . '/images/6928001b98c98b15b48a12d5_haniff%201.avif'); ?>"
                         alt=""
                         class="u-cover-absolute">
                </div>
            </div>
        </div>
    </div>
    
    <!-- Scaling Video -->
    <div class="scaling-element__small-box">
        <div class="scaling-video__before is-1"></div>
        <div data-flip-element="wrapper" class="scaling-video__wrapper">
            <div data-flip-element="target" class="scaling-video">
                <video src="<?php echo esc_url($theme_url . '/media/COVER%20FINAL%202.mp4'); ?>" 
                       autoplay 
                       loop 
                       muted 
                       playsinline 
                       class="u-height-full u-zindex-1"></video>
                <div class="scaling-video-overlay"></div>
            </div>
        </div>
    </div>
    
    <div class="u-section-spacer"></div>
</section>
