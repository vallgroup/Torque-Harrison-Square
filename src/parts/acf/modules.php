<?php

$modules = 'modules';

if ( have_rows( $modules ) ):

  while ( have_rows( $modules ) ) : the_row();

    switch ( get_row_layout() ) {
    }

  endwhile;
endif;

?>
