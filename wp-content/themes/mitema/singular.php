singular.php <br>

<?php

if( have_posts() ) :
    while ( have_posts() ) : the_post();
    
    $title = get_the_title();
    echo $title;
    //the_content();

    endwhile;
else :
    _e('No hay publicaciones');
endif;