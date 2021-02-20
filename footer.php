    <footer class="c-footer">
       <p>Chin on the Tank.com - Philadelphia - Meet up every Thursday, 8PM, 25th and Poplar St.</p>
    </footer>




    <div class="c-border">
        <div class="c-border__top"></div>
        <div class="c-border__left"></div>
        <div class="c-border__right"></div>
        <div class="c-border__bottom"></div>
    </div>







<div class="c-search">
  <div class="c-search__inner">

  	<div class="c-search__btn">
        <button class="c-button">Close</button>
    </div>

  	<div class="c-search__form">
      	<form method="get" action="http://www.chinonthetank.com/">
          	<input class="search-field" onFocus="this.value=''" type="text" value="Search" name="s" />
            <input class="search-icon" type="image" src="<?php bloginfo('template_url'); ?>/images/search-icon-grey.svg">
          </form>
      </div>

  	<div class="c-search__list">
  		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('All-Topics') ) : ?><?php endif; ?>
      </div>

  </div>
</div>






<script src="<?php bloginfo('template_url'); ?>/js/lodash.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/cott.js?v=3.1"></script>
<script src="<?php bloginfo('template_url'); ?>/js/data-img-scroller.js?v=1.25"></script>

<!-- start google analytics -->

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-22942517-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>




</body>
</html>
