<section class="kl-sect-hero">
    <div class="kl-hero-items">
        <div class="kl-hero-item">
            <?php if( get_field('image_hero') ): ?>
                <img src="<?php the_field('image_hero') ?>" alt="" class="img-fluid">
            <?php endif ?>
        </div>
    </div>
</section>