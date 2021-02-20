<?php get_header(); ?>



<main>



        <div class="c-page">


            <?php include 'nav.php';?>





            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>





            <section class="c-feature c-flex c-blk-bar">
                <div class="c-page__contain">
                    <div class="c-flex">
                        <div class="c-feature__img-wrap c-col__33 c-flex">
                            <div class="c-feature__img">
                                <?php the_post_thumbnail(array('class' => 'c-feature__img-bg')); ?>
                                <?php the_post_thumbnail(array('class' => 'c-feature__img-img')); ?>
                            </div>
                        </div>
                        <div class="c-feature__copy c-col__66 c-flex">
                            <h1><?php the_title(); ?></h1>

                            <div class="c-post-meta">
                                <div>
                                    Published - <?php the_time('M j, Y'); ?>
                                </div>
                            </div>

                            <div class="c-post-meta">
                                <div class="c-flex">
                                    <div class="c-cat-name">Category -</div>
                                    <div class="c-cat-ul"><?php the_category(); ?></div>
                                </div>
                                <div>
                                    Comments - <?php comments_popup_link('0', '1', '%'); ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>






            <section class="c-post c-single c-page__contain c-page__contain--wide">

                <div class="c-flex">

                    <?php the_content('Read the rest of this entry &raquo;'); ?>

                </div>

            </section>




            <section class="c-single-extra c-page__contain c-page__contain--small">

                <div class="c-flex">

                  <div class="c-article__tags">
                      <?php the_tags(); ?>
                  </div>

                  <div class="c-article__comments">
                      <?php comments_template(); ?>
                  </div>

                </div>

            </section>





            <?php endwhile; ?>

                <?php else : ?>
                <div>
                    <h1>Error...</h1>
                    <p>Looks like the page you were trying to find is no longer here. Click on something else.</p>
                </div>
            <?php endif; ?>









            <div class="c-index__nav">
                <div class="c-flex">

                    <div class="c-index__nav-btn-wrap">
                        <span class="c-index__nav-btn c-index__nav-btn--left c-tiny-text"><?php previous_post_link(' %link') ?></span>
                    </div>

                    <div class="c-index__nav-btn-wrap">
                        <span class="c-index__nav-btn c-index__nav-btn--right c-tiny-text"><?php next_post_link('%link') ?></span>
                    </div>

                </div>
            </div>






            <?php include 'random.php';?>





        </div>




    </main>








<?php get_footer(); ?>
