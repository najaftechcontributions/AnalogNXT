<?php
/**
 * Final CTA Block
 * 
 * Can be converted to ACF block in the future
 * 
 * @package AnalogNXT
 */

$theme_url = get_template_directory_uri() . '/analogNXTTheme';
?>

<section class="final-cta-section section_cta u-section">
    <div class="cta_wrap u-container">
        <div class="_3d_heading_wrap">
            <div class="_3d_heading">Let's</div>
            <div class="_3d_heading">Create</div>
        </div>
        <div class="_3d_heading_wrap">
            <div class="_3d_heading">Something</div>
        </div>
        <div class="_3d_heading_wrap is-last">
            <div class="_3d_heading">Extraordinary</div>
        </div>
    </div>
    
    <div class="_3d_wrap">
        <div class="_3d_canvas">
            <canvas id="canvas3d" class="_3d_absolute hide-mobile"></canvas>
            <video src="<?php echo esc_url($theme_url . '/media/3d-zeit.mp4'); ?>" 
                   autoplay 
                   loop 
                   muted 
                   playsinline 
                   class="_3d_absolute_mobile"></video>
        </div>
    </div>
</section>
