<div class="offset-3 col-6 mb-3 offset-md-0 offset-lg-0 offset-xl-0 col-lg-3 col-xl-3 col-md-6  col-lg-6">
    <div class="card" style="width: 18rem;">
        <a href="<?php echo get_permalink() ?>">
            <img class="card-img-top" src="https://picsum.photos/200" alt="Card image cap">
        </a>
        <div class="card-body">
            <p class="card-text"><?php echo the_title(); ?></p>
            <p class="card-text"><?php  the_category( ',' ); ?></p>
        </div>
    </div>
</div>
