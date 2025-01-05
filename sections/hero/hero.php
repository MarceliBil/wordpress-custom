<?php if (have_rows('home_page')) : ?>
    <?php while (have_rows('home_page')) : the_row(); ?>
        <?php if (get_row_layout() == 'hero') : ?>

            <div class="section section--hero hero">

                <?php if ($title = get_sub_field('title')) : ?>
                    <h1><?php echo esc_html($title); ?></h1>
                <?php endif; ?>

                <?php if ($subtitle = get_sub_field('subtitle')) : ?>
                    <h2><?php echo esc_html($subtitle); ?></h2>
                <?php endif; ?>

                <?php $button_text = get_sub_field('button_text'); ?>
                <?php $button_link = get_sub_field('button_link'); ?>

                <?php if ($button_text && $button_link) : ?>
                    <a href="<?php echo esc_html($button_link); ?>"><?php echo esc_html($button_text); ?></a>
                <?php endif; ?>

                <?php if ($quote = get_sub_field('quote')) : ?>
                    <div><?php echo $quote; ?></div>
                <?php endif; ?>

                <?php
                $main_image = get_sub_field('main_image');
                $size = 'full';
                if ($main_image) {
                    $url = wp_get_attachment_url($main_image);
                    echo wp_get_attachment_image($main_image, $size);
                }; ?>
            </div>

            <?php if ( $title = get_sub_field( 'title' ) ) : ?>
	<?php echo esc_html( $title ); ?>
<?php endif; ?>

        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>


