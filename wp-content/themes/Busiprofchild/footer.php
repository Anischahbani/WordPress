<footer>
<div class="container">
    <div class="col-md-12  text-center  menufooter">
        <?php 
            // j'affiche le menu qui est dans la zone déclarée dans functions 
             wp_nav_menu ( array('menu' => 'Menu du bas',
                                'menu_id' =>'menufooter',
                                'menu_class' => 'nav nav-pills nav-justified',
                                'items_wrap' => '<ul class="%2$s">%3$s</ul>'));
        ?>
    </div>
</div>
<div class="container-fluid">
<div class="row">
    <div class="col-md-12 text-center monfooter">
        <p>&copy; Copyright 2018 - Anis - tous droits réservés </p>
    </div>
</div>
</div>
</footer>
<?php
wp_footer();  //sert a afficher la barre admin haut de la page 