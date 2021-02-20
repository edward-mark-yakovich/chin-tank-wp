<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>


<main>

    <div class="c-splash">

            <div class="c-flex">
                <div class="c-page__contain c-splash__heading c-flex">
                    <div class="c-col__50">
                        <a href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/c-logo-white-icon.svg"></a>
                    </div>
                    <div class="c-col__50">
                        <div class="c-splash__inner-pad">
                            <h1>Motorcycle shit...<br>in Philly</h1>

                            <ul class="c-splash__quicklinks">
                                <li class="c-splash__quicklinks-blog">
                                    <a href="blog/"><?php wpb_total_posts(); ?> Posts</a>
                                </li>
                                <li class="c-search__btn">
                                    <a href="#">
                                        <?php $args = array( 'parent' => 0, 'hide_empty' => 0 );

                                        $categories = get_categories( $args );

                                        echo count( $categories );    ?> Topics
                                    </a>
                                </li>
                                <li class="c-search__btn c-splash__quicklinks-search--icon">
                                    <a href="#">Search</a>
                                    <img src="<?php bloginfo('template_url'); ?>/images/search-icon-white.svg">
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>

                <div class="c-splash__post c-flex c-blk-bar">
                    <div class="c-splash__post-content c-col--push-50">
                        <div class="c-splash__inner-pad">

                            <!-- pull out most recent posts from a category -->
                            <?php $featured_query = new WP_Query ('showposts=1');
                                while ($featured_query->have_posts()) : $featured_query->the_post (); $do_not_duplicate[] = $post->ID ?>

                                    <?php the_post_thumbnail(); ?>
                                    <a href="<?php the_permalink() ?>" data-splash-post="<?php the_title(); ?>">
                                        <p class="c-tiny-text">Quick Jump To</p>
                                        <h3>Most Recent</h3>
                                        <h1><?php the_title(); ?></h1>
                                        <p>Comments - <?php comments_number('0', '1', '%'); ?></p>
                                    </a>

                            <?php endwhile; ?>

                        </div>
                    </div>
                </div>

                <div class="c-page__contain c-splash__more c-flex">
                    <div class="c-col--push-50">
                        <div class="c-splash__inner-pad">
                            <button class="c-button c-button--more">
                                <span class="c-tiny-text">Explore More</span>
                                <img src="<?php bloginfo('template_url'); ?>/images/c-arrow-down.svg">
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>



        <div class="c-page">


            <?php include 'nav.php';?>


            <section class="c-feature c-flex c-blk-bar">
                <div class="c-page__contain">
                    <div class="c-flex">

                        <?php

                        $query = new WP_Query( array( 'post_type' => 'features','posts_per_page' => 1 ) );

                        if ( $query->have_posts() ) :

                        query_posts( 'posts_per_page=1' );

                            while ( $query->have_posts() ) : $query->the_post(); ?>

                            <div class="c-feature__img-wrap">
                            <div class="c-feature__title">
                                <p class="c-tiny-text">Featured</p>
                            </div>
                            <div class="c-feature__img">
                                <?php the_post_thumbnail(array('class' => 'c-feature__img-bg')); ?>
                                <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(array('class' => 'c-feature__img-img')); ?></a>
                            </div>
                            </div>
                            <div class="c-feature__copy c-flex">
                                <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
                                <?php the_excerpt(); ?>
                            </div>

                            <?php endwhile;

                        endif;

                        ?>
                    </div>
                </div>
            </section>

            <section class="c-index c-page__contain c-page__contain--wide">
                <div class="c-flex">

                    <!-- pull out most recent posts from a category -->
                    <?php $featured_query = new WP_Query ('showposts=20');
                        while ($featured_query->have_posts()) : $featured_query->the_post (); $do_not_duplicate[] = $post->ID ?>

                            <article class="c-index__article c-flex">
                                <div class="c-index__article-inner">

                                    <div class="c-index__article-img">
                                        <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
                                    </div>

                                    <div class="c-index__article-copy">
                                        <div class="c-index__article-copy__meta">
                                            <p>Published - <?php the_time('M j, Y'); ?></p>
                                            <p>Comments - <?php comments_number('0', '1', '%'); ?> </p>
                                        </div>

                                        <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                                        <?php the_excerpt(); ?>
                                    </div>

                                </div>
                            </article>

                    <?php endwhile; ?>

                </div>



                <div class="c-index__nav">
                    <div class="c-flex">

                        <a href="blog/page/2/" class="c-button c-button--more">
                            <span class="c-tiny-text">More Articles</span>
                            <img src="<?php bloginfo('template_url'); ?>/images/c-arrow-down.svg">
                        </a>

                    </div>
                </div>






            </section>


        </div>





        <?php include 'random.php';?>




    </main>








<?php get_footer(); ?>
