<?php /* Template Name: About */ ?>
<div class="container">
    <h1 class="menuHeading">Philosophy
    </h1>
    <div class="philosophy">
        <?php
        $page_About = get_page_by_title( 'About' );
        $ID_About = $page_About->ID;   
        $phil_text = get_post_meta( $ID_About, 'philosophy_meta', true ); 
        ?>

    <p>
        <?php echo $phil_text ?>
    </p>
    </div>


        <?php 
        $query = new WP_query( 'pagename=about' );
        //The Loop
        if ( $query->have_posts() ){
            while ( $query->have_posts() ){
                $query->the_post(); ?>
        
    <h1 class="menuHeading">History</h1>
    <div class="entry-content">

                <?php the_content(); ?>
    </div>

            <?php }
        }
        wp_reset_postdata(); ?>

</div>  <!-- end container -->
<?php 