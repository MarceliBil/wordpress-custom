<?php if (have_rows('hero')) : ?>
    <?php while (have_rows('hero')) :
        the_row(); ?>

        <?php if ($title = get_sub_field('title')) : ?>
            <?php echo esc_html($title); ?>
        <?php endif; ?>

        <?php if ($subtitle = get_sub_field('subtitle')) : ?>
            <?php echo esc_html($subtitle); ?>
        <?php endif; ?>

        <?php if ($button_text = get_sub_field('button_text')) : ?>
            <a href="">
                <?php echo esc_html($button_text); ?>
            </a>
        <?php endif; ?>

    <?php endwhile; ?>
<?php endif; ?>