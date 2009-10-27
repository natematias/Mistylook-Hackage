<div id="sidebar">
<ul>
  <li class="sidebox search">
    <p>
    </p>
    <form method="get" id="searchform" action="<?php bloginfo('home'); ?>"><input type="text" class="textbox" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" /><input type="submit" id="searchsubmit" value="<?php _e('Search','ml');?>" /></form>
    <p>
    </p>
  </li>
</ul>
<ul>
<?php if ( function_exists('dynamic_sidebar')) dynamic_sidebar('side_box');  ?>
</ul>
</div><!-- end id:sidebar -->
</div><!-- end id:content -->
</div><!-- end id:container -->
