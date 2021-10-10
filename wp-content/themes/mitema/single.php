<h1>single.php</h1>

<h2>do_action</h2>
<?php 
//do action
do_action('mt_creditos','Adrian',33);
?>

<?php
if( have_posts() ) :
    while ( have_posts() ) : the_post();
?>
<h3>the_title()</h3>
<?php
$the_title = the_title();
echo $the_title."<br>";


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
