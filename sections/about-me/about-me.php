<?php if (have_rows('home_page')) : ?>
    <?php while (have_rows('home_page')) : the_row(); ?>
        <?php if (get_row_layout() == 'about_me') : ?>

            <div class="section section--about-me about-me">

                <?php
                $main_image = get_sub_field('image');
                $size = 'full';
                if ($main_image) {
                    $url = wp_get_attachment_url($main_image);
                    echo wp_get_attachment_image($main_image, $size);
                }; ?>

                <?php if ($title = get_sub_field('title')) : ?>
                    <h1><?php echo esc_html($title); ?></h1>
                <?php endif; ?>

                <?php if ($text = get_sub_field('text')) : ?>
                    <?php echo $text; ?>
                <?php endif; ?>

                <?php $button_text = get_sub_field('button_text'); ?>
                <?php $button_link = get_sub_field('button_link'); ?>

                <?php if ($button_text && $button_link) : ?>
                    <a href="<?php echo esc_html($button_link); ?>"><?php echo esc_html($button_text); ?></a>
                <?php endif; ?>
            </div>

        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>