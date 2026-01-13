<?php
/**
 * Services Block
 * 
 * Can be converted to ACF block in the future
 * 
 * @package AnalogNXT
 */

$theme_url = get_template_directory_uri() . '/analogNXTTheme';

$services = array(
    array(
        'number' => '01',
        'title' => 'Events',
        'items' => array(
            'Creative event concept development',
            'Full-scale event planning and execution'
        ),
        'image' => '68d67020885f73c3326608fe_events.avif'
    ),
    array(
        'number' => '02',
        'title' => 'Integrated marketing communication',
        'items' => array(
            'Integrated marketing communication strategy development and execution',
            'Brand positioning, slogan development, and high-impact campaigns'
        ),
        'image' => '68d670207078d1331688e8ac_marcom.avif'
    ),
    array(
        'number' => '03',
        'title' => 'Creative Design',
        'items' => array(
            'Brand identity development',
            'Concept creation and design consultancy'
        ),
        'image' => '68d670202730f6dc9e99a380_CD.avif'
    ),
    array(
        'number' => '04',
        'title' => 'Production',
        'items' => array(
            'TVCs, Brand Films, and Corporate Video Production',
            'TV Show Production'
        ),
        'image' => '68d67020333b7248b8860fbf_production.avif'
    )
);
?>

<section class="services-section u-section">
    <div class="u-section-spacer"></div>
    
    <div class="section_contain">
        <div class="u-container u-grid-custom">
            <div class="about_eyebrow_wrap u-column-4">
                <div class="eyebrow_wrap">
                    <div class="eyebrow_layout">
                        <div class="eyebrow_marker"></div>
                        <div class="eyebrow_text u-text-style-main w-richtext">
                            <p>What we do</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="about_heading u-column-8">
                <h2 class="u-text-style-h2 u-margin-bottom-8">
                    We create, produce, and design experiences that make brands hit different.
                </h2>
                
                <div class="button_main_wrap" data-button>
                    <div class="clickable_wrap u-cover-absolute">
                        <a href="/services" class="clickable_link w-inline-block">
                            <span class="clickable_text u-sr-only">[ All Services ]</span>
                        </a>
                        <button type="button" class="clickable_btn">
                            <span class="clickable_text u-sr-only">[ All Services ]</span>
                        </button>
                    </div>
                    <div aria-hidden="true" class="button_main_text u-text-style-main">[ All Services ]</div>
                    <div class="button_bg"></div>
                </div>
            </div>
        </div>
        
        <div class="u-section-spacer"></div>
        
        <div class="u-display-contents">
            <div class="u-content-wrapper u-zindex-3 u-container">
                <?php foreach ($services as $service) : ?>
                    <div data-home-service class="sticky-card-wrap">
                        <div class="sticky-card">
                            <div class="services_item u-grid-custom">
                                <div class="services_number_wrap u-column-1">
                                    <div class="u-opacity-60"><?php echo esc_html($service['number']); ?></div>
                                </div>
                                
                                <div class="services_heading_wrap u-column-4">
                                    <div>
                                        <h2 class="u-text-style-h3 u-margin-bottom-4"><?php echo esc_html($service['title']); ?></h2>
                                        <div class="u-rich-text u-opacity-80 w-richtext">
                                            <ul role="list">
                                                <?php foreach ($service['items'] as $item) : ?>
                                                    <li><?php echo esc_html($item); ?></li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="services_image_wrap u-column-6">
                                    <img src="<?php echo esc_url($theme_url . '/images/' . $service['image']); ?>" 
                                         alt="<?php echo esc_attr($service['title']); ?>" 
                                         class="services_image">
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    
    <div class="u-section-spacer"></div>
</section>
