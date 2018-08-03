<!DOCTYPE html>
<?php tha_html_before(); ?>
<html <?php language_attributes(); ?>>
<head>
	<?php tha_head_top(); ?>
    <meta charset="<?php bloginfo( 'charset' ); ?>"/>
    <title><?php wp_title(); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11"/>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>
	<?php if ( is_singular() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	} ?>
	<?php tha_head_bottom(); ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class() ?>>
<?php tha_body_top(); ?>
<?php if ( wp_is_mobile() ): ?>
<div class="container-fluid mobile" id="wrap">
	<?php else: ?>
    <div class="container" id="wrap">
		<?php endif; ?>
        <div class="row">
            <div class="col">
                <header>
                    <ul class="header-logo nav mt-3">
                        <li class="nav-item">
                            <a href="<?php echo home_url() ?>"><img id="header_logo" class="rounded float-left"
                                                                    src="<?php echo get_template_directory_uri() . '/inc/brain.png' ?>"></a>
                        </li>
                        <li class="nav-item">
                            <div id="header_page_name" class="nav-link active">Decent Productivity</div>
                        </li>
						<?php echo str_replace( 'lang-item ', 'lang-item nav-item language-flag ', pll_the_languages( array(
							'show_flags'   => 1,
							'show_names'   => 0,
							'hide_current' => 1,
							'echo'         => 0
						) ) ); ?>
                    </ul>
					<?php tha_header_before(); ?>
					<?php tha_header_after(); ?>
                </header>
            </div>
        </div>
        <hr>
