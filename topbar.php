<div id="video_preview" style="border:1px dashed #333333;">
<?php query_posts('category_name=United\ States&showposts=10');

if ( have_posts() ) : while ( have_posts() ) : the_post();
  printf("WOOT<br>");
endwhile; else:
  printf("FAIL");
endif;
//Reset Query
wp_reset_query();
?>


</div>
