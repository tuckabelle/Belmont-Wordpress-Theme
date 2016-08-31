<?php /* Template Name: Contact*/ ?>
    
<h1 class="menuHeading"> </h1>
<div class="container">

	<?php
	$page_Contact = get_page_by_title( 'Contact' );
	$ID_Contact   = $page_Contact->ID;
	$address_text = get_post_meta( $ID_Contact, 'address_meta', true );
	$phone_text   = get_post_meta( $ID_Contact, 'phone_meta', true );
	$email_text   = get_post_meta( $ID_Contact, 'email_meta', true );
	?>
 
        <div class="col-sm-6">
                <?php
	            $page_Contact = get_page_by_title( 'Contact' );
	            $ID_Contact = $page_Contact->ID;   
	            $address_text = get_post_meta( $ID_Contact, '_belmontContact_address', true); 
	            $phone_text = get_post_meta( $ID_Contact, '_belmontContact_phone', true); 
	            $email_text = get_post_meta( $ID_Contact, '_belmontContact_email', true); 


	            echo '<div class="contact_info contact_address"> <p><span>Address:</span><br>'  . esc_html( $address_text ) . '</p> </div>';
	            echo '<div class="contact_info contact_phone"> <p><span>Phone:</span><br>'  . esc_html( $phone_text ) . '</p></div>';
	            echo '<div class="contact_info contact_email"> <p> <span>Email:</span><br>'  . esc_html( $email_text ) . '</p></div>';

                ?>
   
        </div> <!-- end col-sm-6-->
  
         <div class="col-sm-6">
	               <div class="contact_info"><span>HOURS OF OPERATION:</span></div>
	               <div id="">
	                   <?php
	                       $page_Contact = get_page_by_title( 'Contact' );
	                       $ID_Contact = $page_Contact->ID;   
	                       $monday_text = get_post_meta( $ID_Contact, '_belmontHours_monday', true); 
	                       $tuesday_text = get_post_meta( $ID_Contact, '_belmontHours_tuesday', true); 
	                       $wednesday_text = get_post_meta( $ID_Contact, '_belmontHours_wednesday', true); 
	                       $thursday_text = get_post_meta( $ID_Contact, '_belmontHours_thursday', true); 
	                       $friday_text = get_post_meta( $ID_Contact, '_belmontHours_friday', true); 
	                       $saturday_text = get_post_meta( $ID_Contact, '_belmontHours_saturday', true); 
	                       $sunday_text = get_post_meta( $ID_Contact, '_belmontHours_sunday', true); 

	                       echo "<div class='contact_info'>Monday: " . esc_html( $monday_text ) . "</div>";
	                       echo "<div class='contact_info'>Tuesday: " . esc_html( $tuesday_text ) . "</div>";
	                       echo "<div class='contact_info'>Wednesday: " . esc_html( $wednesday_text ) . "</div>";
	                       echo "<div class='contact_info'>Thursday: " . esc_html( $thursday_text ) . "</div>";
	                       echo "<div class='contact_info'>Friday: " . esc_html( $friday_text ) . "</div>";
	                       echo "<div class='contact_info'>Saturday: " . esc_html( $saturday_text ) . "</div>";
	                       echo "<div class='contact_info'>Sunday: " . esc_html( $sunday_text ) . "</div>";

	                   ?>
	               </div><!-- end hours-->

         </div><!-- end col-md-6-->
         <div class="clearfix"></div>

        <div class="col-sm-12">
           <div class="map">
            <?php
            $query = new WP_query( 'pagename=contact' );
            //The Loop
            if ( $query->have_posts() )
              {
                while ( $query->have_posts() )
                  {
                    $query->the_post();
                    // check if the post has a Post Thumbnail assigned to it.
                    if ( has_post_thumbnail() )
                      {
                        the_post_thumbnail();
                      }
                  }
              }
            wp_reset_postdata();
            ?>
          </div> <!-- end map-->  
        </div> <!-- end col-sm-12 col-md-6-->
 
</div>  <!-- end container -->
<?php
        
        
        
        