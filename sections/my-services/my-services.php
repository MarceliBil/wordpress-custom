<?php if (have_rows('home_page')) : ?>
    <?php while (have_rows('home_page')) : the_row(); ?>
        <?php if (get_row_layout() == 'my_services') : ?>
            <div class="section section--my-services my-services">

                <?php if ($title = get_sub_field('title')) : ?>
                    <?php echo esc_html($title); ?>
                <?php endif; ?>

                <?php if (have_rows('tiles')) : ?>
                    <?php while (have_rows('tiles')) :
                        the_row(); ?>

                        <?php if ($label = get_sub_field('label')) : ?>
                            <?php echo esc_html($label); ?>
                        <?php endif; ?>

                        <?php
                        $image = get_sub_field('image');
                        $size = 'full';
                        if ($image) {
                            $url = wp_get_attachment_url($image);
                            echo wp_get_attachment_image($image, $size);
                        }; ?>
                    <?php endwhile; ?>
                <?php endif; ?>

            </div>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>