<?php

get_header();
tha_content_before();
if ( have_posts() ) : while ( have_posts() ):
	the_post();
	?>
    <div class="content">
        <div class="row">
            <div class="col-6 offset-3" align="center"><h1><?php the_title() ?></h1></div>
        </div>
        <div class="row">
            <div class="col-6 offset-3" align="right"><h5>Autor: <?php the_author() ?> Utworzono: <?php the_date() ?></h5></div>
        </div>
        <div class="row mt-2">
            <div class="col-6 offset-3">
				<?php the_content(); ?>
            </div>
        </div>
    </div>
<?php
endwhile;
	?>
    <div class="row">
    <div class="col-6 offset-3">
		<?php
		// Previous/next post navigation.
//		the_post_navigation( array(
//			'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentyfifteen' ) . '</span> ' .
//			               '<span class="screen-reader-text">' . __( 'post:', 'twentyfifteen' ) . '</span> ' .
//			               '<span class="post-title">%title</span>',
//			'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentyfifteen' ) . '</span> ' .
//			               '<span class="screen-reader-text">' . __( 'post:', 'twentyfifteen' ) . '</span> ' .
//			               '<span class="post-title">%title</span>',
//		) );
		?>
    </div>
    </div><?php
endif;
tha_content_after();

get_footer();
