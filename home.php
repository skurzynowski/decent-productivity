<?php

get_header();
tha_content_before();
?>
    <div class="content">
    <div class="row mb-5">
        <div class="col"><h1 align="center">Ostatnio dodane artykuły</h1></div>
    </div>
<?php
$counter = 0;
if ( have_posts() ) : while ( have_posts() ):
	the_post();
	$counter ++;
	// do the post stuff
	if ( 1 === $counter ) {
		echo '<div class="row mb-5 justify-content-between">';
	}

	get_template_part( 'parts/post-card' );

	if ( 0 === $counter % 3 ) {
		?>
        </div>
        <div class="row justify-content-between">
		<?php
	}
endwhile;
	if ( 0 !== $counter % 3 ) {
		echo '</div>';
	}
endif;
?>
    </div>
<?php
tha_content_after();

get_footer();
