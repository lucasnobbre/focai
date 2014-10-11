<?php get_header(); ?>
	<div id="maincontent">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); //The Loop?>
		<div <?php post_class()?>>
			<h1><?php the_title()?></h1>
			<span class="date"><?php echo get_the_date(); ?></span> | <a href="<?php echo site_url()?>/?cat=<?php $category = get_the_category(); echo $category[0]->term_id;?>"><?php $category = get_the_category(); echo $category[0]->cat_name;?></a></a>
			<hr>
			
			
<?php the_content()?>
			
			<div class="postfooter">
			<a href="<?php the_permalink(); ?>"><?php the_date()?></a> <?php wp_link_pages( array( 'before' => __('Pages', 'appliance'), 'after' =>'' ) ); ?><br/>
			<?php _e('Categories','appliance');?>: <?php the_category(', '); ?> <?php if(has_tag()){the_tags( _e('Tags','appliance') . ': ', ', ');}?>
			</div>
			
		
		</div>
		<div id="authorarea">
<div id="img">
<?php if (function_exists('get_avatar')) { echo get_avatar( get_the_author_email(), '100' ); }?>
</div>
<div id="areaautor">
<h3><?php the_author_posts_link(); ?></h3>
<br><br>
<p><?php the_author_description(); ?></p>
</div>
</div><span style="font-family: Georgia, 'Times New Roman', 'Bitstream Charter', Times, serif; font-size: 13px; line-height: 19px;"> </span>
		
<?php comments_template( '', true ); ?>
		<?php endwhile;endif;?>
	</div>
	
<div class="divider"></div>
<div id="postnavigation">
<div id="previousposts"><?php previous_post_link('%link'); ?></div>
<div id="nextposts"><?php next_post_link('%link'); ?></div>
</div>

<?php get_footer(); ?>