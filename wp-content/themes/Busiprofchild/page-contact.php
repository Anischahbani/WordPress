<?php

get_header();
if( have_posts() ):
    while( have_posts() ): the_post();
    ?>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <h2><?=__('Contactez nous','busiprofchil')?></h2>
                <p class="text-justify"><?= do_shortcode(get_the_content()) ?></p><!-- do_shortcode() interprete les eventuels shortcode dans le contenu -->
             </div>   
            </div>
        </div>

    <?php
    endwhile;
endif;        
get_footer();