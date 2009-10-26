<?php
/*
Template Name: Videos
*/
?>
<?php get_header();?>
<?php

$excluded_categories = get_post_meta($post->ID, 'excluded-category');

$category_ids = get_all_category_ids();
$video_category_ids = array();
foreach($category_ids as $cat_id) {
  if(in_array(get_cat_name($cat_id), $excluded_categories)){
    $video_category_ids[] = $cat_id;
  }
}


?>
<div id="content">
<div id="content-main">
<div class="post">
	<h2 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e('Permanent Link:','ml');?> <?php the_title(); ?>"><?php the_title(); ?></a></h2>
	<p class="post-info"><?php edit_post_link(); ?></p>

	<div class="entry">

	<?php echo $post->post_content;?>

	<div id="videos_month_listing" style="display:none;">
		<h3><?php _e('Month Posted','ml'); ?></h3>
		<ul><?php wp_get_archives('type=monthly'); ?></ul>
	</div>

	<h3><?php _e('Last 5 Entries','ml');?></h3>
	<ul>
		<?php $posts = query_posts('showposts=5');?>
		<?php if ($posts) : foreach ($posts as $post) : the_post(); ?>
			<li><h4><em><?php the_time(__('d M Y','ml')); ?></em><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e('Permanent Link:','ml');?> <?php the_title(); ?>"><?php the_title(); ?></a></h4></li>
			<?php endforeach; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.','ml'); ?></p>
		<?php endif; ?>
	</ul>

	<h3><?php _e('Countries &amp; Categories'); ?></h3>
	<ul>
	<?php
	if (function_exists('wp_list_categories')){
		wp_list_categories(array('show_count'=>1,
					 'hierarchical'=>0,
					 'title_li'=>'',
					 'exclude'=> implode($video_category_ids, ',')));
	}else{
		wp_list_cats('optioncount=1');
	}?>
	</ul>

	<?php if (function_exists('wp_tag_cloud')) {  ?>
	<h3>
		<?php _e('Tags','ml'); ?>                                  
	</h3>
	<p>
	<?php wp_tag_cloud(); ?>
	</p>
	<?php } ?>
	</div>
	</div>
</div><!-- end id:content-main -->
<?php get_sidebar();?>
<?php get_footer();?>
