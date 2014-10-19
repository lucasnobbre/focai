<?php
        $args = array( 'showposts' => 1, 'offset'=> 1, 'category_name' => 'esportes', 'offset' => '0');
        $esportes = new WP_Query( $args );

        if ( $esportes->have_posts() ) : while ( $esportes->have_posts() ) : $esportes->the_post(); ?>
    
        <div id="principal-post">
<div class="principal-img"><a href="<?php the_permalink()?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_post_thumbnail(); ?></a></div>
<div class="principal-content">
<h1><a href="<?php the_permalink()?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title()?></a></h1>
        <p><?php the_excerpt(); ?></p>
    <div class="postreadmore">
          <h5><a href="<?php the_permalink()?>"
                 title="<?php _e('Read more on','appliance');?> <?php the_title_attribute(); ?>"
                 rel="bookmark">
                        <?php _e('Leia mais aqui...','appliance');?>
              </a>
          </h5>
    </div>
</div>

<p>por <strong><?php the_author();?></strong> em <span class="date"><?php echo get_the_date(); ?></span></p>

<!--<a href="<?php// echo site_url()?>/?cat=<?php //$category = get_the_category(); echo $category[0]->term_id;?>"><?php// $category = get_the_category(); echo $category[0]->cat_name;?></a></a> </p>-->
<!--<div class="postcats"></div>-->

<!--<div class="postcomments"><a href="<?php the_permalink()?>#comments" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php // printf( _n( '1 comment', '%1$s comments', get_comments_number(), 'appliance' ), number_format_i18n( get_comments_number() ) ); ?></a></div>-->
</div>
<?php
        endwhile; endif;

        ?>