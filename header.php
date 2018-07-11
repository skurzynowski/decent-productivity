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
<div class="container" id="wrap">
    <div class="row">
        <div class="col">
            <header>
                <ul class="nav mt-3">
                    <li class="nav-item">
                        <img id="header_logo" class="rounded float-left" src="<?php echo get_template_directory_uri() .'/inc/brain.png' ?>">
                    </li>
                    <li class="nav-item">
                        <div id="header_page_name" class="nav-link active" >Decent Productivity</div>
                    </li>
                </ul>
		        <?php tha_header_before(); ?>
		        <?php tha_header_after(); ?>
            </header>
        </div>
    </div>
    <hr>
