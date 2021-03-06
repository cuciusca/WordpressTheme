<?php get_header(); ?>

    <main class="row">
        <div class="col-lg-9">
            <div class="card">
                <div class="card-body">
                    <?php while (have_posts()) :
                                  the_post(); ?>

                        <h2 class="card-title"><?php the_title(); ?></h2>
                        <p class="card-text"><?php the_content(); ?></p>

                    <?php endwhile; ?>
                </div>
            </div>
        </div>

        <?php get_sidebar(); ?>
    </main>

<?php get_footer();