<?php/*Template Name: Blog (News) Page*/?><style>#blogpage {margin-top: 15px;}#blogpage a {position: relative;}#blogpage a:nth-child(4n):after { content: '\a'; white-space: pre; display: block; clear: both; width: 100%; height: 0px; }</style>                <div style="display: none !important;">      <?php while ( have_posts() ) : the_post(); ?>            <header class="entry-header">              <h1 class="entry-title"><?php the_title(); ?></h1>            </header>                         <div style="text-align: center;"> <?php the_content(); ?> </div>                                      <?php endwhile; // end of the loop. ?>        </div>                     <div id="blogpage">                <?php // the query to set the posts per page to 3$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;$args = array('posts_per_page' => 8, 'paged' => $paged );query_posts($args); ?><!-- the loop --><?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>	<style>.imgholder2, .the-individual-article h3 {background: #eee;} .imgholder2 {overflow: hidden; height: 195px;} .the-individual-article img {visibility: hidden;}		.the-individual-article .featuredimage:hover, .the-individual-article .featuredimage:focus {border-bottom-left-radius: 0px !important;}		.the-individual-article .featuredimage {border-bottom-left-radius: 15px; width: 100%; height: 100%;}  .the-individual-article h3 {padding-top: 9px !important; padding-bottom: 9px !important; background: #eee; padding-left: 11px; padding-right: 10px; font-family: arial !important; margin-top: 0px !important;} 			@media screen and (max-width: 950px){.the-individual-article {width: 100% !important; clear: both; padding-right: 5px; padding-left: 5px;}}		@media screen and (min-width: 951px) { .the-individual-article {position: relative;}.the-individual-article{width: calc(50% - 8px); padding-right: 8px; float: left !important;}}		.the-individual-article {font-family: arial !important; margin-bottom: 23px; float: left;}</style>			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">		<div class="the-individual-article">	    	<div style="display: block; background: #eee;">	    	<div class="imgholder2"> <?php if ( has_post_thumbnail() ) : ?>  <div class="featuredimage" style="background: url(<?php the_post_thumbnail_url(); ?>); background-size: cover; background-repeat: no-repeat;"> </div> <img alt="https://teamwebsites.co.uk/defaultnewspic.JPG" src="<?php the_post_thumbnail_url(); ?>"/> <?php else: ?> <div class="featuredimage" style="background: url(https://teamwebsites.co.uk/defaultnewspic.JPG); background-size: cover; background-repeat: no-repeat;"> </div> <img alt="https://teamwebsites.co.uk/defaultnewspic.JPG" src="https://teamwebsites.co.uk/defaultnewspic.JPG"/>    <?php endif; ?> </div>	 	<h3><?php$thetitle = $post->post_title; /* or you can use get_the_title() */$getlength = strlen($thetitle);$thelength = 26;echo substr($thetitle, 0, $thelength);if ($getlength > $thelength) echo "...";?> </h3>    		</div>	    	</div>		</a><?php endwhile; ?><!-- pagination --><div style="width: 100%; height: 7px; clear: both;"></div><?php previous_posts_link(); ?><?php next_posts_link(); ?><?php else : ?><!-- No posts found --><?php endif; ?>                   </div>          