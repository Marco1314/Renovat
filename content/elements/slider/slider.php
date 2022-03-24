<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
      <?php 
            if( have_rows('header') ):

            // Loop through rows.
            while( have_rows('header') ) : the_row();

                // Load sub field value.
                $image = get_sub_field('image');
                ?>

                <div class="carousel-item active">
                    <img src="<?php echo $image ?>"  class="d-block w-100 slider__image" alt="...">
                </div>
                <?php

            // End loop.
            endwhile;

            // No value.
            else :
            // Do something...
            endif;
        ?>

        <div class="slider__content">
          <p class="slider__text"><?php the_field("text"); ?></p>
          <?php if(get_field("button")) {
              ?>
                  <a href="#" class="slider__button"><?php the_field("button"); ?></a>
              <?php
            } ?>
          </div>
      </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
