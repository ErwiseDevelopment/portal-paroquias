<section class="l-about u-bg-folk-theme py-5 my-4">
    
    <div class="container">

        <div class="row">
            
            
            <div class="col-12">
                
                <div class="row justify-content-end">

                    <div class="col-lg-6 mb-3 mb-lg-0">

                        <h3 class="l-about__title u-font-weight-black text-center text-uppercase u-color-folk-white pb-lg-3">
                            // nossas paróquias
                        </h3>
                    </div>
                </div>

                <div class="row">

                    <div class="col-lg-6 mt-lg-n4 px-0">

                        <style>
                            .l-about__triangle::after {
                                background-image: url(<?php echo get_field( 'icone_nossas_paroquias', 'option' ) ?>);
                            }
                        </style>

                        <div class="l-about__triangle">
                            <!--
                                $altTitle = get_the_title();
                                the_post_thumbnail('post-thumbnail', 
                                    array('class' => 'img-fluid w-100',
                                            'alt'   => $altTitle,
                                    ));
                            -->

                            <img
                            class="img-fluid w-100"
                            src="<?php echo get_field( 'imagem_nossas_paroquias', 'option' ) ?>"
                            alt="Nossas Paróquias">
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center mt-lg-n4 px-0">
                        
                        <div class="u-bg-folk-white py-3 px-4">

                            <span class="l-about__content d-block u-font-weight-semibold">
                                <!-- the_content() -->
                                <?php echo get_field( 'descricao_nossas_paroquias', 'option' ) ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 mt-4">

                <div class="row justify-content-center">

                    <div class="col-md-10">

                        <!-- swiper -->
                        <div class="swiper-container swiper-about js-swiper-about">

                            <div class="swiper-wrapper">
                                
                                <?php if(have_rows( 'fotos_nossas_paroquias', 'option' )) : 
                                        while(have_rows( 'fotos_nossas_paroquias', 'option' )) : the_row();
                                ?>
                                            <div 
                                            class="swiper-slide flex-column align-items-start  js-filter-item"
                                            data-name="<?php echo get_sub_field( 'lugar_nossas_paroquias', 'option' ) ?>"
                                            data-state="<?php echo get_sub_field( 'estado_nossas_paroquias', 'option' ) ?>">
                                            <a href="<?php echo get_sub_field( 'link_site', 'option' )?>"  target="_blank"  style="text-decoration: none;">
                                                <img
                                                class="img-fluid"
                                                src="<?php echo get_sub_field( 'foto_nossas_paroquias', 'option' ) ?>"
                                                alt="<?php echo get_sub_field( 'lugar_nossas_paroquias', 'option' ) ?>">

                                                <p class="l-about__localization u-font-weight-bold u-color-folk-white mt-2 mb-0">
                                                    <?php echo get_sub_field( 'lugar_nossas_paroquias', 'option' ) ?>
                                                </p>

                                                <p class="l-about__state u-font-weight-semibold u-color-folk-white">
                                                    // <?php echo get_sub_field( 'cidade_nossas_paroquias', 'option' ) . ' - ' . get_sub_field( 'estado_nossas_paroquias', 'option' ) ?>
                                                </p>
                                            </a>
                                            </div>
                                <?php endwhile; 
                                    endif;
                                ?>
                            </div>
                        </div>

                        <!-- arrows -->
                        <div class="swiper-button-prev swiper-button-prev-about js-swiper-button-prev-about"></div>
                        <div class="swiper-button-next swiper-button-next-about js-swiper-button-next-about"></div>
                        <!-- end swiper -->
                    </div>
                </div>
            </div>

            <div class="col-12 d-flex justify-content-center my-5">
                
                <div 
                class="l-about__box-state d-flex align-items-center mx-2 py-1 px-2 active js-filter-state"
                data-state="all-states">
                    <img
                    class="l-about__icon img-fluid"
                    src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/mapa-siglas.png"
                    alt="Todos os estados do sul do Brasil">               
                </div>


                <div 
                class="l-about__box-state d-flex align-items-center mx-2 py-1 px-2 js-filter-state"
                data-state="RS">
                    <img
                    class="l-about__icon img-fluid"
                    src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/mapa-rs.png"
                    alt="Rio Grande do Sul">               
                </div>

                <div 
                class="l-about__box-state d-flex align-items-center mx-2 py-1 px-2 js-filter-state"
                data-state="SC">
                    <img
                    class="l-about__icon img-fluid"
                    src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/mapa-sc.png"
                    alt="Santa Catarina">               
                </div>

                <div 
                class="l-about__box-state d-flex align-items-center mx-2 py-1 px-2 js-filter-state"
                data-state="PR">
                    <img
                    class="l-about__icon img-fluid"
                    src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/mapa-pr.png"
                    alt="Paraná">               
                </div>
            </div>
        </div>
    </div>
</section>