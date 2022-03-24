<?php 
    $metaNav = "content/standards/navigation/metaNav";
        get_template_part($metaNav);
?>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a href="<?php echo home_url(''); ?>"><img src="<?php the_field("logo"); ?>" class="navbar-brand"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">


<?php 

wp_nav_menu( array(
  "menu_class" => "navbar-nav me-auto mb-2 mb-lg-0",
  "container" => false,
  'theme_location' => 'mainnav',

  ) );
?>
    </div>
  </div>
</nav>