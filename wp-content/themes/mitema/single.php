<h2>single.php - dsddss</h2>

<br>
<h2>do_action</h2>
<?php 
//do action
do_action('mt_creditos','Adrian',33);
?>

<?php

if( have_posts() ) :
    while ( have_posts() ) : the_post();
    
    $titulo = get_the_title();
    echo $titulo;
    ?>
    <br>
    <?php
    //$contenido = get_the_excerpt();
    //$contenido = get_the_content();
    $contenido = the_content(); //! modificacion desde hook
    echo $contenido;
    //the_content();

    endwhile;
else :
    _e('No hay publicaciones');
endif;
