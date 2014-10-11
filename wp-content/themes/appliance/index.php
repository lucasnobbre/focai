
<?php get_header(); ?>
<?php echo do_shortcode('[image-carousel]'); ?>

<h3>Veja nossas últimas publicações</h3>
<hr>
<section id="post-1">
<?php query_posts('posts_per_page=10'); // 'cat=3&showposts=1'?> 
<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>

<div class="postbg">
<h3><a href="<?php the_permalink()?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title()?></a></h3>
<span class="date"><?php echo get_the_date(); ?></span>
<div class="postimage"><a href="<?php the_permalink()?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_post_thumbnail(); ?></a></div>
<div class="postcontent">
    <div class="posttext">
          <?php the_excerpt(); ?>
    </div>
    <div class="postreadmore">
          <h5><a href="<?php the_permalink()?>"
                 title="<?php _e('Read more on','appliance');?> <?php the_title_attribute(); ?>"
                 rel="bookmark">
                        <?php _e('Leia mais aqui...','appliance');?>
              </a>
          </h5>
    </div>
</div>

<p>por <strong><?php the_author();?></strong> | <a href="<?php echo site_url()?>/?cat=<?php $category = get_the_category(); echo $category[0]->term_id;?>"><?php $category = get_the_category(); echo $category[0]->cat_name;?></a></a> </p>
<!--<div class="postcats"></div>-->

<!--<div class="postcomments"><a href="<?php the_permalink()?>#comments" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php // printf( _n( '1 comment', '%1$s comments', get_comments_number(), 'appliance' ), number_format_i18n( get_comments_number() ) ); ?></a></div>-->
</div>

<?php endwhile; ?>
<?php wp_reset_query(); ?>
</section>
</div>
</div>

<div class="divider"></div>
<div id="postnavigation">
<div id="previousposts"><?php next_posts_link( __( 'Previous Entries', 'appliance' ) ); ?></div>
<div id="nextposts"><?php previous_posts_link( __( 'Next Entries', 'appliance' ) ); ?></div>
</div>
		
<?php else : ?>
<div id="maincontent">
<h1><?php _e('No posts found','appliance')?></h1>
<p><?php _e('There are no posts to display here.','appliance')?></p>
</div>
<?php endif; ?>

<?php get_footer(); ?>