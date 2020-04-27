<?php get_header() ?>

<!-- s-content
    ================================================== -->
<section class="s-content">

    <div class="row masonry-wrap">
        <div class="masonry">

            <div class="grid-sizer"></div>

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <article class="masonry__brick entry format-standard" data-aos="fade-up">

                        <div class="entry__thumb">
                            <a href="<?php the_permalink(); ?>" class="entry__thumb-link">
                                <img class="img_film" src="<?php the_post_thumbnail_url()?>">
                            </a>
                        </div>
                        <div class="entry__text">
                            <div class="entry__header">
                                <h1 class="entry__title"><?php esc_html(the_title()); ?></h1>
                            </div>
                            <div class="entry__excerpt">
                                <p>
                                    <a href="<?php the_permalink(); ?>"><?php esc_html(the_excerpt()); ?></a>
                                </p>
                            </div>
                        </div>

                    </article> <!-- end article -->
                <?php endwhile;else : ?>
                <p>Aucun film ;(</p>
            <?php endif; ?>

        </div> <!-- end masonry -->
    </div> <!-- end masonry-wrap -->

    <div class="row">
        <div class="col-full">
               
        </div>
    </div>
</section> <!-- s-content -->

<!-- preloader 

<div id="preloader">
    <div id="loader">
        <div class="line-scale">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</div>-->

<?php get_footer() ?>