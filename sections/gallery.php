<?php if (have_rows('gallery')) : ?>
    <?php while (have_rows('gallery')) :
        the_row(); ?>

        <?php if ($title = get_sub_field('title')) : ?>
            <?php echo esc_html($title); ?>
        <?php endif; ?>

        <?php if (have_rows('gallery_tiles')) : ?>
            <?php while (have_rows('gallery_tiles')) :
                the_row(); ?>

                <?php
                $image = get_sub_field('image');
                $size = 'full';
                if ($image) {
                    $url = wp_get_attachment_url($image);
                    echo wp_get_attachment_image($image, $size);
                }; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>