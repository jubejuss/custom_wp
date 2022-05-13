<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar 1') ) : ?>

<h2>Artiklid</h2>
<ul>
   <?php wp_get_archives('title_li=&type=monthly'); ?>
</ul>
<h2>Kategooriad</h2>
<ul>
   <?php wp_list_categories('show_count=0&title_li='); ?>
</ul>

<?php endif; ?>