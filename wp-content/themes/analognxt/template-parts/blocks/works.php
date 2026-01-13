<?php
/**
 * Works/Portfolio Block
 * 
 * Can be converted to ACF block in the future
 * 
 * @package AnalogNXT
 */

$theme_url = get_template_directory_uri() . '/analogNXTTheme';

$works = array(
    array(
        'title' => 'HANOI CONVENTION',
        'client' => 'Ministry of Public Security',
        'year' => '2025',
        'category' => 'Events',
        'link' => '/work/hanoi-convention',
        'image' => '691e117fe3f9d636a04d2d86_z7156631364795_53c865ad0c0e608f5fd3ec24e2311fd3-min.avif'
    ),
    array(
        'title' => 'REALITY TV SHOWS THE BRAVE WARRIOR',
        'client' => 'Ministry of Public Security',
        'year' => '2025',
        'category' => 'Production',
        'link' => '/work/reality-tv-shows-the-brave-warrior',
        'image' => '691d7798bbe72104cbb57d05_503229610_122108103626885664_7718728219984834969_n.avif'
    ),
    array(
        'title' => 'MSB PRIVATE CONCERT: TÂM THỨC TINH HOA',
        'client' => 'MSB',
        'year' => '2025',
        'category' => 'Events',
        'link' => '/work/msb-private-concert-tam-thuc-tinh-hoa',
        'image' => '691d45f7b4527762d84ce9d8_486004484_1127650026054359_3544324425917187362_n.avif'
    ),
    array(
        'title' => 'VINH QUANG CÔNG AN NHÂN DÂN VIỆT NAM',
        'client' => 'The Department of Political Affairs, Ministry of Public Security',
        'year' => '2025',
        'category' => 'Events',
        'link' => '/work/vinh-quang-cong-an-nhan-dan-viet-nam',
        'image' => '6911a6ea9472df51140dcb6e_505825560_1190158439803517_505169011610398929_n.avif'
    ),
    array(
        'title' => 'TVC VIETINBANK PREMIUM "SỐNG TRỌN TINH HOA"',
        'client' => 'VietinBank Premium',
        'year' => '2025',
        'category' => 'Production',
        'link' => '/work/tvc-vietinbank-premiun-song-tron-tinh-hoa',
        'image' => '6911c00e60f54aec498d521a_VTB_KVTVC%281920x1080%29-min.webp'
    ),
    array(
        'title' => 'THE EXHIBITION "95 YEARS OF THE PARTY FLAG LIGHTING THE WAY"',
        'client' => 'CPV Central Commission for Propaganda and Education',
        'year' => '2025',
        'category' => 'Events',
        'link' => '/work/exhibition-95-years-beneath-the-partys-flag',
        'image' => '691cafb54d9be3f2223f6e49_B%E1%BA%A3n%20sao%20c%E1%BB%A7a%20BUDD4811.avif'
    )
);
?>

<section class="works-section u-section u-zindex-3">
    <div class="u-section-spacer"></div>
    
    <div class="u-container">
        <div>
            <div class="eyebrow_wrap u-margin-bottom-4">
                <div class="eyebrow_layout">
                    <div class="eyebrow_marker"></div>
                    <div class="eyebrow_text u-text-style-main w-richtext">
                        <p>Our Works</p>
                    </div>
                </div>
            </div>
            <h2 class="u-text-style-h2 u-margin-bottom-6">Selected Cases</h2>
        </div>
        
        <div class="home_work_component w-dyn-list">
            <div class="home_work_grid u-grid-custom w-dyn-items">
                <?php foreach ($works as $work) : ?>
                    <div class="home_work_item u-column-3 w-dyn-item">
                        <a href="<?php echo esc_url($work['link']); ?>" class="work_item w-inline-block">
                            <div class="work_image_wrap">
                                <img src="<?php echo esc_url($theme_url . '/images/' . $work['image']); ?>" 
                                     alt="<?php echo esc_attr($work['title']); ?>" 
                                     class="u-cover-absolute">
                            </div>
                            
                            <div class="work_item_info">
                                <div>
                                    <div class="work_info_wrap">
                                        <div><?php echo esc_html($work['year']); ?></div>
                                        <div><?php echo esc_html($work['category']); ?></div>
                                    </div>
                                    <div>
                                        <div class="cs_client u-text-style-large u-text-trim-off">
                                            <?php echo esc_html($work['title']); ?>
                                        </div>
                                        <div class="cs_title u-text-trim-off">
                                            <?php echo esc_html($work['client']); ?>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="cs_btn_wrap">
                                    <div class="cs_btn_text">View Case</div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 24 24" fill="none" class="u-icon-medium u-zindex-1">
                                        <path fill="#000" d="m13.895 16.5-1.056-1.06 2.677-2.69H5.625v-1.5h9.892l-2.678-2.69 1.056-1.06 4.48 4.5-4.48 4.5Z"></path>
                                    </svg>
                                    <div class="cs_btn_bg"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        
        <div class="u-alignment-center u-margin-top-5">
            <div class="button_main_wrap" data-button>
                <div class="clickable_wrap u-cover-absolute">
                    <a href="/works" class="clickable_link w-inline-block">
                        <span class="clickable_text u-sr-only">[ All Projects ]</span>
                    </a>
                    <button type="button" class="clickable_btn">
                        <span class="clickable_text u-sr-only">[ All Projects ]</span>
                    </button>
                </div>
                <div aria-hidden="true" class="button_main_text u-text-style-main">[ All Projects ]</div>
                <div class="button_bg"></div>
            </div>
        </div>
    </div>
    
    <div class="u-section-spacer"></div>
</section>
