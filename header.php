<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <link rel="shortcut icon" href="<?php the_field('logo_mini-img'); ?>" type="image/x-icon">
    <title> THE TASTEAT Restaurant</title>

    <?php wp_head (); ?>

</head>

<body>
    <div class="wrapper">
        <main class="page">
            <header class="header">
                <div class="container">
                    <div class="header__top">
                        <a class="header__top-call-button"
                            href="tel:<?php the_field('phone_number'); ?>"><?php the_field('phone_content-header'); ?></a>
                        <div class="logo">
                            <?php
                        $logo_img = '';
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        if( $custom_logo_id ){
                            $logo_img = wp_get_attachment_image( $custom_logo_id, 'full', false, array(
                                'class'    => 'logo__img'
                            ) );
                        }   
                        echo $logo_img;
                        ?>
                        </div>
                        <a class="header__top-reservation-button" href="#form">Reservation</a>
                        <div class="burger-menu">
                            <span class="burger-menu__text">Menu</span>
                        </div>
                        <nav class="menu-mobile">
                            <ul class="menu-mobile__list">
                                <li class="menu-mobile__item">
                                    <a class="menu-mobile__call-button"
                                        href="tel:<?php the_field('phone_number'); ?>"><?php the_field('phone_content-header'); ?></a>
                                </li>
                                <li class="menu-mobile__item <?php the_field('menu_item1-status'); ?>">
                                    <a href="#home"><?php the_field('menu_item-title1'); ?></a>
                                </li>
                                <li class="menu-mobile__item <?php the_field('menu_item2-status'); ?>">
                                    <a href="#about-us"><?php the_field('menu_item-title2'); ?></a>
                                </li>
                                <li class="menu-mobile__item <?php the_field('menu_item3-status'); ?>">
                                    <a href="#main-menu"><?php the_field('menu_item-title3'); ?></a>
                                </li>
                                <li
                                    class="menu-mobile__item <?php the_field('menu_item4-status'); ?> menu-mobile__item--submenu">
                                    <span><?php the_field('menu_item-title4'); ?></span>
                                    <ul class="menu-mobile__submenu-list">
                                        <li
                                            class="menu-mobile__submenu-item <?php the_field('menu_subitem1-status'); ?>">
                                            <a href="#reviews"><?php the_field('submenu_item1'); ?></a>
                                        </li>
                                        <li
                                            class="menu-mobile__submenu-item <?php the_field('menu_subitem2-status'); ?>">
                                            <a href="#offers"><?php the_field('submenu_item2'); ?></a>
                                        </li>
                                        <li
                                            class="menu-mobile__submenu-item <?php the_field('menu_subitem3-status'); ?>">
                                            <a href="#popular-dishes"><?php the_field('submenu_item3'); ?></a>
                                        </li>
                                        <li
                                            class="menu-mobile__submenu-item <?php the_field('menu_subitem4-status'); ?>">
                                            <a href="#services"><?php the_field('submenu_item4'); ?></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-mobile__item <?php the_field('menu_item5-status'); ?>">
                                    <a href="#blog"><?php the_field('menu_item-title5'); ?></a>
                                </li>
                                <li class="menu-mobile__item <?php the_field('menu_item6-status'); ?>">
                                    <a href="#contact-us"><?php the_field('menu_item-title6'); ?></a>
                                </li>
                                <li class="menu-mobile__item social-bar menu-mobile__item--social-bar">
                                    <a href="<?php the_field('instagram_link'); ?>">
                                        <svg class="social-bar__icon" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="23" viewBox="0 0 24 23" fill="none">
                                            <g clip-path="url(#clip0_2_68)">
                                                <path
                                                    d="M16.7342 1.89566C18.0385 1.89941 19.2882 2.4 20.2104 3.2881C21.1327 4.17619 21.6525 5.37963 21.6564 6.63559V16.1144C21.6525 17.3704 21.1327 18.5738 20.2104 19.4619C19.2882 20.35 18.0385 20.8506 16.7342 20.8543H6.8908C5.58654 20.8506 4.33682 20.35 3.41456 19.4619C2.49231 18.5738 1.97247 17.3704 1.96857 16.1144V6.63559C1.97247 5.37963 2.49231 4.17619 3.41456 3.2881C4.33682 2.4 5.58654 1.89941 6.8908 1.89566H16.7342ZM16.7342 0H6.8908C3.10078 0 0 2.98594 0 6.63559V16.1144C0 19.7641 3.10078 22.75 6.8908 22.75H16.7342C20.5242 22.75 23.625 19.7641 23.625 16.1144V6.63559C23.625 2.98594 20.5242 0 16.7342 0Z"
                                                    fill="white" />
                                                <path
                                                    d="M18.2108 6.63574C17.9187 6.63574 17.6332 6.55235 17.3904 6.39611C17.1476 6.23988 16.9584 6.01781 16.8466 5.758C16.7348 5.49818 16.7056 5.21229 16.7626 4.93647C16.8195 4.66066 16.9602 4.4073 17.1667 4.20845C17.3732 4.0096 17.6363 3.87418 17.9227 3.81931C18.2091 3.76445 18.506 3.79261 18.7758 3.90023C19.0456 4.00784 19.2762 4.19009 19.4385 4.42392C19.6007 4.65774 19.6873 4.93265 19.6873 5.21387C19.6877 5.4007 19.6498 5.58578 19.5758 5.75847C19.5017 5.93116 19.393 6.08807 19.2558 6.22018C19.1186 6.35229 18.9556 6.45701 18.7763 6.52833C18.597 6.59964 18.4048 6.63614 18.2108 6.63574ZM11.8125 7.58332C12.5913 7.58332 13.3526 7.80571 14.0002 8.22236C14.6477 8.63901 15.1524 9.23122 15.4504 9.92408C15.7485 10.617 15.8264 11.3794 15.6745 12.1149C15.5226 12.8505 15.1476 13.5261 14.5969 14.0564C14.0462 14.5867 13.3445 14.9478 12.5807 15.0941C11.8169 15.2404 11.0251 15.1654 10.3056 14.8784C9.5861 14.5914 8.97112 14.1054 8.53844 13.4818C8.10577 12.8582 7.87483 12.1251 7.87483 11.3752C7.87594 10.3698 8.29116 9.40599 9.02938 8.69511C9.76759 7.98424 10.7685 7.5844 11.8125 7.58332ZM11.8125 5.68766C10.6444 5.68766 9.50244 6.02122 8.53117 6.64617C7.55989 7.27112 6.80287 8.15939 6.35584 9.19864C5.90881 10.2379 5.79185 11.3815 6.01974 12.4847C6.24763 13.588 6.81015 14.6014 7.63615 15.3968C8.46216 16.1922 9.51455 16.7339 10.6602 16.9534C11.8059 17.1728 12.9935 17.0602 14.0727 16.6297C15.1519 16.1992 16.0744 15.4703 16.7234 14.535C17.3724 13.5997 17.7187 12.5 17.7187 11.3752C17.7187 9.86674 17.0965 8.4201 15.9888 7.35349C14.8812 6.28687 13.3789 5.68766 11.8125 5.68766Z"
                                                    fill="white" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_2_68">
                                                    <rect width="24" height="23" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                    <a href="<?php the_field('facebook_link'); ?>"><svg class="social-bar__icon"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="23"
                                            viewBox="0 0 24 23" fill="none">
                                            <g clip-path="url(#clip0_2_75)">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M23.625 11.375C23.625 5.09336 18.3357 0 11.8125 0C5.28926 0 0 5.09336 0 11.375C0 17.0523 4.31895 21.7582 9.9668 22.6124V14.6641H6.96674V11.375H9.9668V8.86895C9.9668 6.01859 11.7308 4.44285 14.4287 4.44285C15.7212 4.44285 17.0733 4.66527 17.0733 4.66527V7.46484H15.583C14.1165 7.46484 13.6577 8.34133 13.6577 9.24219V11.375H16.9335L16.4104 14.6641H13.6582V22.6134C19.3061 21.7598 23.625 17.0539 23.625 11.375Z"
                                                    fill="white" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_2_75">
                                                    <rect width="24" height="23" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                    <a href="<?php the_field('twitter_link'); ?>"><svg
                                            class="social-bar__icon social-bar__icon--size-26-21"
                                            xmlns="http://www.w3.org/2000/svg" width="26" height="21"
                                            viewBox="0 0 26 21" fill="none">
                                            <g clip-path="url(#clip0_2_71)">
                                                <path
                                                    d="M25.4688 2.39942C24.5192 2.81199 23.5146 3.0838 22.4866 3.20626C23.567 2.57365 24.3794 1.56863 24.7716 0.379696C23.7502 0.976961 22.6346 1.39603 21.4725 1.61895C20.9832 1.10613 20.3947 0.698161 19.7428 0.419851C19.0909 0.14154 18.3892 -0.00130113 17.6804 8.93028e-06C14.8106 8.93028e-06 12.4882 2.28868 12.4882 5.10997C12.4861 5.5024 12.5311 5.89366 12.6221 6.2754C10.5643 6.17893 8.5492 5.65397 6.70585 4.73411C4.8625 3.81425 3.23145 2.51974 1.91705 0.933407C1.45593 1.71077 1.21206 2.59773 1.21094 3.50157C1.21094 5.27344 2.13537 6.83966 3.53125 7.75723C2.70423 7.73761 1.89416 7.51872 1.1698 7.11915V7.18243C1.1698 9.66094 2.96277 11.7229 5.33582 12.1922C4.88957 12.3112 4.42972 12.3714 3.96789 12.3715C3.64019 12.3721 3.31323 12.3403 2.99178 12.2766C3.65148 14.3068 5.57154 15.7834 7.84598 15.8256C5.99784 17.2499 3.7288 18.0197 1.39551 18.0141C0.981341 18.0135 0.56756 17.9888 0.15625 17.9402C2.52992 19.4559 5.28912 20.2577 8.10543 20.25C17.6693 20.25 22.8943 12.4611 22.8943 5.70587C22.8943 5.48438 22.8885 5.2629 22.8779 5.04669C23.892 4.32531 24.7694 3.42886 25.4688 2.39942Z"
                                                    fill="white" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_2_71">
                                                    <rect width="26" height="21" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                    <a href="<?php the_field('pinterest_link'); ?>"><svg
                                            class="social-bar__icon social-bar__icon--size-25-24"
                                            xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                            viewBox="0 0 25 24" fill="none">
                                            <g clip-path="url(#clip0_2_73)">
                                                <path
                                                    d="M12.3152 0C5.68691 0 0.3125 5.37201 0.3125 11.9973C0.3125 16.9087 3.2703 21.1292 7.49803 22.9877C7.46588 22.1522 7.49267 21.1453 7.70701 20.2348C7.93742 19.26 9.25021 13.6952 9.25021 13.6952C9.25021 13.6952 8.86441 12.9293 8.86441 11.7992C8.86441 10.021 9.89321 8.6927 11.1792 8.6927C12.2723 8.6927 12.7974 9.51216 12.7974 10.4923C12.7974 11.5903 12.0955 13.2292 11.7365 14.7503C11.4364 16.025 12.3741 17.0587 13.6333 17.0587C15.9053 17.0587 17.4378 14.1397 17.4378 10.6798C17.4378 8.04999 15.6641 6.08436 12.4438 6.08436C8.80547 6.08436 6.53353 8.79982 6.53353 11.8313C6.53353 12.8757 6.84431 13.6148 7.32657 14.1825C7.54626 14.445 7.57841 14.5521 7.49803 14.852C7.43909 15.0716 7.31049 15.6019 7.25155 15.8161C7.17117 16.1214 6.92469 16.2285 6.65141 16.116C4.97426 15.4305 4.19194 13.5988 4.19194 11.5314C4.19194 8.12497 7.06936 4.03838 12.7706 4.03838C17.352 4.03838 20.3688 7.35371 20.3688 10.9101C20.3688 15.6179 17.7485 19.1314 13.8905 19.1314C12.5938 19.1314 11.3775 18.4298 10.9595 17.6371C10.9595 17.6371 10.2629 20.4008 10.1129 20.9364C9.86106 21.863 9.36273 22.7842 8.90728 23.5073C10.0121 23.833 11.1579 23.999 12.3098 24C18.9381 24 24.3125 18.628 24.3125 12.0027C24.3125 5.37737 18.9434 0 12.3152 0Z"
                                                    fill="white" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_2_73">
                                                    <rect width="25" height="24" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header__bottom">
                        <nav class="menu">
                            <ul class="menu__list">
                                <li class="menu__item <?php the_field('menu_item1-status'); ?>"><a
                                        href="#home"><?php the_field('menu_item-title1'); ?></a></li>
                                <li class="menu__item <?php the_field('menu_item2-status'); ?>"><a
                                        href="#about-us"><?php the_field('menu_item-title2'); ?></a>
                                </li>
                                <li class="menu__item <?php the_field('menu_item3-status'); ?>"><a
                                        href="#main-menu"><?php the_field('menu_item-title3'); ?></a>
                                </li>
                                <li class="menu__item <?php the_field('menu_item4-status'); ?> menu__submenu">
                                    <?php the_field('menu_item-title4'); ?>
                                    <ul class="menu__submenu-list">
                                        <li class="menu__submenu-item <?php the_field('menu_subitem1-status'); ?>"><a
                                                href="#reviews"><?php the_field('submenu_item1'); ?></a></li>
                                        <li class="menu__submenu-item <?php the_field('menu_subitem2-status'); ?>"><a
                                                href="#offers"><?php the_field('submenu_item2'); ?>s</a></li>
                                        <li class="menu__submenu-item <?php the_field('menu_subitem3-status'); ?>"><a
                                                href="#popular-dishes"><?php the_field('submenu_item3'); ?></a></li>
                                        <li class="menu__submenu-item <?php the_field('menu_subitem4-status'); ?>"><a
                                                href="#services"><?php the_field('submenu_item4'); ?></a></li>
                                    </ul>
                                </li>
                                <li class="menu__item <?php the_field('menu_item5-status'); ?>"><a
                                        href="#blog"><?php the_field('menu_item-title5'); ?></a></li>
                                <li class="menu__item <?php the_field('menu_item6-status'); ?>"><a
                                        href="#contact-us"><?php the_field('menu_item-title6'); ?></a>
                                </li>
                            </ul>
                        </nav>
                        <nav class="social-bar">
                            <ul class="social-bar__list">
                                <li class="social-bar__item"><a href="<?php the_field('instagram_link'); ?>"><svg
                                            class="social-bar__icon" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="23" viewBox="0 0 24 23" fill="none">
                                            <g clip-path="url(#clip0_2_68)">
                                                <path
                                                    d="M16.7342 1.89566C18.0385 1.89941 19.2882 2.4 20.2104 3.2881C21.1327 4.17619 21.6525 5.37963 21.6564 6.63559V16.1144C21.6525 17.3704 21.1327 18.5738 20.2104 19.4619C19.2882 20.35 18.0385 20.8506 16.7342 20.8543H6.8908C5.58654 20.8506 4.33682 20.35 3.41456 19.4619C2.49231 18.5738 1.97247 17.3704 1.96857 16.1144V6.63559C1.97247 5.37963 2.49231 4.17619 3.41456 3.2881C4.33682 2.4 5.58654 1.89941 6.8908 1.89566H16.7342ZM16.7342 0H6.8908C3.10078 0 0 2.98594 0 6.63559V16.1144C0 19.7641 3.10078 22.75 6.8908 22.75H16.7342C20.5242 22.75 23.625 19.7641 23.625 16.1144V6.63559C23.625 2.98594 20.5242 0 16.7342 0Z"
                                                    fill="white" />
                                                <path
                                                    d="M18.2108 6.63574C17.9187 6.63574 17.6332 6.55235 17.3904 6.39611C17.1476 6.23988 16.9584 6.01781 16.8466 5.758C16.7348 5.49818 16.7056 5.21229 16.7626 4.93647C16.8195 4.66066 16.9602 4.4073 17.1667 4.20845C17.3732 4.0096 17.6363 3.87418 17.9227 3.81931C18.2091 3.76445 18.506 3.79261 18.7758 3.90023C19.0456 4.00784 19.2762 4.19009 19.4385 4.42392C19.6007 4.65774 19.6873 4.93265 19.6873 5.21387C19.6877 5.4007 19.6498 5.58578 19.5758 5.75847C19.5017 5.93116 19.393 6.08807 19.2558 6.22018C19.1186 6.35229 18.9556 6.45701 18.7763 6.52833C18.597 6.59964 18.4048 6.63614 18.2108 6.63574ZM11.8125 7.58332C12.5913 7.58332 13.3526 7.80571 14.0002 8.22236C14.6477 8.63901 15.1524 9.23122 15.4504 9.92408C15.7485 10.617 15.8264 11.3794 15.6745 12.1149C15.5226 12.8505 15.1476 13.5261 14.5969 14.0564C14.0462 14.5867 13.3445 14.9478 12.5807 15.0941C11.8169 15.2404 11.0251 15.1654 10.3056 14.8784C9.5861 14.5914 8.97112 14.1054 8.53844 13.4818C8.10577 12.8582 7.87483 12.1251 7.87483 11.3752C7.87594 10.3698 8.29116 9.40599 9.02938 8.69511C9.76759 7.98424 10.7685 7.5844 11.8125 7.58332ZM11.8125 5.68766C10.6444 5.68766 9.50244 6.02122 8.53117 6.64617C7.55989 7.27112 6.80287 8.15939 6.35584 9.19864C5.90881 10.2379 5.79185 11.3815 6.01974 12.4847C6.24763 13.588 6.81015 14.6014 7.63615 15.3968C8.46216 16.1922 9.51455 16.7339 10.6602 16.9534C11.8059 17.1728 12.9935 17.0602 14.0727 16.6297C15.1519 16.1992 16.0744 15.4703 16.7234 14.535C17.3724 13.5997 17.7187 12.5 17.7187 11.3752C17.7187 9.86674 17.0965 8.4201 15.9888 7.35349C14.8812 6.28687 13.3789 5.68766 11.8125 5.68766Z"
                                                    fill="white" />
                                            </g>
                                            <defs>
                                                <clipPath>
                                                    <rect width="24" height="23" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg></a></li>
                                <li class="social-bar__item"><a href="<?php the_field('facebook_link'); ?>"><svg
                                            class="social-bar__icon" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="23" viewBox="0 0 24 23" fill="none">
                                            <g clip-path="url(#clip0_2_75)">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M23.625 11.375C23.625 5.09336 18.3357 0 11.8125 0C5.28926 0 0 5.09336 0 11.375C0 17.0523 4.31895 21.7582 9.9668 22.6124V14.6641H6.96674V11.375H9.9668V8.86895C9.9668 6.01859 11.7308 4.44285 14.4287 4.44285C15.7212 4.44285 17.0733 4.66527 17.0733 4.66527V7.46484H15.583C14.1165 7.46484 13.6577 8.34133 13.6577 9.24219V11.375H16.9335L16.4104 14.6641H13.6582V22.6134C19.3061 21.7598 23.625 17.0539 23.625 11.375Z"
                                                    fill="white" />
                                            </g>
                                            <defs>
                                                <clipPath>
                                                    <rect width="24" height="23" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg></a></li>
                                <li class="social-bar__item"><a href="<?php the_field('twitter_link'); ?>"><svg
                                            class="social-bar__icon social-bar__icon--size-26-21"
                                            xmlns="http://www.w3.org/2000/svg" width="26" height="21"
                                            viewBox="0 0 26 21" fill="none">
                                            <g clip-path="url(#clip0_2_71)">
                                                <path
                                                    d="M25.4688 2.39942C24.5192 2.81199 23.5146 3.0838 22.4866 3.20626C23.567 2.57365 24.3794 1.56863 24.7716 0.379696C23.7502 0.976961 22.6346 1.39603 21.4725 1.61895C20.9832 1.10613 20.3947 0.698161 19.7428 0.419851C19.0909 0.14154 18.3892 -0.00130113 17.6804 8.93028e-06C14.8106 8.93028e-06 12.4882 2.28868 12.4882 5.10997C12.4861 5.5024 12.5311 5.89366 12.6221 6.2754C10.5643 6.17893 8.5492 5.65397 6.70585 4.73411C4.8625 3.81425 3.23145 2.51974 1.91705 0.933407C1.45593 1.71077 1.21206 2.59773 1.21094 3.50157C1.21094 5.27344 2.13537 6.83966 3.53125 7.75723C2.70423 7.73761 1.89416 7.51872 1.1698 7.11915V7.18243C1.1698 9.66094 2.96277 11.7229 5.33582 12.1922C4.88957 12.3112 4.42972 12.3714 3.96789 12.3715C3.64019 12.3721 3.31323 12.3403 2.99178 12.2766C3.65148 14.3068 5.57154 15.7834 7.84598 15.8256C5.99784 17.2499 3.7288 18.0197 1.39551 18.0141C0.981341 18.0135 0.56756 17.9888 0.15625 17.9402C2.52992 19.4559 5.28912 20.2577 8.10543 20.25C17.6693 20.25 22.8943 12.4611 22.8943 5.70587C22.8943 5.48438 22.8885 5.2629 22.8779 5.04669C23.892 4.32531 24.7694 3.42886 25.4688 2.39942Z"
                                                    fill="white" />
                                            </g>
                                            <defs>
                                                <clipPath>
                                                    <rect width="26" height="21" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg></a></li>
                                <li class="social-bar__item"><a href="<?php the_field('pinterest_link'); ?>"><svg
                                            class="social-bar__icon social-bar__icon--size-25-24"
                                            xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                            viewBox="0 0 25 24" fill="none">
                                            <g clip-path="url(#clip0_2_73)">
                                                <path
                                                    d="M12.3152 0C5.68691 0 0.3125 5.37201 0.3125 11.9973C0.3125 16.9087 3.2703 21.1292 7.49803 22.9877C7.46588 22.1522 7.49267 21.1453 7.70701 20.2348C7.93742 19.26 9.25021 13.6952 9.25021 13.6952C9.25021 13.6952 8.86441 12.9293 8.86441 11.7992C8.86441 10.021 9.89321 8.6927 11.1792 8.6927C12.2723 8.6927 12.7974 9.51216 12.7974 10.4923C12.7974 11.5903 12.0955 13.2292 11.7365 14.7503C11.4364 16.025 12.3741 17.0587 13.6333 17.0587C15.9053 17.0587 17.4378 14.1397 17.4378 10.6798C17.4378 8.04999 15.6641 6.08436 12.4438 6.08436C8.80547 6.08436 6.53353 8.79982 6.53353 11.8313C6.53353 12.8757 6.84431 13.6148 7.32657 14.1825C7.54626 14.445 7.57841 14.5521 7.49803 14.852C7.43909 15.0716 7.31049 15.6019 7.25155 15.8161C7.17117 16.1214 6.92469 16.2285 6.65141 16.116C4.97426 15.4305 4.19194 13.5988 4.19194 11.5314C4.19194 8.12497 7.06936 4.03838 12.7706 4.03838C17.352 4.03838 20.3688 7.35371 20.3688 10.9101C20.3688 15.6179 17.7485 19.1314 13.8905 19.1314C12.5938 19.1314 11.3775 18.4298 10.9595 17.6371C10.9595 17.6371 10.2629 20.4008 10.1129 20.9364C9.86106 21.863 9.36273 22.7842 8.90728 23.5073C10.0121 23.833 11.1579 23.999 12.3098 24C18.9381 24 24.3125 18.628 24.3125 12.0027C24.3125 5.37737 18.9434 0 12.3152 0Z"
                                                    fill="white" />
                                            </g>
                                            <defs>
                                                <clipPath>
                                                    <rect width="25" height="24" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>