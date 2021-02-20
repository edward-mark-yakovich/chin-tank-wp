<?php
        query_posts(array('orderby' => 'rand', 'showposts' => 1));
        if (have_posts()) :
        while (have_posts()) : the_post(); ?>

        <section class="c-feature c-flex c-blk-bar">
            <div class="c-page__contain">
                <div class="c-flex">
                    <div class="c-feature__img-wrap c-col__33 c-flex">
                        <div class="c-feature__title">
                            <p class="c-tiny-text">Random<br>Blast<br>From Past</p>
                        </div>
                        <div class="c-feature__img">
                            <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(array('class' => 'c-feature__img-img')); ?></a>
                        </div>
                    </div>
                    <div class="c-feature__copy c-col__66 c-flex">
                        <p class="c-tiny-text">Published - <?php the_time('M j, Y'); ?></p>
                        <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                        <?php the_excerpt(); ?>
                    </div>
                </div>
            </div>
        </section>

        <?php endwhile;

    endif; ?>