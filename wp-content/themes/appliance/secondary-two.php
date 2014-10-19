<?php
        $args = array( 'showposts' => 1, 'offset'=> 1, 'category_name' => 'lazer', 'offset' => '0');
        $esportes = new WP_Query( $args );

        if ( $esportes->have_posts() ) : while ( $esportes->have_posts() ) : $esportes->the_post(); ?>
    
        <div class="secondary">
        <h4><a href="<?php echo site_url()?>/?cat=<?php $category = get_the_category(); echo $category[0]->term_id;?>"><?php $category = get_the_category(); echo $category[0]->cat_name;?></a></a></h4>

<div class="secondary-img"><a href="<?php the_permalink()?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_post_thumbnail('thumbnail'); ?></a></div>

<div class="secondary-content">
    <h1><a href="<?php the_permalink()?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title()?></a>
    </h1>
    <p>por <strong><?php the_author();?></strong><br> em <span class="date"><?php echo get_the_date(); ?></span></p>
</div>

<!--<a href="<?php// echo site_url()?>/?cat=<?php //$category = get_the_category(); echo $category[0]->term_id;?>"><?php// $category = get_the_category(); echo $category[0]->cat_name;?></a></a> </p>-->
<!--<div class="postcats"></div>-->

<!--<div class="postcomments"><a href="<?php the_permalink()?>#comments" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php // printf( _n( '1 comment', '%1$s comments', get_comments_number(), 'appliance' ), number_format_i18n( get_comments_number() ) ); ?></a></div>-->
</div>
<?php
        endwhile; endif;

        ?>
        <hr>