<?php get_template_part( 'loggedin' ); ?>


<header class="banner top-header" role="banner">

<div style="height: 100%; width: 100%;" class="top-header-st"></div>      
    
  <div class="container wrap">
      
    <div class="content row"> 
      
    <div class="col-lg-8">
        
        
    <div id="left-header-float">
    
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>" rel="home">    
        
    <?php $custom_logo_id = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
if ( has_custom_logo() ) {
        echo '<img id="logo" src="'. esc_url( $logo[0] ) .'">';
} else {
        echo '';
} ?>
    
    <h1 style="float: left; font-size: 31px;"><?php bloginfo('name'); ?> <?php get_template_part( 'siteverification' ); ?></h1>
    
    </a>
        
    </div>
    
    
   <div class="header-social-right" style="float: right;">
      
      
     <div class="header-sponsor">   <?php if ( get_theme_mod( 'animals_clubsponsor' ) ) : ?>    <a href="<?php echo esc_url( get_theme_mod( 'primaryclubsponsor_url' ) ); ?>">
			  
			  <div class="defospons"> <img style="height:100%;" src="<?php echo esc_url( get_theme_mod( 'animals_clubsponsor' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">  </div> </a>  <?php else : ?>  <div id="ifnoheadersponsor"> <span>Advertise Here</span> </div>  <?php endif; ?> </div>
       
   </div>
    
      <nav id="site-navigation" class="nav-primary fullwidthnav main-navigation" role="navigation">
      <div>
          
  <nav id="site-navigation" class="main-navigation mobilemenu-1" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
   <div class="dropdown3 mobile-menu">
       
     <button onclick="myFunction('Demo1')" class="w3-btn w3-block w3-black w3-left-align">Menu <i class="fa fa-bars" aria-hidden="true"></i></button>
<div id="Demo1" class="w3-container w3-hide">
  <?php
									wp_nav_menu( array(
										'theme_location' => 'primary',
										'menu_class'     => 'primary-menu',
									 ) );
								?>
</div>
       
  </div>
</nav><!-- .main-navigation -->            
             
             
             <script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction3() {
    document.getElementById("myDropdown3").classList.toggle("with4");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn3')) {

    var dropdowns = document.getElementsByClassName("dropdown-content3");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('with4')) {
        openDropdown.classList.remove('with4');
      }
    }
  }
}
</script>
          
      <div id="desktop-menu">
          
        <?php
      if (has_nav_menu('primary')) :
        wp_nav_menu(['theme_location' => 'primary', 'menu_class' => 'nav']);
      endif;
      ?>  
          
      </div>
  
      </div>
    </nav>
  
</header>

    
        
    
    
    
    </div>
    
  
  </div>
  

</header>

  <div id="primarysponsor-ad"><?php if ( get_theme_mod( 'animals_clubsponsor' ) ) : ?> <a href="<?php echo esc_url( get_theme_mod( 'primaryclubsponsor_url' ) ); ?>">  
			  
			  <div class="defospons header-sponsor"> <img style="height:100%;" src="<?php echo esc_url( get_theme_mod( 'animals_clubsponsor' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">  </div>  </a>  <?php else : ?>   <?php endif; ?></div>

<div style="clear: both; height: 0px; display: block;"></div>  

<div class="wrap" style="margin-top: 0px !important; margin-bottom: 0px !important; padding-bottom: 0px !important; padding-top: 0px !important; background: transparent !important;">
<div class="container">
<?php get_template_part('adverts/below', 'header'); ?>    
</div>    
</div>