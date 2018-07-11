<div class="col-md-3">
    <div class="card" style="width: 18rem;">
        <a href="<?php echo get_permalink() ?>">
            <img class="card-img-top" src="https://picsum.photos/200" alt="Card image cap">
        </a>
        <div class="card-body">
            <p class="card-text"><?php echo the_title(); ?></p>
            <p class="card-text"><?php echo the_category( ',' ); ?></p>
        </div>
    </div>
</div>
