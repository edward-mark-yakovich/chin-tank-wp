<header class="c-header">
    <div class="c-page__contain">
        <div class="c-flex">
            <div class="c-header__logo c-col__33 c-flex">
                <a href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/c-logo-white-icon.svg"></a>
            </div>
            <div class="c-header__menu-wrap c-flex c-col__66">
                <?php wp_nav_menu(array('class' => 'c-header__menu', 'c-flex')); ?> 
            </div>
        </div>
    </div>
</header>

<header class="c-header c-header--sticky">
    <div class="c-page__contain">
        <div class="c-flex">
            <div class="c-header__logo c-col__33 c-flex">
                <a href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/c-logo-white-acr.svg"></a>
            </div>
            <div class="c-header__menu-wrap c-flex c-col__66">
                <?php wp_nav_menu(array('class' => 'c-header__menu', 'c-flex')); ?> 
            </div>
        </div>
    </div>
</header>