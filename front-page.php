<?php get_header(); ?>
<body>  
<?php get_template_part("content/standards/navigation/navigation"); ?>
<?php get_template_part("content/elements/slider/slider"); ?>


<?php

    // Check value exists.
    if( have_rows('content') ):

        // Loop through rows.
        while ( have_rows('content') ) : the_row();

            // Case: Paragraph layout.
            if( get_row_layout() == 'textimage' ):
                
                get_template_part("content/elements/textimage/textimage"); 
                // Do something...

            // Case: Download layout.
            elseif( get_row_layout() == 'download' ): 
                $file = get_sub_field('file');
                // Do something...

            endif;

        // End loop.
        endwhile;

    // No value.
    else :
        // Do something...
    endif;
?>
<?php get_footer(); ?>
</body>
</html>