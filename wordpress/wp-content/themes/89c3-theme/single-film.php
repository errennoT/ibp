<?php get_header() ?>

<section class="s-content">

    <article class="show_film">
        <?php while (have_posts()) : the_post(); ?>
            <div class="left_post">
                <?php the_post_thumbnail('card');  ?>
            </div>

            <div class="right_post">
                <h1 class="title"><?php esc_html(the_title()); ?></h1>

                <span class="detail">
                    Genre: <?php esc_html(the_terms(get_the_ID(), 'genre')); ?> </br></br>
                    Nationalité: <?php esc_html(the_terms(get_the_ID(), 'nationalite')); ?> </br></br>
                    <?= 'Note: ' . esc_html(get_post_meta(get_the_ID(), 'themeibp_rate', true)); ?></br></br>
                    <?= 'De: '  . esc_html(get_post_meta(get_the_ID(), 'themeibp_director', true)); ?></br></br>
                    <?= 'Avec: ' . esc_html(get_post_meta(get_the_ID(), 'themeibp_actor', true)); ?></br></br></br>
                </span>

                <div class="synopsis">
                    <p>
                        <?php esc_html(the_content()); ?>
                    </p>
                </div>

            </div>
        <?php endwhile;  ?>
    </article> <!-- end article -->

</section> <!-- s-content -->

<?php get_footer() ?>