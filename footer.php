    <footer>
        <h2><?php bloginfo( 'title' ); ?> Footer</h2>
        <p>
            &copy;
            <?php echo date (' Y' ); ?>
            <a href="<?php echo siteurl(); ?>">
                <?php bloginfo( 'title' ); ?>
            </a>
            All Rights Reserved.
        </p>
    </footer>
    <?php
        wp_footer();
    ?>
</body>
</html>
