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
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Decent Productivity</a>
                    </li>
                </ul>
				<?php tha_header_before(); ?>
				<?php tha_header_after(); ?>
            </header>
        </div>
    </div>
