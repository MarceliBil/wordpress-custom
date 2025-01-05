<footer class="footer" id="footer">

    <?php if ($slogan = get_field('slogan', 'options')) : ?>
        <div class="footer__slogan">
            <?php echo esc_html($slogan); ?>
        </div>
    <?php endif; ?>

    <?php if ($phone = get_field('phone', 'options')) : ?>
        <div>
            <a href="tel:+<?php echo esc_html($phone); ?>"><?php echo esc_html($phone); ?></a>
        </div>
    <?php endif; ?>

    <?php if ($email = get_field('email', 'options')) : ?>
        <div>
            <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
        </div>
    <?php endif; ?>

    <?php if ($copyright = get_field('copyright', 'options')) : ?>
        <div><?php echo esc_html($copyright); ?></div>
    <?php endif; ?>

</footer>
<?php wp_footer(); ?>
</body>

</html>