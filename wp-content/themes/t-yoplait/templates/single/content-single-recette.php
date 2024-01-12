<?php 
$_temps_prepa = get_field('temps_de_preparation_recette');
$_budget_recette = get_field('budget_recette');
$_nbre_personne = get_field('nombre_de_presonne');
$_banner_image = get_field('image_de_la_banniere_dans_la_page_single');
?>
<section class="kl-section-single-recette-hero">
    <span class="kl-decor-hero d-sm-block d-none">
        <img src="<?php bloginfo('template_directory'); ?>/assets/img/single_recette/decor-petale-1.svg" class="img-fluid" alt="">
    </span>
    <!--banner image-->
    <?php 
    if($_banner_image){
    ?>
    <img src="<?php echo $_banner_image; ?>" class="img-fluid kl-img-hero" alt="">
    <?php }else{ ?>
    <img src="<?php bloginfo('template_directory'); ?>/assets/img/single_recette/hero_single_recette.png" class="img-fluid kl-img-hero" alt="">   
    <?php }?>    
    <!--Infos temps budget et portion-->
    <!--
    <div class="container kl-container-1140">
        <div class="kl-list-timing kl-bg-white text-center mx-auto kl-max-w-600 kl-color-black-primary">
            <div class="row kl-gx-lg-100 kl-gx-60 kl-row-timing">
                <div class="col-md-4 mb-md-0 mb-4 kl-col">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-md-none d-block me-2">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/icon/icon-flowers.svg" class="img-fluid" alt="">
                        </div>
                        <div>
                            <div class="kl-title text-uppercase">
                                Temps
                            </div>
                            <div class="kl-list-icon" style="white-space: nowrap">
                            <?php 
                                if($_temps_prepa){
                                ?>
                                <i class="me-sm-1"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icon/icon-timer.svg" class="img-fluid" alt=""></i>
                                <span><?php echo $_temps_prepa; ?></span>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="d-md-none d-block ms-2">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/icon/icon-flowers.svg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-6 kl-col">
                    <div class="kl-title text-uppercase">
                        budget
                    </div>
                    <?php 
                    if($_budget_recette){
                    ?>
                    <div class="kl-list-device kl-list-icon">
                    <span class="kl-device">
                        <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.39458 11.1111C2.35425 10.7463 2.33355 10.3756 2.33355 10C2.33355 9.62444 2.35425 9.25367 2.39458 8.88889H1.22244C0.608795 8.88889 0.111328 8.39145 0.111328 7.77778C0.111328 7.16413 0.608795 6.66667 1.22244 6.66667H2.90257C4.27536 2.78269 7.97944 0 12.3336 0C14.0929 0 15.7886 0.455911 17.2847 1.30994C17.8176 1.61417 18.003 2.29281 17.6988 2.82574C17.3946 3.35868 16.7159 3.54409 16.183 3.23987C15.0202 2.57614 13.704 2.22222 12.3336 2.22222C9.23088 2.22222 6.55255 4.03894 5.30425 6.66667H10.1113C10.725 6.66667 11.2224 7.16413 11.2224 7.77778C11.2224 8.39145 10.725 8.88889 10.1113 8.88889H4.63454C4.58263 9.25178 4.55577 9.62278 4.55577 10C4.55577 10.3772 4.58263 10.7482 4.63454 11.1111H10.1113C10.725 11.1111 11.2224 11.6086 11.2224 12.2222C11.2224 12.8359 10.725 13.3333 10.1113 13.3333H5.30425C6.55255 15.961 9.23088 17.7778 12.3336 17.7778C13.6766 17.7778 14.9677 17.4379 16.1137 16.7992C16.6497 16.5004 17.3264 16.6929 17.6251 17.2289C17.9239 17.7649 17.7316 18.4416 17.1956 18.7403C15.7209 19.5622 14.0577 20 12.3336 20C7.97944 20 4.27536 17.2173 2.90257 13.3333H1.22244C0.608795 13.3333 0.111328 12.8359 0.111328 12.2222C0.111328 11.6086 0.608795 11.1111 1.22244 11.1111H2.39458Z" fill="#CF000C"/>
                        </svg>
                        <span class="kl-price"><?php echo $_budget_recette; ?></span>
                    </span>
                    </div>
                    <?php }else{?>
                    <div class="kl-list-device">
                        <span class="kl-device">
                            <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.39458 11.1111C2.35425 10.7463 2.33355 10.3756 2.33355 10C2.33355 9.62444 2.35425 9.25367 2.39458 8.88889H1.22244C0.608795 8.88889 0.111328 8.39145 0.111328 7.77778C0.111328 7.16413 0.608795 6.66667 1.22244 6.66667H2.90257C4.27536 2.78269 7.97944 0 12.3336 0C14.0929 0 15.7886 0.455911 17.2847 1.30994C17.8176 1.61417 18.003 2.29281 17.6988 2.82574C17.3946 3.35868 16.7159 3.54409 16.183 3.23987C15.0202 2.57614 13.704 2.22222 12.3336 2.22222C9.23088 2.22222 6.55255 4.03894 5.30425 6.66667H10.1113C10.725 6.66667 11.2224 7.16413 11.2224 7.77778C11.2224 8.39145 10.725 8.88889 10.1113 8.88889H4.63454C4.58263 9.25178 4.55577 9.62278 4.55577 10C4.55577 10.3772 4.58263 10.7482 4.63454 11.1111H10.1113C10.725 11.1111 11.2224 11.6086 11.2224 12.2222C11.2224 12.8359 10.725 13.3333 10.1113 13.3333H5.30425C6.55255 15.961 9.23088 17.7778 12.3336 17.7778C13.6766 17.7778 14.9677 17.4379 16.1137 16.7992C16.6497 16.5004 17.3264 16.6929 17.6251 17.2289C17.9239 17.7649 17.7316 18.4416 17.1956 18.7403C15.7209 19.5622 14.0577 20 12.3336 20C7.97944 20 4.27536 17.2173 2.90257 13.3333H1.22244C0.608795 13.3333 0.111328 12.8359 0.111328 12.2222C0.111328 11.6086 0.608795 11.1111 1.22244 11.1111H2.39458Z" fill="#CF000C"/>
                            </svg>
                        </span>
                        <span class="kl-device">
                            <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.39458 11.1111C2.35425 10.7463 2.33355 10.3756 2.33355 10C2.33355 9.62444 2.35425 9.25367 2.39458 8.88889H1.22244C0.608795 8.88889 0.111328 8.39145 0.111328 7.77778C0.111328 7.16413 0.608795 6.66667 1.22244 6.66667H2.90257C4.27536 2.78269 7.97944 0 12.3336 0C14.0929 0 15.7886 0.455911 17.2847 1.30994C17.8176 1.61417 18.003 2.29281 17.6988 2.82574C17.3946 3.35868 16.7159 3.54409 16.183 3.23987C15.0202 2.57614 13.704 2.22222 12.3336 2.22222C9.23088 2.22222 6.55255 4.03894 5.30425 6.66667H10.1113C10.725 6.66667 11.2224 7.16413 11.2224 7.77778C11.2224 8.39145 10.725 8.88889 10.1113 8.88889H4.63454C4.58263 9.25178 4.55577 9.62278 4.55577 10C4.55577 10.3772 4.58263 10.7482 4.63454 11.1111H10.1113C10.725 11.1111 11.2224 11.6086 11.2224 12.2222C11.2224 12.8359 10.725 13.3333 10.1113 13.3333H5.30425C6.55255 15.961 9.23088 17.7778 12.3336 17.7778C13.6766 17.7778 14.9677 17.4379 16.1137 16.7992C16.6497 16.5004 17.3264 16.6929 17.6251 17.2289C17.9239 17.7649 17.7316 18.4416 17.1956 18.7403C15.7209 19.5622 14.0577 20 12.3336 20C7.97944 20 4.27536 17.2173 2.90257 13.3333H1.22244C0.608795 13.3333 0.111328 12.8359 0.111328 12.2222C0.111328 11.6086 0.608795 11.1111 1.22244 11.1111H2.39458Z" fill="#FFC2C9"/>
                            </svg>
                        </span>
                        <span class="kl-device">
                            <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.39458 11.1111C2.35425 10.7463 2.33355 10.3756 2.33355 10C2.33355 9.62444 2.35425 9.25367 2.39458 8.88889H1.22244C0.608795 8.88889 0.111328 8.39145 0.111328 7.77778C0.111328 7.16413 0.608795 6.66667 1.22244 6.66667H2.90257C4.27536 2.78269 7.97944 0 12.3336 0C14.0929 0 15.7886 0.455911 17.2847 1.30994C17.8176 1.61417 18.003 2.29281 17.6988 2.82574C17.3946 3.35868 16.7159 3.54409 16.183 3.23987C15.0202 2.57614 13.704 2.22222 12.3336 2.22222C9.23088 2.22222 6.55255 4.03894 5.30425 6.66667H10.1113C10.725 6.66667 11.2224 7.16413 11.2224 7.77778C11.2224 8.39145 10.725 8.88889 10.1113 8.88889H4.63454C4.58263 9.25178 4.55577 9.62278 4.55577 10C4.55577 10.3772 4.58263 10.7482 4.63454 11.1111H10.1113C10.725 11.1111 11.2224 11.6086 11.2224 12.2222C11.2224 12.8359 10.725 13.3333 10.1113 13.3333H5.30425C6.55255 15.961 9.23088 17.7778 12.3336 17.7778C13.6766 17.7778 14.9677 17.4379 16.1137 16.7992C16.6497 16.5004 17.3264 16.6929 17.6251 17.2289C17.9239 17.7649 17.7316 18.4416 17.1956 18.7403C15.7209 19.5622 14.0577 20 12.3336 20C7.97944 20 4.27536 17.2173 2.90257 13.3333H1.22244C0.608795 13.3333 0.111328 12.8359 0.111328 12.2222C0.111328 11.6086 0.608795 11.1111 1.22244 11.1111H2.39458Z" fill="#FFC2C9"/>
                            </svg>
                        </span>
                        <span class="kl-device">
                            <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.39458 11.1111C2.35425 10.7463 2.33355 10.3756 2.33355 10C2.33355 9.62444 2.35425 9.25367 2.39458 8.88889H1.22244C0.608795 8.88889 0.111328 8.39145 0.111328 7.77778C0.111328 7.16413 0.608795 6.66667 1.22244 6.66667H2.90257C4.27536 2.78269 7.97944 0 12.3336 0C14.0929 0 15.7886 0.455911 17.2847 1.30994C17.8176 1.61417 18.003 2.29281 17.6988 2.82574C17.3946 3.35868 16.7159 3.54409 16.183 3.23987C15.0202 2.57614 13.704 2.22222 12.3336 2.22222C9.23088 2.22222 6.55255 4.03894 5.30425 6.66667H10.1113C10.725 6.66667 11.2224 7.16413 11.2224 7.77778C11.2224 8.39145 10.725 8.88889 10.1113 8.88889H4.63454C4.58263 9.25178 4.55577 9.62278 4.55577 10C4.55577 10.3772 4.58263 10.7482 4.63454 11.1111H10.1113C10.725 11.1111 11.2224 11.6086 11.2224 12.2222C11.2224 12.8359 10.725 13.3333 10.1113 13.3333H5.30425C6.55255 15.961 9.23088 17.7778 12.3336 17.7778C13.6766 17.7778 14.9677 17.4379 16.1137 16.7992C16.6497 16.5004 17.3264 16.6929 17.6251 17.2289C17.9239 17.7649 17.7316 18.4416 17.1956 18.7403C15.7209 19.5622 14.0577 20 12.3336 20C7.97944 20 4.27536 17.2173 2.90257 13.3333H1.22244C0.608795 13.3333 0.111328 12.8359 0.111328 12.2222C0.111328 11.6086 0.608795 11.1111 1.22244 11.1111H2.39458Z" fill="#FFC2C9"/>
                            </svg>
                        </span>
                    </div>
                    <?php }?>
                </div>
                <div class="col-md-4 col-6 kl-col">
                    <div class="kl-title text-uppercase">
                        Portion
                    </div>
                    <?php 
                    if($_nbre_personne){
                    ?>
                    <div class="kl-list-icon">
                        <i class="me-1"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icon/icon-user.svg" class="img-fluid" alt=""></i>
                        <span><?php echo $_nbre_personne; ?></span>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    -->
</section>
<?php 
$_recette_content = get_the_content();
the_content();
?>
<?php 
$autres_recette= new WP_Query(array(
    'post_type'=>'recette',
    'posts_per_page' => 3,
    'post_status' => ' publish',
    'order' => 'DESC',
    'post__not_in' => array( get_the_ID() )
));
if($autres_recette->have_posts()) :
?>
<section class="kl-section-single-recette-actus <?php if(empty($_recette_content)) { echo "pt-5"; }?>">
    <span class="kl-decor-bg d-sm-block d-none"><img src="<?php bloginfo('template_directory'); ?>/assets/img/single_recette/bg-decor.svg" class="img-fluid" alt=""></span>
    <div class="container kl-container-1140">
        <div class="kl-mb-40 kl-title-section kl-title-28 kl-custom kl-svg-fleur-title ps-0  ms-md-0 pt-0">
            <h3><span class="kl-color-red">Découvrez</span> <br class="d-sm-none d-block"> d’autres recettes</h3>
        </div>
        <div class="row kl-gx-xl-30 kl-gy-24 kl-gy-xl-30 mx-auto kl-max-w-1038">
            <?php 
            while($autres_recette->have_posts()): $autres_recette->the_post(); 
            $_autres_recettes_tps_prepa = get_field('temps_de_preparation_recette', get_the_ID());
            $_portion_autres_recettes_ = get_field('nombre_de_presonne', get_the_ID());
            ?>
            <div class="col-md-6 col-lg-4 js-bloc-recette noemie ingredient1" >
                <?php if( is_user_logged_in() ): ?>
                    <a href="<?php the_permalink(); ?>" class="text-decoration-none">
                <?php else: ?>
                    <a href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#id-moncompte">
                <?php endif ?>
                    <div class="kl-card-recette h-100">
                        <div class="kl-card-recette-img">
                            <?php the_post_thumbnail( 'recette-image', array('class' => 'img-fluid') ); ?>
                        </div>
                        <div class="kl-card-recette-body">
                            <h5><?php the_title(); ?></h5>
                            <div class="kl-card-recette-infos">
                                <?php
                                if($_autres_recettes_tps_prepa){
                                ?>
                                <div class="kl-recette-info">
                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.9998 26.6667C21.1545 26.6667 25.3332 22.488 25.3332 17.3333C25.3332 14.7765 24.3052 12.46 22.6398 10.7743L24.2494 9.16471L22.8352 7.75049L21.082 9.50371C19.8832 8.72397 18.4942 8.21211 16.9997 8.05293V6H19.9998V4H11.9998V6H14.9997V8.05295C13.5054 8.21213 12.1165 8.72397 10.9178 9.50364L9.16453 7.75041L7.75032 9.16463L9.35989 10.7742C7.69458 12.4599 6.6665 14.7765 6.6665 17.3333C6.6665 22.488 10.8452 26.6667 15.9998 26.6667ZM15.9998 10C11.9497 10 8.6665 13.2832 8.6665 17.3333C8.6665 21.3835 11.9497 24.6667 15.9998 24.6667C20.05 24.6667 23.3332 21.3835 23.3332 17.3333C23.3332 13.2832 20.05 10 15.9998 10Z" fill="#CF000C"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.6665 16.6666V11.9998H14.6665V18.6666H19.9998V16.6666H16.6665Z" fill="#CF000C"/>
                                    </svg>
                                    <span><?php echo $_autres_recettes_tps_prepa; ?></span>
                                </div>
                                <?php } ?>
                                <?php
                                if($_portion_autres_recettes_){
                                ?>
                                <div class="kl-recette-info">
                                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M24.375 22.75C24.375 22.75 26 22.75 26 21.125C26 19.5 24.375 14.625 17.875 14.625C11.375 14.625 9.75 19.5 9.75 21.125C9.75 22.75 11.375 22.75 11.375 22.75H24.375ZM11.4107 21.125C11.3987 21.1233 11.3868 21.1212 11.375 21.1185C11.3766 20.6895 11.6464 19.4447 12.61 18.3235C13.507 17.2721 15.0833 16.25 17.875 16.25C20.6651 16.25 22.2414 17.2738 23.14 18.3235C24.1036 19.4447 24.3717 20.6911 24.375 21.1185L24.362 21.1217C24.3544 21.123 24.3469 21.1241 24.3392 21.125H11.4107ZM17.875 11.375C18.737 11.375 19.5636 11.0326 20.1731 10.4231C20.7826 9.8136 21.125 8.98695 21.125 8.125C21.125 7.26305 20.7826 6.4364 20.1731 5.8269C19.5636 5.21741 18.737 4.875 17.875 4.875C17.013 4.875 16.1864 5.21741 15.5769 5.8269C14.9674 6.4364 14.625 7.26305 14.625 8.125C14.625 8.98695 14.9674 9.8136 15.5769 10.4231C16.1864 11.0326 17.013 11.375 17.875 11.375ZM22.75 8.125C22.75 8.76519 22.6239 9.39912 22.3789 9.99058C22.1339 10.582 21.7748 11.1195 21.3221 11.5721C20.8695 12.0248 20.332 12.3839 19.7406 12.6289C19.1491 12.8739 18.5152 13 17.875 13C17.2348 13 16.6009 12.8739 16.0094 12.6289C15.418 12.3839 14.8805 12.0248 14.4279 11.5721C13.9752 11.1195 13.6161 10.582 13.3711 9.99058C13.1261 9.39912 13 8.76519 13 8.125C13 6.83207 13.5136 5.59209 14.4279 4.67785C15.3421 3.76361 16.5821 3.25 17.875 3.25C19.1679 3.25 20.4079 3.76361 21.3221 4.67785C22.2364 5.59209 22.75 6.83207 22.75 8.125ZM11.271 15.08C10.621 14.8753 9.95091 14.7408 9.27225 14.6786C8.89091 14.6424 8.50806 14.6245 8.125 14.625C1.625 14.625 0 19.5 0 21.125C0 22.2089 0.541125 22.75 1.625 22.75H8.476C8.2351 22.2427 8.11496 21.6865 8.125 21.125C8.125 19.4837 8.73763 17.8067 9.89625 16.406C10.2911 15.9282 10.751 15.4814 11.271 15.08ZM7.995 16.25C7.03325 17.6951 6.51372 19.3892 6.5 21.125H1.625C1.625 20.7025 1.8915 19.4513 2.86 18.3235C3.74563 17.29 5.2845 16.2825 7.995 16.2516V16.25ZM2.4375 8.9375C2.4375 7.64457 2.95111 6.40459 3.86535 5.49035C4.77959 4.57611 6.01957 4.0625 7.3125 4.0625C8.60543 4.0625 9.84541 4.57611 10.7596 5.49035C11.6739 6.40459 12.1875 7.64457 12.1875 8.9375C12.1875 10.2304 11.6739 11.4704 10.7596 12.3846C9.84541 13.2989 8.60543 13.8125 7.3125 13.8125C6.01957 13.8125 4.77959 13.2989 3.86535 12.3846C2.95111 11.4704 2.4375 10.2304 2.4375 8.9375ZM7.3125 5.6875C6.45055 5.6875 5.6239 6.02991 5.0144 6.6394C4.40491 7.2489 4.0625 8.07555 4.0625 8.9375C4.0625 9.79945 4.40491 10.6261 5.0144 11.2356C5.6239 11.8451 6.45055 12.1875 7.3125 12.1875C8.17445 12.1875 9.0011 11.8451 9.6106 11.2356C10.2201 10.6261 10.5625 9.79945 10.5625 8.9375C10.5625 8.07555 10.2201 7.2489 9.6106 6.6394C9.0011 6.02991 8.17445 5.6875 7.3125 5.6875Z" fill="#CF000C"/>
                                    </svg>
                                    <span><?php echo $_portion_autres_recettes_; ?></span>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="kl-card-recette-footer">
                            <div class="flex-shrink-0 me-2">
                                <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17 17.8013C15.6471 17.8013 14.5464 18.902 14.5464 20.2549C14.5464 21.2317 15.1203 22.0768 15.9484 22.4713V26.2265H18.0515V22.4712C18.8797 22.0766 19.4536 21.2316 19.4536 20.2548C19.4536 18.902 18.3529 17.8013 17 17.8013Z" fill="#F4F4F4"/>
                                    <path d="M24.1856 12.187V7.18557C24.1856 3.22341 20.9622 0 17 0C13.0379 0 9.81444 3.22341 9.81444 7.18557V12.187C6.83941 14.3921 4.90723 17.9281 4.90723 21.9072C4.90723 28.5752 10.332 34 17 34C23.668 34 29.0928 28.5752 29.0928 21.9072C29.0928 17.9281 27.1606 14.3921 24.1856 12.187ZM11.9175 7.18557C11.9175 4.38306 14.1975 2.10309 17 2.10309C19.8025 2.10309 22.0825 4.38306 22.0825 7.18557V10.9359C20.5364 10.2169 18.8144 9.81443 17 9.81443C15.1856 9.81443 13.4636 10.2169 11.9175 10.936V7.18557ZM17 31.8969C11.4917 31.8969 7.01032 27.4156 7.01032 21.9072C7.01032 16.3989 11.4917 11.9175 17 11.9175C22.5084 11.9175 26.9897 16.3989 26.9897 21.9072C26.9897 27.4156 22.5084 31.8969 17 31.8969Z" fill="#F4F4F4"/>
                                </svg>
                            </div>
                            <div>Inscrivez-vous pour accéder à cette recette</div>
                        </div>
                    </div>
                </a>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>
<?php endif; ?>