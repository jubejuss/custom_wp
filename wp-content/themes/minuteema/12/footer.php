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
</body>
</html>