<?php get_header(); ?>
<div class="row cuerpo">
    <div class="row seccion-pagina">
        <div class="columns grande-1 medio-2 chico-12">
            <span>Noticias</span>
        </div>
        <div class="columns medio-10 grande-11 chico-12 slider-home">
            <!-- Slider main container -->
			<div class="swiper-container">
			<!-- Additional required wrapper -->
            <?php $nostros = get_page_by_title('nosotros');?>
			<div class="swiper-wrapper">
				<!-- Slides -->
				<a href="<?php echo get_permalink($nostros->ID) ?>" class="swiper-slide" style="background-image: url(https://www.temporal.sumario.mx/proxima/wp-content/themes/proxima-theme/images/portada-metapath.png);padding: 40px 60px;background-size: cover;"><h1>METAPATH</h1><br><p>Inhumación</p></a>
                <a href="<?php echo get_permalink($nostros->ID) ?>" class="swiper-slide" style="background-image: url(https://cognicert.com/wp-content/uploads/2021/06/iStock-135018895.jpg);padding: 40px 60px;background-size: cover;"><h1>LAPCIT</h1><p>Patólogo anátomo</p></a>
                <a href="<?php echo get_permalink($nostros->ID) ?>" class="swiper-slide" style="background-image: url(https://images.squarespace-cdn.com/content/v1/58d24ae4ff7c508a02bdce8a/1610752979680-XFF5CT2LFPFREL0A5WY8/funeral.png?format=750w);padding: 40px 60px;background-size: cover;"><h1>VALPARAISO</h1><p>Servicios Funerarios</p></a>
			</div> 
		</div>
        </div>
        </div>

        <!-- ejemplo actualizacion git -->

    <!-- <div class="row seccion-pagina">
        <div class="cuadricula">
            <div class="cuadro grande-1 medio-2 chico-12">
                <span>Vacantes</span>
            </div>
            <div class="cuadro medio-10 grande-11 chico-12 slider-home">
                <div class="row">
                    <div class="cuadricula">
                        <div class="cuadro grande-4 chico-12 cuadro-trabajo">
                            <p>Patólogo anátomo</p>
                            <p>&nbsp;&nbsp;Valparaiso</p>
                            &nbsp;&nbsp;<p class="fa fa-map-marker">Tepic Nayarit</p>
                            <br>
                            <a>Ver mas</a>
                        </div>

                        <div class="cuadro grande-4 chico-12 cuadro-trabajo2">
                            <p>Patólogo anátomo</p>
                            <p>&nbsp;&nbsp;Valparaiso</p>
                            &nbsp;&nbsp;<p class="fa fa-map-marker"> Tepic Nayarit</p>
                            <br>
                            <a>Ver mas</a>
                        </div>

                        <div class="cuadro grande-4 chico-12 cuadro-trabajo3">
                            <p>Patólogo anátomo</p>
                            <p>&nbsp;&nbsp;Valparaiso</p>
                            &nbsp;&nbsp;<p class="fa fa-map-marker"> Tepic Nayarit</p>
                            <br>
                            <a>Ver mas</a>
                        </div>
                    </div>
                    <br><br>
                        <a href="">Ver todas las ofertas de trabajo ></a>
                </div>
            </div>
        </div>
    </div> -->

    <div class="seccion-pagina">
        <div class="cuadricula">
            <div class="cuadro grande-1 medio-2 chico-12">
                <span>Vacantes</span>
            </div>
            <div class="cuadro medio-10 grande-11 chico-12 slider-home">
                <?php 
						
				        $trabajos = get_posts( array(
				            'post_type' => 'trabajos_pt',
				            'posts_per_page' => 3,
				            'orderby' => 'post_date', 
				            'order' => 'DESC',
				        ) );
				 			
				            foreach ( $trabajos as $trabajo ):
								$empresa_relacionada = get_post_meta( $trabajo->ID, 'empresa_relacionada_meta', true );
                                 $empresa_relacionada = $empresa_relacionada[0];
                            
						?>

                <div class="cuadro grande-4 chico-12 cuadro-trabajo" style="border-bottom: 20px solid 
                           <?php echo get_post_meta( $empresa_relacionada, 'color_destacado_meta', true ); ?>;"> <!-- Color Estilo -->
                           
                           <?php echo get_the_title( $trabajo->ID ); ?><br><br> <!-- Imprime Puesto -->
                           &nbsp;&nbsp;<?php echo get_the_title( $empresa_relacionada); ?><br><br> <!-- Imprime Empresa -->
                           <p class="fa fa-map-marker"> Tepic Nayarit</p><br><!-- Imprime Ubicacion !falta metabox -->         
                           <a href="<?php echo get_permalink($trabajo->ID); ?>">Ver mas</a>
                           
                           <!-- echo "<a href='$link' title='$linktitle'>$linkname</a>"; -->
                               
                </div>
                <?php endforeach;?>
                <div class="row">
                    <br><br>
                        <a href="<?php echo get_post_type_archive_link( 'trabajos_pt' ) ?> ">Ver todas las ofertas de trabajo ></a>
                </div>  
            </div>
        </div>    
    </div>

    <div class="row seccion-empresa">
        <div class="cuadricula">
            <div class="cuadro grande-1 medio-2 chico-12">
                <span>Empresas</span>
            </div>
            <div class="cuadro medio-10 grande-11 chico-12 slider-home">
                <div class="row">
                    <div class="cuadricula">
                    <?php 
				        $empresas = get_posts( array(
				            'post_type' => 'empresas_pt',
				            'posts_per_page' => 4,
				            'orderby' => 'post_date', 
				            'order' => 'ASC',
				        ) );
				 			
				            foreach ( $empresas as $empresa ):
								$logo_empresa = get_post_meta( $empresa->ID, 'logo_destacado_meta', true ); 
                            
						?>
                            <div class="cuadro grande-3 medio-6 chico-12 cuadro-trabajo logo-empresa2">
                                <a href="#"><?php echo $logo_empresa; ?></a>
                            </div>
                            <?php endforeach;?>             
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row seccion-nosotros">
            <div class="columns grande-1 medio-2 chico-12">
                <span>Nosotros</span>
            </div>

            <div class="columns medio-10 grande-11 chico-12 slider-home"> 
                <?php $nostros = get_page_by_title('nosotros');
                    $img_nosotros = get_the_post_thumbnail_url($nostros->ID);
                    $image_id = get_post_thumbnail_id($nostros->ID);
                    $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
                ?>
                <img alt="<?php echo $image_alt  ?>" src="<?php echo $img_nosotros  ?>">
                <?php echo $nostros->post_content ?>
            </div>
    </div>


    <div class="seccion-insta">
        <div class="cuadricula">
            <div class="cuadro grande-1 medio-2 chico-12">
                <span>INSTAGRAM</span>
            </div>
            <div class="cuadro medio-10 grande-11 chico-12 slider-home">
                <div class="row">
                    <div class="cuadricula">
                        <div class="cuadro grande-4 chico-12 cuadro-trabajo">
                           <a href="https://www.instagram.com/" target="_Blank"><img class="img-insta" src="<?php bloginfo('template_url'); ?>/images/proxima-instagram.png"></a>
                        </div>

                        <div class="cuadro grande-4 chico-12 cuadro-trabajo2">
                            <a href="https://www.instagram.com/" target="_Blank"><img class="img-insta" src="<?php bloginfo('template_url'); ?>/images/proxima-instagram.png"></a>
                        </div>

                        <div class="cuadro grande-4 chico-12 cuadro-trabajo3">
                            <a href="https://www.instagram.com/" target="_Blank"><img class="img-insta" src="<?php bloginfo('template_url'); ?>/images/proxima-instagram.png"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <br>
    </div>

</div>

<div class="row footer-proxima">
	<div class="row">
    <div class="row pre-footer">
            <p>SIGUENOS EN FACEBOOK @PROXIMA</p>
	</div>
    </div>
</div>
<?php get_footer(); ?>