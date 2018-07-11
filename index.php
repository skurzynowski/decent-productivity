<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Decent Productivity Framework
 */
get_header('main');
?>
    <div class="row">
        <div class="col">
            <div class="jumbotron">
                <div class="text-center mb-4">
                    <img id="brain_img"  src="<?php echo get_template_directory_uri() .'/inc/brain.png' ?>" class="img-fluid" alt="Responsive image">
                </div>
                <h1 class="display-4">Witaj na blogu Decent Productivity!</h1>
                <p class="lead">Przetestowane metody i narzędzia podnoszące produktywność w nauce i programowaniu.</p>
                <hr class="my-4">
                <p>Większa produktywność to więcej czasu na to co naprawdę kochasz!</p>
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="<?php echo home_url('posty') ?>" role="button">Artykuły</a>
                </p>
            </div>
        </div>
    </div>
<?php

get_footer();

