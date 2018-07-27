<?php
	get_header();
	tha_content_before();
	if ( have_posts() ) : while ( have_posts() ):
		the_post();
		?>
        <div class="content dont-break-out">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12" align="center"><h1><?php the_title() ?></h1></div>
                <div class="col-12 col-md-12 col-lg-12" align="center">
                    <hr>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12 col-md-12 col-xl-3 col-lg-3">
                    <div class="row">
                        <div class="col box_post_info">
                            <h5><i class="far fa-calendar-alt"></i>&nbsp;&nbsp;<?php the_date() ?></h5>
                            <h5><i class="far fa-user"></i>&nbsp;&nbsp;<?php the_author() ?></h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-6  col-xl-6">
					<?php the_content(); ?>
                </div>
            </div>
        </div>
	<?php
	endwhile;
		?>
        <div class="row">
        <div class="col-12 col-md-6 col-lg-6 offset-lg-3 offset-md-3">
			<?php
			?>
        </div>
        </div><?php
	endif;
?>
    <div class="row">
    <div class="col-12 col-md-12 offset-lg-3 offset-xl-3 col-lg-6  col-xl-6">
		<?php
			comments_template();
		?>
    </div>
    </div><?php
	get_footer();
