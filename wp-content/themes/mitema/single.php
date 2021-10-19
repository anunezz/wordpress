<?php 
get_header();
?>

<h1>single.php</h1>

<h2>Validar si es un single</h2>
<hr>
<?php 
    if( is_single() || single(10)){
        echo "Es single la pagina"; 
    }else{
        echo "No es single";
    }
?>



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
    echo $titulo."<br><br>";

    //$contenido = get_the_excerpt(); //*muestra el contenido original
    //$contenido = get_the_content(); //*muestra el contenido original
    //$contenido = the_excerpt();     //*muestra el contenido modificado
    //$contenido = the_content();     //*muestra el contenido modificado
    $contenido = the_content(); //! modificacion desde hook
    //! $contenido2 apply_filters para get_the_content
    $contenido2 = apply_filters("get_the_content", get_the_content() );
    echo $contenido."<hr>";
    echo $contenido2."<hr>";
    //! $contenido2 apply_filters para get_the_excerpt
    $contenido3 = apply_filters("hola", get_the_excerpt() );
    echo get_the_excerpt();


    endwhile;
else :
    _e('No hay publicaciones');
endif;
