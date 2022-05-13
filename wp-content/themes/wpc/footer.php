<footer class="site-footer">
    <?php 
/* laeb sisse footer widget area */
if ( is_active_sidebar( 'footer-widget-area' ) ) : ?>
<ul id="footer-widgets">
<?php dynamic_sidebar( 'footer-widget-area' ); ?>
</ul>
<?php endif; ?>
<p><?php bloginfo( 'name' ) ?></p>
</footer>
</div> <!-- closes <div class=container"> -->
<?php wp_footer() ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="<?php bloginfo('template_url');?>/js/flux.min.js"></script>
<script>
    window._flux = new flux.slider('#slider',{pagination: true});
</script>
</body>
</html>