
<?php get_header(); ?>
<?php //echo do_shortcode('[image-carousel]'); ?>

<section id="post-1">
<?php get_template_part('principal'); ?>
<?php get_template_part('secondary-one'); ?>
<?php get_template_part('secondary-two'); ?>
<?php get_template_part('secondary-three'); ?>
<?php get_template_part('secondary-four'); ?>

</section>
<?php //get_template_part('sidebar'); ?>
</div>
</div>

<div class="divider"></div>
<div id="postnavigation">
<div id="previousposts"><?php next_posts_link( __( 'Previous Entries', 'appliance' ) ); ?></div>
<div id="nextposts"><?php previous_posts_link( __( 'Next Entries', 'appliance' ) ); ?></div>
</div>

<?php get_footer(); ?>