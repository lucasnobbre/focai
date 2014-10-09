
<?php get_header(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" type="text/css" media="screen" />
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<scipt src="js/bootstrap.min.js"></script>-->

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>
 
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="http://placehold.it/1200x315" alt="...">
      <div class="carousel-caption">
          <h3>Caption Text</h3>
      </div>
    </div>
    <div class="item">
      <img src="http://placehold.it/1200x315" alt="...">
      <div class="carousel-caption">
          <h3>Caption Text</h3>
      </div>
    </div>
    <div class="item">
      <img src="http://placehold.it/1200x315" alt="...">
      <div class="carousel-caption">
          <h3>Caption Text</h3>
      </div>
    </div>
  </div>
 
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div> <!-- Carousel -->


<!-- END OF SLIDER CAROUSEL -->

<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>

<div class="postbg">
<div class="postimage"><a href="<?php the_permalink()?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_post_thumbnail(); ?></a></div>
<div class="postcontent">
<h3><a href="<?php the_permalink()?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title()?></a></h3>
<div class="posttext"><?php the_excerpt(); ?></div>
</div>
<div class="postreadmore"><h5><a href="<?php the_permalink()?>" title="<?php _e('Read more on','appliance');?> <?php the_title_attribute(); ?>" rel="bookmark"><?php _e('Read more','appliance');?></a></h5></div>
<div class="smldivider"></div>
<div class="postcats"><a href="<?php echo site_url()?>/?cat=<?php $category = get_the_category(); echo $category[0]->term_id;?>"><?php $category = get_the_category(); echo $category[0]->cat_name;?></a></div>
<div class="postcomments"><a href="<?php the_permalink()?>#comments" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php printf( _n( '1 comment', '%1$s comments', get_comments_number(), 'appliance' ), number_format_i18n( get_comments_number() ) ); ?></a></div>
</div>


<?php endwhile; ?>


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