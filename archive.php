<!-- Citation: Code is copied from TECHCareers class, written by Warren Uhrich
                BORROWED CODE BEGINS HERE
-------------------------------------------------------->

<?php get_header(); ?>

<h2>
    Archive Template:
    <?php echo get_the_archive_title(); ?>
</h2>

<?php while ( have_posts() ) : ?>
    <?php the_post(); ?>

    <article>
        <h3><?php the_title(); ?></h3>
        <p>
            <strong>Article Published On:</strong>
            <time datetime="<?php echo get_the_date( DATE_ATOM );?>">
                <?php echo get_the_date(); ?>
            </time>
        </p>
        <p>
            <?php the_excerpt(); ?>
        </p>
        <p>
            <a href="<?php the_permalink(); ?>">
                Read More
            </a>
        </p>
    </article>

<?php endwhile; ?>

<?php get_footer(); ?>

<!-- BORROWED CODE ENDS HERE --------->