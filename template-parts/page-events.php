<?php
/* Template Name: Events*/
?>

    <div class="container">
        <div class="col-sm-8">
            <h1 class="menuHeading"> </h1>
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
                            
            <div class="resInfo-content">
		<?php
		$page_Events    = get_page_by_title( 'Events' );
		$ID_Events      = $page_Events->ID;
		$size_text      = get_post_meta( $ID_Events, 'size_meta', true );
		$occupancy_text = get_post_meta( $ID_Events, 'occupancy_meta', true );
		$details_text   = get_post_meta( $ID_Events, 'details_meta', true );
		?>
 
                <p><span>Size: </span><?php echo $size_text;?></p>
                <p><span>Max Occupancy: </span><?php echo $occupancy_text; ?></p>
                <p><span>Details: </span><?php echo $details_text; ?></p>

            </div><!-- end resInfo-content -->

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
         
     </div><!-- end col-sm-8 -->

            <div class="col-sm-4">
            <h1 class="menuHeading">Upcoming Events</h1>
                <div class="event">
                    <?php
                    $page_Events        = get_page_by_title( 'Events' );
                    $ID_Events          = $page_Events->ID;
                    $event1Name_text    = get_post_meta( $ID_Events, 'event1Name_meta', true );
                    $event1Date_text    = get_post_meta( $ID_Events, 'event1Date_meta', true );
                    $event1course1_text = get_post_meta( $ID_Events, 'event1-course1_meta', true );
                    $event1course2_text = get_post_meta( $ID_Events, 'event1-course2_meta', true );
                    $event1course3_text = get_post_meta( $ID_Events, 'event1-course3_meta', true );
                    ?>
 
                     <p class="eventDate"><?php echo $event1Date_text; ?></p>
                     <p class="eventTitle"><?php echo $event1Name_text; ?></p>

                     <div class="menu_indent">
                         <p class="eventMenu">Menu</p>

                         <p><?php echo $event1course1_text; ?></p>
                         <p><?php echo $event1course2_text; ?></p>
                         <p><?php echo $event1course3_text; ?></p>

                     </div><!-- end menu_indent -->
            </div><!-- end resInfo-content -->

     </div><!-- end col-sm-4 -->
         
</div>  <!-- end container -->
<?php
        
      