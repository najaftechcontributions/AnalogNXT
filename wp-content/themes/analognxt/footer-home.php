<?php
/**
 * Homepage Footer Template
 *
 * @package AnalogNXT
 */

$theme_url = get_template_directory_uri() . '/analogNXTTheme';
?>

<nav data-show-in-designer="false" data-menu-wrap="" class="nav_menu_wrap">
    <div class="nav_menu_contain u-container">
        <div class="nav_menu_grid u-grid-custom">
            <div class="nav_menu_column u-column-4">
                <div class="w-locales-list">
                    <div id="locale-list" role="list" class="locales_list w-locales-items">
                        <div role="listitem" class="w-locales-item">
                            <a data-barba-prevent="" hreflang="en" href="<?php echo esc_url( home_url( '/?r=0' ) ); ?>" class="language_link w--current">EN</a>
                        </div>
                        <div role="listitem" class="w-locales-item">
                            <a data-barba-prevent="" hreflang="vi-VN" href="<?php echo esc_url( home_url( '/vn' ) ); ?>" class="language_link">VI</a>
                        </div>
                    </div>
                </div>
                <div class="u-hide-mobile-landscape">
                    <?php
                    // Featured Project - This would typically come from a custom post type or query
                    // Placeholder for now
                    ?>
                    <button data-bunny-lightbox-control="open" data-bunny-lightbox-src="https://vz-bf52cb50-0a5.b-cdn.net/ce1749fb-077d-416a-8df8-bc32ac669c3c/playlist.m3u8" data-menu-showreel="" class="menu_showreel_btn">
                        <img src="<?php echo esc_url( $theme_url . '/images/68b811c1b18d63df71dcdb3d_b6380c74797705e6321ab3802d42210e_open-graph-image.jpg' ); ?>" loading="lazy" alt="" class="menu_showreel_image">
                        <div class="menu_showreel_btn_wrap">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 20 20" fill="none" class="u-icon-small">
                                <path fill="#fff" d="M18.5 9.134a1 1 0 0 1 0 1.732l-12 6.928a1 1 0 0 1-1.5-.866V3.072a1 1 0 0 1 1.5-.866l12 6.928Z"></path>
                            </svg>
                            <div class="u-text-style-small u-weight-bold">WATCH SHOWREEL</div>
                        </div>
                    </button>
                </div>
            </div>
            <div data-lenis-prevent="" class="nav_menu_column u-column-5">
                <ul>
                    <li class="nav_menu_link_wrap">
                        <a data-menu-item="" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-current="page" class="nav_menu_link w-inline-block w--current">
                            <div class="nav_menu_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 58 58" fill="none" class="nav_menu_icon-svg">
                                    <path fill="#fff" d="m36.756 49-4.694-4.714 11.899-11.95H0v-6.667h43.962l-11.9-11.955L36.755 9l19.912 20.001L36.756 49Z"></path>
                                </svg>
                            </div>
                            <div class="nav_menu_text">Home</div>
                        </a>
                    </li>
                    <li class="nav_menu_link_wrap">
                        <a data-menu-item="" href="<?php echo esc_url( home_url( '/about' ) ); ?>" class="nav_menu_link w-inline-block">
                            <div class="nav_menu_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 58 58" fill="none" class="nav_menu_icon-svg">
                                    <path fill="#fff" d="m36.756 49-4.694-4.714 11.899-11.95H0v-6.667h43.962l-11.9-11.955L36.755 9l19.912 20.001L36.756 49Z"></path>
                                </svg>
                            </div>
                            <div class="nav_menu_text">About</div>
                        </a>
                    </li>
                    <li class="nav_menu_link_wrap">
                        <a data-menu-item="" href="<?php echo esc_url( home_url( '/works' ) ); ?>" class="nav_menu_link w-inline-block">
                            <div class="nav_menu_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 58 58" fill="none" class="nav_menu_icon-svg">
                                    <path fill="#fff" d="m36.756 49-4.694-4.714 11.899-11.95H0v-6.667h43.962l-11.9-11.955L36.755 9l19.912 20.001L36.756 49Z"></path>
                                </svg>
                            </div>
                            <div class="nav_menu_text">Works</div>
                        </a>
                    </li>
                    <li class="nav_menu_link_wrap">
                        <a data-menu-item="" href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="nav_menu_link w-inline-block">
                            <div class="nav_menu_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 58 58" fill="none" class="nav_menu_icon-svg">
                                    <path fill="#fff" d="m36.756 49-4.694-4.714 11.899-11.95H0v-6.667h43.962l-11.9-11.955L36.755 9l19.912 20.001L36.756 49Z"></path>
                                </svg>
                            </div>
                            <div class="nav_menu_text">Services</div>
                        </a>
                    </li>
                    <li class="nav_menu_link_wrap">
                        <a data-menu-item="" href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="nav_menu_link w-inline-block">
                            <div class="nav_menu_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 58 58" fill="none" class="nav_menu_icon-svg">
                                    <path fill="#fff" d="m36.756 49-4.694-4.714 11.899-11.95H0v-6.667h43.962l-11.9-11.955L36.755 9l19.912 20.001L36.756 49Z"></path>
                                </svg>
                            </div>
                            <div class="nav_menu_text">Blog</div>
                        </a>
                    </li>
                    <li class="nav_menu_link_wrap">
                        <a data-menu-item="" href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="nav_menu_link w-inline-block">
                            <div class="nav_menu_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 58 58" fill="none" class="nav_menu_icon-svg">
                                    <path fill="#fff" d="m36.756 49-4.694-4.714 11.899-11.95H0v-6.667h43.962l-11.9-11.955L36.755 9l19.912 20.001L36.756 49Z"></path>
                                </svg>
                            </div>
                            <div class="nav_menu_text">Contact</div>
                        </a>
                    </li>
                </ul>
                <div data-menu-social="" class="footer_cta">
                    <ul class="social_link_wrap is-nav">
                        <li class="social_link_item">
                            <a rel="noopener" aria-label="Facebook" href="https://www.facebook.com/ZeitMediaVN" target="_blank" class="social_link w-inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 32 32" fill="none" class="u-icon-large u-zindex-2">
                                    <path fill="#fff" d="M29.667 16.333C29.667 8.973 23.693 3 16.333 3 8.973 3 3 8.973 3 16.333 3 22.787 7.587 28.16 13.667 29.4v-9.067H11v-4h2.667V13a4.672 4.672 0 0 1 4.666-4.667h3.334v4H19c-.733 0-1.333.6-1.333 1.334v2.666h4v4h-4V29.6c6.733-.667 12-6.347 12-13.267Z"></path>
                                </svg>
                                <div class="footer_link_bg"></div>
                            </a>
                        </li>
                        <li class="social_link_item">
                            <a rel="noopener" aria-label="Instagram" href="https://www.instagram.com/zeitmedia.vn" target="_blank" class="social_link w-inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 32 32" fill="none" class="u-icon-large u-zindex-2">
                                    <path fill="#fff" d="M16.005 12.693a3.306 3.306 0 1 0 0 6.612 3.306 3.306 0 0 0 0-6.612Zm13.24-3.267a8.668 8.668 0 0 0-.56-3.013 5.333 5.333 0 0 0-3.093-3.094 8.667 8.667 0 0 0-3.014-.56c-1.72-.093-2.226-.093-6.573-.093-4.346 0-4.853 0-6.573.093a8.667 8.667 0 0 0-3.013.56 5.333 5.333 0 0 0-3.094 3.094 8.666 8.666 0 0 0-.56 3.013c-.093 1.72-.093 2.227-.093 6.573 0 4.347 0 4.854.093 6.574a9.2 9.2 0 0 0 .56 3.026 5.2 5.2 0 0 0 1.214 1.867 5.2 5.2 0 0 0 1.88 1.213 8.663 8.663 0 0 0 3.013.56c1.72.094 2.226.094 6.573.094s4.854 0 6.573-.094a8.663 8.663 0 0 0 3.014-.56 5.2 5.2 0 0 0 1.88-1.213 5.2 5.2 0 0 0 1.213-1.867 8.8 8.8 0 0 0 .56-3.026c.093-1.72.093-2.227.093-6.574 0-4.346 0-4.853-.093-6.573Zm-3.387 10.667a7.597 7.597 0 0 1-.52 2.4 5.146 5.146 0 0 1-2.84 2.84 7.597 7.597 0 0 1-2.413.466h-8.16a7.598 7.598 0 0 1-2.413-.466 4.667 4.667 0 0 1-1.747-1.147 4.666 4.666 0 0 1-1.093-1.693 7.334 7.334 0 0 1-.453-2.414v-8.16c.014-.824.167-1.64.453-2.413a4.667 4.667 0 0 1 1.147-1.747 4.8 4.8 0 0 1 1.693-1.093 7.6 7.6 0 0 1 2.413-.467h8.16a7.6 7.6 0 0 1 2.413.467 4.667 4.667 0 0 1 1.747 1.147 4.665 4.665 0 0 1 1.093 1.693 7.6 7.6 0 0 1 .467 2.413V16c0 2.747.093 3.027.053 4.08v.014Z"></path>
                                </svg>
                                <div class="footer_link_bg"></div>
                            </a>
                        </li>
                        <li class="social_link_item">
                            <a rel="noopener" aria-label="Tiktok" href="https://www.tiktok.com/@zeitmedia.vn" target="_blank" class="social_link w-inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 32 32" fill="none" class="u-icon-large u-zindex-2">
                                    <path fill="#fff" d="M22.134 7.76A5.707 5.707 0 0 1 20.72 4H16.6v16.533a3.453 3.453 0 0 1-3.453 3.334A3.477 3.477 0 0 1 9.68 20.4c0-2.293 2.213-4.013 4.494-3.307V12.88c-4.6-.613-8.627 2.96-8.627 7.52 0 4.44 3.68 7.6 7.587 7.6 4.186 0 7.586-3.4 7.586-7.6v-8.387a9.8 9.8 0 0 0 5.733 1.84v-4.12s-2.506.12-4.32-1.973Z"></path>
                                </svg>
                                <div class="footer_link_bg"></div>
                            </a>
                        </li>
                        <li class="social_link_item">
                            <a rel="noopener" aria-label="Behance" href="https://www.behance.net/ZeitMediaVN" target="_blank" class="social_link w-inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 32 32" fill="none" class="u-icon-large u-zindex-2">
                                    <path fill="#fff" d="M13.637 15.201c.553-.278.972-.588 1.258-.923.51-.604.762-1.404.762-2.396 0-.965-.252-1.79-.755-2.482-.84-1.127-2.262-1.704-4.273-1.734H2.664v16.259h7.427c.837 0 1.612-.072 2.329-.218.717-.149 1.337-.42 1.862-.817a4.508 4.508 0 0 0 1.167-1.279c.49-.763.735-1.629.735-2.592 0-.934-.215-1.729-.642-2.382-.432-.654-1.065-1.132-1.905-1.436ZM5.95 10.49h3.587c.789 0 1.44.085 1.95.253.59.245.884.744.884 1.504 0 .682-.225 1.159-.67 1.427-.448.269-1.03.404-1.743.404H5.95V10.49Zm5.673 10.328c-.397.191-.955.286-1.67.286H5.95v-4.336h4.058c.706.005 1.257.099 1.65.274.7.316 1.049.896 1.049 1.745 0 1-.36 1.674-1.084 2.03ZM26.774 8.424h-7.063v2.024h7.063V8.424ZM29.224 16.41c-.147-.942-.47-1.77-.974-2.486-.552-.81-1.252-1.403-2.104-1.778-.849-.377-1.804-.566-2.867-.564-1.786 0-3.236.558-4.358 1.667-1.119 1.112-1.679 2.71-1.679 4.795 0 2.222.619 3.827 1.862 4.813 1.239.986 2.67 1.478 4.293 1.478 1.966 0 3.494-.585 4.586-1.752.699-.737 1.094-1.462 1.18-2.174H25.91a2.625 2.625 0 0 1-.656.827c-.454.367-1.044.55-1.768.55-.688 0-1.272-.152-1.758-.453-.804-.484-1.224-1.33-1.277-2.536h8.88c.014-1.038-.02-1.837-.106-2.387Zm-8.694.312c.116-.782.4-1.402.85-1.86.45-.458 1.087-.688 1.902-.69.752 0 1.38.216 1.892.647.505.436.79 1.067.849 1.903H20.53Z"></path>
                                </svg>
                                <div class="footer_link_bg"></div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <style>
        .nav_menu_text {
            transition: transform 0.735s cubic-bezier(0.625, 0.05, 0, 1);
            transform: translateX(-3.625rem) rotate(0.001deg);
        }

        .nav_menu_icon {
            transition: transform 0.735s cubic-bezier(0.625, 0.05, 0, 1);
            transform: scale(0) rotate(0.001deg);
            transform-origin: left;
        }

        .nav_menu_icon-svg {
            transition: transform 0.735s cubic-bezier(0.625, 0.05, 0, 1);
            transform: rotate(0.001deg);
        }

        .nav_menu_link:hover .nav_menu_text {
            transform: translateX(0.5rem) rotate(0.001deg);
        }

        .nav_menu_link:hover .nav_menu_icon {
            transform: scale(1) rotate(0.001deg);
        }

        @media screen and (max-width: 767px) {
            .nav_menu_text {
                transition: transform 0.735s cubic-bezier(0.625, 0.05, 0, 1);
                transform: translateX(-3rem) rotate(0.001deg);
            }
        }
    </style>
</nav>
