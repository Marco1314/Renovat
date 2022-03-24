<div class="metaNav">
    <div class="container-fluid">
        <div class="metaNav__content">
            <div class="metaNav__contact">
                <?php 
                    wp_nav_menu( $args = array(
                        'theme_location'    => "metaNav-contact", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
                        "menu_class" => "metanav"
                    ) );
                ?>
            </div>
            <div class="metaNav__info">
                <?php 
                    wp_nav_menu( $args = array(
                        'theme_location'    => "metaNav-s", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
                        "menu_class" => "metanav"
                    ) );
                ?>
            </div>
        </div>
    </div>
</div>