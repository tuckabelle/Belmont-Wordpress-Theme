<?php /* Template Name: Gallery*/ ?>

<div class="container">
    <div id="galleryContent">
            
        <?php 
              $query = new WP_query( 'pagename=gallery' );
              //The Loop
              if ( $query->have_posts() ){
                  while ( $query->have_posts() ){
                      $query->the_post();
                      echo '<div class="entry-content">';
                      the_content();
                      echo '</div>';
                   }
              }
         wp_reset_postdata();
         ?>
     
    </div>  <!-- end galleryContent -->

</div>  <!-- end container -->
<?php 
        
        
        


