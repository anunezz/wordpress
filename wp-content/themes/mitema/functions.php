<?php
function soporte_formatos(){
    add_theme_support( 'post-formats',['video','gallery','image'] );
}

add_action( 'after_setup_theme','soporte_formatos' );

function add_formatos_soportes(){
    add_post_type_support( 'page','post-formats' );
}

add_action( 'init','add_formatos_soportes' );

// function modificar_excerpt_length( $length ){
//     return 2;
// }

// add_filter('excerpt_length','modificar_excerpt_length',999);

//!como crear un hook
//!mt_veces_guardados crea un registro en la tabla wp_options al guardar desde la consola
function mt_veces_guardados($post_id,$post){
    $veces_guardado = get_option("veces_guardado_$post_id",0);
    update_option("veces_guardado_$post_id", ++$veces_guardado);
}
//do_action('save_post',$post_id,$post);
add_action('save_post','mt_veces_guardados',10,2);

//!como visualizar un hook al front
function mt_titulo_veces_guardado($title,$id){
    //!consultamos el registro de la tabla wp_aoption
    $veces_guardado = get_option("veces_guardado_$id");
    // is_user_logged_in() 
    // current_user_can('manage_options') 
    // is_admin()
    if ( is_numeric( $veces_guardado ) && is_user_logged_in()) {
        return "$title - (Veces Guardado: # $veces_guardado)";
    }
    return $title."xxx".$id;
}

add_filter('the_title','mt_titulo_veces_guardado',10,2);


add_filter('the_content','mt_destacado_contenido');
//! imagen destacada
function mt_destacado_contenido( $contenido ){
    // if( is_single() && has_post_thumbnail() ){
    //     $thumbnail = get_the_post_thumbnail();
    //     $contenido = $thumbnail . $contenido;
    // }

    return $contenido." adrian modificado...";
}

//utilizando do_action
function nuevos_creaditos($nombre,$edad){
    echo "<h2>Extendiendo el tema por otro desarrollador $nombre y su edad es de $edad.</h2>";
}

add_action('mt_creditos','nuevos_creaditos',10,2);
//removiendo acciones
//remove_action('mt_creditos');

function nuevo_filtro_creditos( $text_creditos ,$text){
    return str_replace('Adrian', 'Otro desarrollador.',$text_creditos)." ----- ".$text;
}

add_filter('mt_creditos_filtro','nuevo_filtro_creditos',10,2);

//remove_filter();

//remove_all_actions('save_post);
//remove_all_filters('the_title');