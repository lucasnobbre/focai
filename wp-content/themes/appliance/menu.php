<?php require(get_template_directory() . '/bootstrap_menu.php'); ?>

<ul class="nav nav-pills">
<?php wp_nav_menu(array(
                'container'       => false,
                'items_wrap'      => '<ul id="%1$s" class="nav nav-pills">%3$s</ul>',
                'walker'          => new twitter_bootstrap_nav_walker
                ));
                ?>
<?php// get_search_form(); ?> 
</ul>