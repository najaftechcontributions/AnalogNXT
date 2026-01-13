<?php
/**
 * Stats/Parallax Block
 * 
 * Can be converted to ACF block in the future
 * 
 * @package AnalogNXT
 */

$theme_url = get_template_directory_uri() . '/analogNXTTheme';
?>

<section class="stats-section parallax-demo-row__half">
    <div data-parallax-scrub="2" 
         data-parallax="trigger" 
         data-parallax-start="-30" 
         data-parallax-end="-10" 
         class="parallax-bg">
        <img src="<?php echo esc_url($theme_url . '/images/68ee3aa36df1cc984c221657_parallax.avif'); ?>" 
             alt="Background" 
             class="parallax-img">
    </div>
    
    <div class="parallax-demo-row u-container">
        <!-- Stat 1 -->
        <div class="parallax-demo-row__third">
            <div data-parallax-end="0" 
                 data-parallax="trigger" 
                 data-parallax-disable="mobileLandscape"
                 data-parallax-start="20" 
                 class="parallax-demo-card">
                <div>
                    <div class="c-heading w-richtext u-margin-bottom-4">
                        <h2>200+</h2>
                    </div>
                    <div class="c-paragraph w-richtext u-rich-text u-max-width-20ch u-weight-bold u-line-height-large">
                        <p>Events organized for top brands and enterprises</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Stat 2 -->
        <div class="parallax-demo-row__third">
            <div data-parallax-disable="mobileLandscape" 
                 data-parallax="trigger" 
                 data-parallax-start="30"
                 data-parallax-end="-10" 
                 class="parallax-demo-card">
                <div>
                    <div class="c-heading w-richtext u-margin-bottom-4">
                        <h2>1000+</h2>
                    </div>
                    <div class="c-paragraph w-richtext u-rich-text u-max-width-20ch u-weight-bold u-line-height-large">
                        <p>Communication publications designed</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Stat 3 -->
        <div class="parallax-demo-row__third">
            <div data-parallax-disable="mobileLandscape" 
                 data-parallax="trigger" 
                 data-parallax-start="40"
                 data-parallax-end="-20" 
                 class="parallax-demo-card">
                <div>
                    <div class="c-heading w-richtext u-margin-bottom-4">
                        <h2>50+</h2>
                    </div>
                    <div class="c-paragraph w-richtext u-rich-text u-max-width-12ch u-weight-bold u-line-height-large">
                        <p>Experienced, passionate staff</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
