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
 
        <div class="col-sm-12 col-md-6">
            <div class="contact_info contact_address">
                <p>
                <span>Address:</span><br><?php echo $address_text; ?>
                </p>
            </div>
  
            <div class="contact_info contact_phone">
                <p>
                <span>Phone:</span><br><?php echo $phone_text; ?>
                </p>
            </div>
  
            <div class="contact_info contact_email">
                <p>
                <span>Email:</span><br><?php echo $email_text; ?>
                </p>
            </div>
  
        </div> <!-- end col-sm-12 col-md-6-->
  
        <div class="col-sm-12 col-md-6 map">
   
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
  
        </div> <!-- end col-sm-12 col-md-6-->
 
</div>  <!-- end container -->
<?php
        
        
        
        