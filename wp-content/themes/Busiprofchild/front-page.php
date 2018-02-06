<?php
get_header();

if ( have_posts() ):

    while ( have_posts() ):
        
        the_post();
    ?>
    <!--Zone1-->
    <div class="container">
        <div class="row carousel-holder">
            <div class="col-md-12">
                 <!-- equivalent get_the_title() => the_title() -->
                <?php
                
                // je récupère le champ ACF avec son nom

                $slides = array();
                $slides[] = get_field('slide1');
                $slides[] = get_field('slide2');
                $slides[] = get_field('slide3');
                // si j'ajoute un champ slide4 j'aurais seulement à ajouter
                // $slides[] = get_field('slide4');
                
                ?>
                <div id="carousel-star" class="carousel slide" data-ride="carousel">
                        <!-- les petits ronds -->
                        <ol class="carousel-indicators">
                            <?php foreach( $slides as $index => $image ) :  ?>
                            <li data-target="#carousel-star" data-slide-to="<?= $index ?>" <?= ( $index == 0) ? 'class="active"' : '' ?>></li>
                        <?php endforeach; ?>
                        </ol>
                        <!-- les images -->
                        <div class="carousel-inner">
                            <?php foreach ( $slides as $index => $image ) : ?>
                            <div class="item <?= ( $index == 0 ) ? 'active' : '' ?>">
                                <img src="<?= $slides[$index]['url'] ?>" class="slide-image" alt="<$= $image['alt'] ?>">
                            </div>
                            <?php endforeach ?>
                        </div>
                        <a class="left carousel-control" href="#carousel-star" data-slide="prev">
                            <span class="fa fa-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-star" data-slide="next">
                            <span class="fa fa-chevron-right"></span>
                        </a>

                
                </div>
  
            </div>
        </div>
    </div>

    <!--Zone2-->
    <?php 
    $p1 = get_field('texte_haut_gauche');
    $p2 = get_field('texte_haut_droite');
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-justify"><?= $p1 ?></div>
            <div class="col-md-6 text-justify"><?= $p2 ?></div>
        </div>
    </div>

    <!--Zone3 -->
    <?php
        $image       = get_field('image_parallaxe');
        $hauteur     = get_field('hauteur_parallaxe');
    ?>
    <div class= "container-fluid">
        <div class="row">
           <div class="img_parallax" style="background : url(<?= $image['url']?>); height:<?= $hauteur ?>px;"></div>
         </div>
    </div>    
    <!--Zone4-->
    <?php
    $p3 = get_field('texte_central');
    ?>
    <div class= "container">
        <div class="row">
           <div class="col-md-12 text-justify"><?= $p3 ?></div>
         </div>
    </div>  
    <!--Zone4-->
    
    
    <div class= "container">
        <div class="row">
           <div class="col-md-3"><?= ?></div>
         </div>
    </div>


    <?php
    endwhile;

endif;

get_footer();

?>