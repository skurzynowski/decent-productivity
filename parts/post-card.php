<!--<div class="mb-3 col-12  offset-md-0 offset-lg-0 offset-xl-0 col-lg-3 col-xl-3 col-md-3">-->
    <div class="card mb-3" style="width: 18rem;">
        <a href="<?php echo get_permalink() ?>">
            <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url() ?>" alt="Card image cap">
        </a>
        <div class="card-body">
            <p class="card-text"><?php echo the_title(); ?></p>
            <p class="card-text"><?php  the_category( ',' ); ?></p>
        </div>
    </div>
