<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; <?php _e('Blog Archive','ml');?> <?php } ?> <?php wp_title(); ?></title>
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
<meta name="keywords" content="<?php bloginfo('description'); ?>" />
<meta name="description" content="<?php bloginfo('description'); ?>" />
<!-- link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" / -->
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> <?php _e('RSS Feed','ml');?>" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<!-- NOTE: This STYLE block removed from Flickr Widget and placed here to simulate Wordpress.com install - DO NOT PROPAGATE! -->
<style type="text/css">
#flickr_badge_source_txt {padding:0; font: 11px Arial, Helvetica, Sans serif; color:#666666;}
#flickr_badge_icon {display:block !important; margin:0 !important; border: 1px solid rgb(0, 0, 0) !important;}
#flickr_icon_td {padding:0 5px 0 0 !important;}
.flickr_badge_image {text-align:center !important;}
.flickr_badge_image img {border: 1px solid black !important;}
#flickr_badge_uber_wrapper {width:150px;}
#flickr_www {display:block; text-align:center; padding:0 10px 0 10px !important; font: 11px Arial, Helvetica, Sans serif !important; color:#3993ff !important;}
#flickr_badge_uber_wrapper a:hover,
#flickr_badge_uber_wrapper a:link,
#flickr_badge_uber_wrapper a:active,
#flickr_badge_uber_wrapper a:visited {text-decoration:none !important; background:inherit !important;color:#3993ff;}
#flickr_badge_wrapper {background-color:#ffffff;border: solid 1px #000000}
#flickr_badge_source {padding:0 !important; font: 11px Arial, Helvetica, Sans serif !important; color:#666666 !important;}
</style>

<?php
global $page_sort;
	if(get_settings('mistylook_sortpages')!='')
	{
		$page_sort = 'sort_column='. get_settings('mistylook_sortpages');
	}
	global $pages_to_exclude;

	if(get_settings('mistylook_excludepages')!='')
	{
		$pages_to_exclude = 'exclude='. get_settings('mistylook_excludepages');
	}
?>
<?php wp_head(); ?>
<!-- NOTE: This LINK tag added to simulate Wordpress.com install - DO NOT PROPAGATE! -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
</head>
<body id="section-index">


<div id="navigation">
<ul>
	<li <?php if(is_home()){echo 'class="current_page_item"';}?>><a href="<?php bloginfo('siteurl'); ?>/" title="<?php _e('Home','ml');?>"><?php _e('Home','ml');?></a></li>
		<?php wp_list_pages('title_li=&depth=1&'.$page_sort.'&'.$pages_to_exclude)?>
<!--	<li class="search"><form method="get" id="searchform" action="<?php bloginfo('home'); ?>"><input type="text" class="textbox" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" /><input type="submit" id="searchsubmit" value="<?php _e('Search','ml');?>" /></form></li>-->
</ul>
</div><!-- end id:navigation -->


<div id="container">


<div id="header">
<h1><a href="<?php bloginfo('siteurl');?>/" title="<?php bloginfo('name');?>"><?php bloginfo('name');?></a></h1>
<p id="desc"><?php bloginfo('description');?></p>
</div><!-- end id:header -->


<div id="feedarea">
<dl>
	<dt><strong><?php _e('Feed on','ml');?></strong></dt>
	<dd><a href="<?php bloginfo('rss2_url'); ?>"><?php _e('Posts','ml');?></a></dd>
	<dd><a href="<?php bloginfo('comments_rss2_url'); ?>"><?php _e('Comments','ml');?></a></dd>
</dl>
</div><!-- end id:feedarea -->


  <div id="headerimage">
</div><!-- end id:headerimage -->
