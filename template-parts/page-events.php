<?php
/* Template Name: Events*/
?>

    <div class="container events">
        <div class="col-sm-8">
            <h1 class="eventsHeading"> </h1>
<div class="content-paragraph">
<?php
$query = new WP_query( 'pagename=events' );

//The Loop
if ( $query->have_posts() ) {
    while ( $query->have_posts() ) {
        $query->the_post();
        the_content();
    }
}
wp_reset_postdata();
?>
</div>
                            
            <div class="resInfo-content">



	                       <?php
	                       $page_Events = get_page_by_title( 'Events' );
	                       $ID_Events = $page_Events->ID;   
	                       $size_text = get_post_meta( $ID_Events, '_belmontReserveInfo_size', true); 
	                       $max_text = get_post_meta( $ID_Events, '_belmontReserveInfo_max', true); 
	                       $details_text = get_post_meta( $ID_Events, '_belmontReserveInfo_details', true); 
	                     
	                       echo "<p><span>Size: </span>" . esc_html( $size_text ) . "</p>";
	                       echo "<p><span>Max Occupancy: </span>" . esc_html( $max_text ) . "</p>";
	                       echo "<p><span>Details: </span>" . esc_html( $details_text ) . "</p>";
	                   ?>

            </div><!-- end resInfo-content -->
<div class="content-paragraph">
            <?php
            $query = new WP_query( 'pagename=events' );
            //The Loop
            if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                    $query->the_post();
                    // check if the post has a Post Thumbnail assigned to it.
                    if ( has_post_thumbnail() ) {
                        the_post_thumbnail();
                    }
                }
            }
            wp_reset_postdata();
            ?>
         </div>
     </div><!-- end col-sm-8 -->

      <div class="col-sm-4">
            <h1 class="menuHeading">Upcoming Events</h1>
                  <div class="event">

                <?php
                    $page_Events        = get_page_by_title( 'Events' );
                    $ID_Events          = $page_Events->ID;   


$entries = get_post_meta( $ID_Events, '_belmontGroup_event', true );

foreach ( (array) $entries as $key => $entry ) {

    $title = $date = $menuItem = '';

    if ( isset( $entry['title'] ) )
        $title = ( $entry['title'] );

    if ( isset( $entry['date'] ) )
        $date = ( $entry['date'] );
        


 echo '<p class="eventDate">' . esc_html($date ) . '</p>';
echo '<p class="eventTitle">' . esc_html($title ) . '</p>';

echo '<div class="menu_indent"><p class="eventMenu">Menu</p>';

foreach( $entry['menuItem'] as $item) {
        if ( isset( $item ) )
        $courseItem = (  $item );
        echo '<p>' . esc_html($item ) . '</p>';

        
}
    
         echo '</div>';

}

?>

                      </div><!-- end event -->
         



     </div><!-- end col-sm-4 -->
         




</div>  <!-- end container -->
<?php
        
      