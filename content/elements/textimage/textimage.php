<div class="textimage">
    
    <?php 
        $headline = get_sub_field("headline");
        $text = get_sub_field("text");
        $uberschrift_typ = get_sub_field("uberschrift_typ");
    ?>



    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 textimage__textContainer order-1 order-lg-0">
                <<?php echo $uberschrift_typ ?> class="textimage__headline"><?php echo $headline ?></<?php echo $uberschrift_typ ?>>
                <p class="textimage__text"><?php echo $text ?></p>
                <?php

                if( have_rows('icon_mit_text') ):
                    ?>
                    <div class="textimage__container">
                        <?php
                        // Loop through rows.
                        while( have_rows('icon_mit_text') ) : the_row();

                            // Load sub field value.
                            $icon = get_sub_field('icon');
                            $text = get_sub_field('text');

                        ?>
                            <div class="textimage__extras d-flex">
                                <img src="<?php echo $icon ?>" alt="" class="textimage__icon" />
                                <p class="textimage__extraText"><?php echo $text ?></p>
                            </div>
                        <?php
                            // Do something...

                        // End loop.
                        endwhile;
                        ?>
                    </div>

                        <?php

                        // No value.
                        else :
                        // Do something...
                endif;
                ?>
            </div>
            <div class="col-12 col-lg-6 textimage__imageContainer order-0 order-lg-1">
                 <?php 

                    if( have_rows('bilder') ):

                        // Loop through rows.
                        while( have_rows('bilder') ) : the_row();

                            // Load sub field value.
                            $bild = get_sub_field('bild');

                        ?>
                            <img src="<?php echo $bild ?>" alt="" class="textimage__image" />
                        <?php
                            // Do something...

                        // End loop.
                        endwhile;

                    // No value.
                    else :
                        // Do something...
                    endif;
            ?>        
            </div>
        </div>
    </div>
</div>