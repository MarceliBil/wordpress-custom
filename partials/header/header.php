<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="header">

        <div class="header__logo logo">
            <?php
            $logo_dark = get_field('logo_dark', 'options');
            $size = 'full';
            if ($logo_dark) {
                $url = wp_get_attachment_url($logo_dark);
                echo '<a href="' . esc_url(home_url('/')) . '">';
                echo wp_get_attachment_image($logo_dark, $size);
                echo '</a>';
            }; ?>
        </div>

        <nav class="nav">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => '',
                'fallback_cb' => false,
                'link_before' => '<span class="">',
                'link_after' => '</span>',
            ));
            ?>

        </nav>

        <?php if (have_rows('socials', 'options')) : ?>
            <div class="header__socials socials">

                <?php while (have_rows('socials', 'options')) :
                    the_row(); ?>

                    <?php
                    $icon = get_sub_field('icon', 'options');
                    if ($icon) : ?>
                        <?php if ($link = get_sub_field('link', 'options')) : ?>
                            <a href="<?php echo esc_url($link); ?>" target="_blank" rel="noreferer">
                                <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" class="social-icon" />
                            </a>
                        <?php endif; ?>
                    <?php endif; ?>

                <?php endwhile; ?>
            </div>
        <?php endif; ?>

    </header>