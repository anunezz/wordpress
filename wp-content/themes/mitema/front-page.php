<?php
$header_estilo = 'estilo1';
if ( $header_estilo === "estilo1" ) {
    get_header("estilo1");
}else if(  $header_estilo === "estilo2" ){
    get_header("estilo2");
}else{
    get_header();
}
?>
<h2>
    front-page.php
</h2>
<br>
<h2>do_action</h2>
<?php 
//do action
do_action('mt_creditos','Adrian',33);
?>
<hr>
<h2>add_filter('mt_creditos_filtro','nuevo_filtro_creditos');</h2>
<hr>
<?php
$text_creditos = apply_filters(
    'mt_creditos_filtro','Creado por Adrian.','Texto extra'
);

echo $text_creditos;
echo "<hr>";


//comando para vincular un archivo 
include get_theme_file_path() ."/titulo.php";

get_template_part('contenidos/contenido');
get_template_part('contenidos/contenido','pagina');

//mostrar la ruta del mi tema
?>
<image src="<?php echo get_theme_file_uri('image/kiss.jpg'); ?>" />
