<?php
/*
Template Name: home
*/
?>

<?php get_header(); ?>
<section class="home" id="home">
    <div class="container">
        <div class="home__wrapper">
            <div class="home__title-frame">
                <h1 class="home__first-title first-title"><?php the_field('main_title'); ?></h1>
                <div class="home__text"><?php the_field('main_description'); ?></div>
                <a class="home__button" href="#main-menu">View Menu</a>
            </div>
            <div class="home__img">
                <img class="home__img-bg" src="<?php the_field('main-block_img'); ?>" alt="home-image">
            </div>
        </div>
    </div>
</section>
<section class="about-us" id="about-us">
    <div class="container">
        <div class="about-us__wrapper">
            <div class="about-us__top">
                <div class="about-us__top-item">
                    <div class="about-us__img">
                        <img class="about-us__img-bg" src="<?php the_field('about-us_location-img'); ?>"
                            alt="location-icon">
                    </div>
                    <div class="about-us__item-description">
                        <div class="about-us__item-description-title"><?php the_field('about-us_location-title'); ?>
                        </div>
                        <address class="about-us__item-description-text"><?php the_field('about-us_location-text'); ?>
                        </address>
                    </div>
                </div>
                <div class="about-us__top-item">
                    <div class="about-us__img">
                        <img class="about-us__img-bg" src="<?php the_field('about-us_work-hours-img'); ?>"
                            alt="workhours-photo">
                    </div>
                    <div class="about-us__item-description">
                        <div class="about-us__item-description-title"><?php the_field('about-us_work-hours-title'); ?>
                        </div>
                        <div class="about-us__item-description-text"><?php the_field('about-us_work-hours-time'); ?>
                        </div>
                    </div>
                </div>
                <div class="about-us__top-item">
                    <div class="about-us__img">
                        <img class="about-us__img-bg" src="<?php the_field('about-us_reservation-img'); ?>"
                            alt="reservation-icon">
                    </div>
                    <div class="about-us__item-description">
                        <div class="about-us__item-description-title"><?php the_field('about-us_reservation-title'); ?>
                        </div>
                        <div class="about-us__item-description-text"><?php the_field('about-us_reservation-mail'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-us__bottom">
                <div class="main-img">
                    <img class="main-img__bg" src="<?php the_field('about-us_main-img'); ?>" alt="main-photo">
                </div>
                <div class="main-description">
                    <div class="main-description__item-main">
                        <h2 class="main-description__item-title second-title"><?php the_field('about-us_title'); ?></h2>
                        <div class="main-description__item-text"><?php the_field('about-us_title-description'); ?></div>
                    </div>
                    <div class="main-description__item">
                        <div class="main-description__item-date">
                            <div class="main-description__item-title second-title">
                                <?php the_field('about-us_first-year'); ?></div>
                            <div class="main-description__item-text">
                                <?php the_field('about-us_first-year-description'); ?></div>
                        </div>
                        <div class="main-description__item-date">
                            <div class="main-description__item-title second-title">
                                <?php the_field('about-us_second-year'); ?></div>
                            <div class="main-description__item-text">
                                <?php the_field('about-us_second-year-description'); ?></div>
                        </div>
                    </div>
                    <div class="main-description__item-signature">
                        <div class="main-description__item-signature-title"><?php the_field('about-us_author'); ?></div>
                        <div class="main-description__item-signature-img">
                            <img class="main-description__item-signature-img-bg"
                                src="<?php the_field('about-us_author-signature'); ?>" alt="signature-photo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="main-menu" id="main-menu">
    <div class="container">
        <div class="main-menu__wrapper">
            <h3 class="main-menu__title-third title-third title-third--black"><?php the_field('menu_subtitle'); ?></h3>
            <div class="main-menu__body">
                <div class="main-menu__description">
                    <h2 class="main-menu__description-title second-title"><?php the_field('menu_title'); ?></h2>
                    <p class="main-menu__description-text"><?php the_field('menu_description'); ?></p>
                    <div class="main-menu__description-img">
                        <img class="main-menu__description-img-bg" src="<?php the_field('menu_main-img'); ?>"
                            alt="main-menu-description-photo">
                    </div>
                    <button class="main-menu__description-button see-all-button" type="button">See all
                        dishes</button>
                </div>
                <div class="menu-body">
                    <ul class="menu-body__list">
                        <?php
							$menuSectionArr = get_field('menu_section');
							foreach($menuSectionArr as $section):
						?>
                        <li class="menu-body__section">
                            <div class="menu-body__section-title"><?php echo $section['menu_section-title'] ?></div>
                            <div data-simplebar data-simplebar-auto-hide="false">
                                <? foreach($section['menu_item'] as $menu): ?>
                                <div class="menu-body__item preview">
                                    <div class="menu-body__item-img"><img class="menu-body__item-img-bg"
                                            src="<?php echo $menu['menu_item-img'] ?>" alt="raw-scallops">
                                    </div>
                                    <div class="menu-body__item-body">
                                        <div class="menu-body__item-description">
                                            <div class="menu-body__item-description-title">
                                                <?php echo $menu['menu_item-title'] ?></div>
                                            <div class="menu-body__item-description-text">
                                                <?php echo $menu['menu_item-description'] ?></div>
                                        </div>
                                        <div class="menu-body__item-price"><?php echo $menu['menu_item-price'] ?></div>
                                    </div>
                                </div>
                                <? endforeach; ?>
                            </div>
                        </li>
                        <? endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="reviews" id="reviews">
    <div class="container">
        <div class="reviews__top">
            <h3 class="title-third"><?php the_field('reviews_subtitle'); ?></h3>
            <h2 class="second-title second-title--color-white"><?php the_field('reviews_title'); ?></h2>
            <div class="reviews__top-description"><?php the_field('reviews_description'); ?></div>
        </div>
        <div class="swiper-container swiper-reviews">
            <div class="swiper-wrapper">
                <?php query_posts('cat=2');
 while (have_posts()) : the_post();?>
                <div class="swiper-slide">
                    <div class="swiper-slide__title">
                        <div class="swiper-slide__img">
                            <?php the_post_thumbnail(
                                array (113, 113),
                                array (
                                    'class' => 'swiper-slide__img-bg'
                                )
                            ); ?>
                        </div>
                        <div class="swiper-slide__user">
                            <div class="swiper-slide__user-name"><?php the_title(); ?></div>
                            <div class="swiper-slide__user-location"><?php the_excerpt(); ?></div>
                        </div>
                    </div>
                    <div class="swiper-slide__text"><?php the_content(); ?></div>
                </div>

                <?php endwhile;
   wp_reset_query();
  ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="reviews__main-img">
            <img class="reviews__main-img-bg" src="<?php the_field('reviews_main-img'); ?>" alt="reviews-main-image">
        </div>
    </div>
</section>
<section class="offers" id="offers">
    <div class="container">
        <div class="offers__wrapper">
            <div class="offers__top">
                <h3 class="title-third title-third--black title-third--i-block"><?php the_field('offers_subtitle'); ?>
                </h3>
                <h2 class="second-title"><?php the_field('offers_title'); ?></h2>
                <div class="offers__top-description"><?php the_field('offers_description'); ?></div>
            </div>
            <div class="offers__bottom">
                <div class="offers__bottom-img">
                    <img class="offers__bottom-img-bg" src="<?php the_field('offers_first-img'); ?>" alt="burger-image">
                </div>
                <div class="offers__bottom-img">
                    <img class="offers__bottom-img-bg" src="<?php the_field('offers_second-img'); ?>" alt="pizza-image">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="popular-dishes" id="popular-dishes">
    <div class="container">
        <div class="popular-dishes__wrapper">
            <div class="popular-dishes__top">
                <h3 class="title-third title-third--black title-third--i-block"><?php the_field('popular_subtitle'); ?>
                </h3>
                <h2 class="second-title"><?php the_field('popular_title'); ?></h2>
                <div class="popular-dishes__title-decription"><?php the_field('popular_description'); ?></div>
            </div>
            <div class="popular-dishes__bottom">
                <?php
				$popularArr = get_field('popular_item');
               foreach($popularArr as $popular): ?>
                <div class="popular-dishes__item">
                    <div class="popular-dishes__img">
                        <img class="popular-dishes__img-bg" src="<?php echo $popular['popular_item-img'] ?>"
                            alt="chicken-image">
                    </div>
                    <div class="popular-dishes__item-description">
                        <div class="popular-dishes__name"><?php echo $popular['popular_name'] ?></div>
                        <div class="popular-dishes__price"><?php echo $popular['popular_price'] ?></div>
                    </div>
                    <div class="popular-dishes__item-text"><?php echo $popular['popular_description'] ?></div>
                </div>
                <? endforeach; ?>
            </div>
            <button class="see-all-button popular-dishes__see-all-button active">See all dishes</button>
            <button class="see-all-button popular-dishes__button-hidden">Hide</button>
        </div>
    </div>
</section>
<section class="services" id="services">
    <div class="container">
        <div class="services__wrapper">
            <div class="services__description-frame">
                <h3 class="title-third title-third--i-block"><?php the_field('services_subtitle'); ?></h3>
                <h2 class="second-title second-title--color-white"><?php the_field('services_title'); ?></h2>
                <div class="services__description"><?php the_field('services_description'); ?></div>
            </div>
            <div class="services__items">
                <div class="services__item">
                    <div class="services__icon"
                        style="background-image: url('<?php the_field('services_open-hours-img'); ?>')">
                    </div>
                    <div class="services__text"><?php the_field('services_open-hours-description'); ?></div>
                </div>
                <div class="services__item">
                    <div class="services__icon"
                        style="background-image: url('<?php the_field('services_special-menu-img'); ?>')">
                    </div>
                    <div class="services__text"><?php the_field('services_special-menu-description'); ?></div>
                </div>
                <div class="services__item">
                    <div class="services__icon"
                        style="background-image: url('<?php the_field('services_delivery-img'); ?>')">
                    </div>
                    <div class="services__text"><?php the_field('services_special-menu-delivery'); ?></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="blog" id="blog">
    <div class="container">
        <div class="blog__wrapper">
            <div class="blog__top">
                <h3 class="title-third title-third--black title-third--i-block"><?php the_field('blog_subtilte'); ?>
                </h3>
                <h2 class="second-title"><?php the_field('blog_tilte'); ?></h2>
                <div class="blog__title-description"><?php the_field('blog_description'); ?></div>
            </div>
            <div class="blog__bottom">
                <div class="blog__item">
                    <div class="blog__img">
                        <img class="blog__img-bg" src="<?php the_field('blog_article-first-img'); ?>"
                            alt="delicious-image">
                        <div class="img-overlay"></div>
                        <a class="blog__button-view-more" href="#">View More</a>
                    </div>
                    <div class="blog__item-bottom">
                        <div class="blog__item-description">
                            <div class="blog__name title-third title-third--black">
                                <?php the_field('blog_theme-first-article'); ?></div>
                            <time class="blog__price title-third title-third--black"
                                datetime="2022-03-19"><?php the_field('blog_date-first-article'); ?></time>
                        </div>
                        <div class="blog__item-title"><?php the_field('blog_title-first-article'); ?></div>
                        <div class="blog__item-text"><?php the_field('blog_first-article-description'); ?></div>
                    </div>
                </div>
                <div class="blog__item">
                    <div class="blog__img">
                        <img class="blog__img-bg" src="<?php the_field('blog_article-second-img'); ?>"
                            alt="cooking-image">
                        <div class="img-overlay"></div>
                        <a class="blog__button-view-more" href="#">View More</a>
                    </div>
                    <div class="blog__item-bottom">
                        <div class="blog__item-description">
                            <div class="blog__name title-third title-third--black">
                                <?php the_field('blog_theme-second-article'); ?></div>
                            <time class="blog__price title-third title-third--black"
                                datetime="2022-03-19"><?php the_field('blog_date-second-article'); ?></time>
                        </div>
                        <div class="blog__item-title"><?php the_field('blog_title-second-article'); ?></div>
                        <div class="blog__item-text"><?php the_field('blog_second-article-description'); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="form" id="form" style="background-image: url('<?php the_field('form_background-img'); ?>');">
    <div class="form__wrapper">
        <div class="form__box">
            <form action="#" class="form">
                <div class="form__top">
                    <h3 class="title-third title-third--i-block"><?php the_field('form_subtitle'); ?></h3>
                    <h2 class="second-title second-title--color-white"><?php the_field('form_title'); ?></h2>
                </div>
                <div class="form__body">
                    <?php echo do_shortcode('[contact-form-7 id="7118a01" title="Контактная форма - резерв стола"]'); ?>
                </div>
                <div class="form__bottom">
                    <?php echo do_shortcode('[contact-form-7 id="907ede0" title="Контактная форма - резерв стола (кнопка)"]'); ?>
                </div>
            </form>
        </div>
    </div>
</section>

<?php get_footer(); ?>