<?php
$header_estilo = '';
if ( $header_estilo === "estilo1" ) {
    get_header("estilo1");
}else if(  $header_estilo === "estilo2" ){
    get_header("estilo2");
}else{
    get_header();
}
?>

home.php