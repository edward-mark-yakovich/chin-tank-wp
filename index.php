<?php get_header(); ?>


<main>

    <div class="c-page">


        <?php include 'nav.php';?>





        <section class="c-index c-page__contain c-page__contain--wide">
            <div class="c-flex">



        	<?php if (have_posts()) : ?>
    			<?php while (have_posts()) : the_post(); ?>

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

               <?php else : ?>
                <div>
                    <h1>Error...</h1>
                    <p>Looks like the page you were trying to find is no longer here. Click on something else.</p>
                </div>
            <?php endif; ?>


            </div>
        </section>








        <div class="c-index__nav">
            <div class="c-flex">

                <div class="c-index__nav-btn-wrap">
                    <span class="c-index__nav-btn c-index__nav-btn--left c-tiny-text"><?php previous_posts_link('Newer Entries') ?></span>
                </div>

                <div class="c-index__nav-btn-wrap">
                    <span class="c-index__nav-btn c-index__nav-btn--right c-tiny-text"><?php next_posts_link('Older Entries') ?></span>
                </div>

            </div>
        </div>







        <?php include 'random.php';?>



    </div>

</main>



<?php get_footer(); ?>
