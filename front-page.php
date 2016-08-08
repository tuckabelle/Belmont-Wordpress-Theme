<?php
get_header(); ?>
<div class="container-fluid">
  <div class="row">
    <div id="content" class="site-content">
      <div id="sidebar" class="col-sm-2">
        <nav id="site-navigation" class="main-navigation" role="navigation">
          <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
            <?php
esc_html_e( ' ', 'belmont' ); ?>
          </button>
          <?php
if ( is_front_page() ) {
wp_nav_menu( array( 'menu' => 'Front Page Menu' ) );
} else {
wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) );
}
?>
        </nav>
        <!-- #site-navigation -->
      </div>  
      <!-- #sidebar .col-sm-2 -->
      <div id="main">
        <div class="col-sm-10">
          <section id="menu">
            <div class="pageHeader">
              <span class="pageTitle">TODAY'S MENU
              </span>
            </div>
            <?php
get_template_part( 'template-parts/page', 'menu' ); ?>
          </section>
          <section id="events">
            <div class="pageHeader">
              <span class="pageTitle">RESERVATIONS 
                <span>&
                </span> EVENTS
              </span>
            </div>
            <?php
get_template_part( 'template-parts/page', 'events' ); ?>
          </section>
          <section id="about">
            <div class="pageHeader">
              <span class="pageTitle">ABOUT
              </span>
            </div>
            <?php
get_template_part( 'template-parts/page', 'about' ); ?>
          </section>
          <section id="gallery">
            <div class="pageHeader">
              <span class="pageTitle">GALLERY
              </span>
            </div>
            <?php
get_template_part( 'template-parts/page', 'gallery' ); ?>
          </section>
          <section id="contact">
            <div class="pageHeader">
              <span class="pageTitle">CONTACT
              </span>
            </div>
            <?php
get_template_part( 'template-parts/page', 'contact' ); ?>
          </section>
        </div>  
        <!-- col-sm-10-->
      </div> 
    </div>  
    <!-- site-content-->
  </div>  
  <!-- row -->
  <?php
get_footer(); ?>
