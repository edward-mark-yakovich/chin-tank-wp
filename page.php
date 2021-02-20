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
                        </div>
                    </div>
                </div>
            </section>






            <section class="c-post c-single c-page__contain c-page__contain--wide">
                <div class="c-flex">

                    <?php the_content('Read the rest of this entry &raquo;'); ?>
       
                    
                </div>



            </section>





            <?php endwhile; ?>
                    
                <?php else : ?>    
                <div> 
                    <h1>Error...</h1>  
                    <p>Looks like the page you were trying to find is no longer here. Click on something else.</p> 
                </div> 
            <?php endif; ?>









            <?php include 'random.php';?>
			
			
			
		

            



        </div>




    </main>








<?php get_footer(); ?>


