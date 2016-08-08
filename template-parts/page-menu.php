<?php /* Template Name: Menu */ ?>
<div class="container">
    
    <?php
    $post_slug = 'menu-update-record';
    $args      = array(
        'name' => $post_slug,
        'post_type' => 'food-menu',
        'post_status' => 'publish',
        'caller_get_posts' => 1 
    );
    $my_query  = null;
    $my_query  = new WP_Query( $args );
    if ( $my_query->have_posts() ) {
        while ( $my_query->have_posts() ):
            $my_query->the_post();
            $custom_field_keys = get_post_custom_keys();
            foreach ( $custom_field_keys as $key => $value ) {
                $valuet = trim( $value );
                if ( '_' == $valuet{0} )
                    continue;
                $id        = get_the_ID();
                $key_value = get_post_custom_values( $value, $id );
                $keys      = implode( $key_value );
                echo '<div class="today_date">' . $keys . '</div>';
            }
        endwhile;
    }
    wp_reset_query(); // Restore global post data stomped by the_post().
    ?>
    
    <div class="plateIcon"></div>
        
    <!-- APPETIZERS --!>
    <h1 class="menu-section">Appetizers</h1>
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
        <?php
        $post_slug = 'appetizers';
        $args = array(
                'name' => $post_slug,
                'post_type' => 'food-menu',
                'post_status' => 'publish',
                'caller_get_posts' => 1 
        );
        $my_query  = null;
        $my_query  = new WP_Query( $args );
        if ( $my_query->have_posts() ) {
            while ( $my_query->have_posts() ):
                $my_query->the_post();
                $custom_field_keys = get_post_custom_keys();
                foreach ( $custom_field_keys as $key => $value ) {
                    $valuet = trim( $value );
                    if ( '_' == $valuet{0} )
                        continue;
                    $id        = get_the_ID();
                    $key_value = get_post_custom_values( $value, $id );
                    $keys      = implode( $key_value );
                    echo '<div class="col-sm-6"><span class="menu-key">' . $value . '</span><br /><span class="menu-value">' . $keys .                 '</span></div>';
                }
            endwhile;
        }
        wp_reset_query(); // Restore global post data stomped by the_post().
        ?>

    </div> <!-- end col-sm-10 --!>
    <div class="col-sm-1"></div>

    <!-- Entres --!>
    <h1 class="menu-section">Entres</h1>
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
        <?php
        $post_slug = 'entres';
        $args = array(
                'name' => $post_slug,
                'post_type' => 'food-menu',
                'post_status' => 'publish',
                'caller_get_posts' => 1 
        );
        $my_query  = null;
        $my_query  = new WP_Query( $args );
        if ( $my_query->have_posts() ) {
            while ( $my_query->have_posts() ):
                $my_query->the_post();
                $custom_field_keys = get_post_custom_keys();
                foreach ( $custom_field_keys as $key => $value ) {
                    $valuet = trim( $value );
                    if ( '_' == $valuet{0} )
                        continue;
                    $id        = get_the_ID();
                    $key_value = get_post_custom_values( $value, $id );
                    $keys      = implode( $key_value );
                    echo '<div class="col-sm-6"><span class="menu-key">' . $value . '</span><br /><span class="menu-value">' . $keys .                 '</span></div>';
                }
            endwhile;
        }
        wp_reset_query(); // Restore global post data stomped by the_post().
        ?>

    </div> <!-- end col-sm-10 --!>
    <div class="col-sm-1"></div>


    <!-- Desserts --!>
    <h1 class="menu-section">Desserts</h1>
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
        <?php
        $post_slug = 'desserts';
        $args = array(
                'name' => $post_slug,
                'post_type' => 'food-menu',
                'post_status' => 'publish',
                'caller_get_posts' => 1 
        );
        $my_query  = null;
        $my_query  = new WP_Query( $args );
        if ( $my_query->have_posts() ) {
            while ( $my_query->have_posts() ):
                $my_query->the_post();
                $custom_field_keys = get_post_custom_keys();
                foreach ( $custom_field_keys as $key => $value ) {
                    $valuet = trim( $value );
                    if ( '_' == $valuet{0} )
                        continue;
                    $id        = get_the_ID();
                    $key_value = get_post_custom_values( $value, $id );
                    $keys      = implode( $key_value );
                    echo '<div class="col-sm-6"><span class="menu-key">' . $value . '</span><br /><span class="menu-value">' . $keys .                 '</span></div>';
                }
            endwhile;
        }
        wp_reset_query(); // Restore global post data stomped by the_post().
        ?>

    </div> <!-- end col-sm-10 --!>
    <div class="col-sm-1"></div>

    <div class="clear"></div>
    
    <!-- DRINKS MENU --!>
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
         <div class="wineIcon"></div>
         <div class="cocktailGap"></div>
         <div id="drinksMenu" class="imageBorder">

                 <div id="cocktails">
                     <div class="col-sm-6">
                     <?php
                     /* Cocktails */
                    $post_slug = 'cocktails';
                     $args      = array(
                     'name' => $post_slug,
                     'post_type' => 'food-menu',
                     'post_status' => 'publish',
                     'caller_get_posts' => 1 
                     );
                     $my_query  = null;
                     $my_query  = new WP_Query( $args );
                         if ( $my_query->have_posts() ) {
                             while ( $my_query->have_posts() ):
                                     $my_query->the_post();
                                 echo '<h1 class="menu-section">Cocktails</h1>';
                             $custom_field_keys = get_post_custom_keys();
                             foreach ( $custom_field_keys as $key => $value ) {
                                 $valuet = trim( $value );
                                 if ( '_' == $valuet{0} )
                                     continue;
                                 $id        = get_the_ID();
                                 $key_value = get_post_custom_values( $value, $id );
                                 $keys      = implode( $key_value );
                                 echo '<span class="menu-key">' . $value . '</span><br /><span class="menu-value">' . $keys . '</span>';
                             }
                             endwhile;
                         }
                     wp_reset_query(); // Restore global post data stomped by the_post().
                     ?>

                    </div><!-- end col-sm-6 --!>
                </div><!-- end cocktails--!>

                <div id="wine">
                       <div class="col-sm-6">
                     <?php
                     /* Wine */
                    $post_slug = 'wine';
                     $args      = array(
                     'name' => $post_slug,
                     'post_type' => 'food-menu',
                     'post_status' => 'publish',
                     'caller_get_posts' => 1 
                     );
                     $my_query  = null;
                     $my_query  = new WP_Query( $args );
                         if ( $my_query->have_posts() ) {
                             while ( $my_query->have_posts() ):
                                     $my_query->the_post();
                                 echo '<h1 class="menu-section">Wine</h1>';
                             $custom_field_keys = get_post_custom_keys();
                             foreach ( $custom_field_keys as $key => $value ) {
                                 $valuet = trim( $value );
                                 if ( '_' == $valuet{0} )
                                     continue;
                                 $id        = get_the_ID();
                                 $key_value = get_post_custom_values( $value, $id );
                                 $keys      = implode( $key_value );
                                 echo '<span class="menu-key">' . $value . '</span><br /><span class="menu-value">' . $keys . '</span>';
                             }
                             endwhile;
                         }
                     wp_reset_query(); // Restore global post data stomped by the_post().
                     ?>

                    </div><!-- end col-sm-6 --!>
                </div><!-- end wine--!>
   
         </div><!-- end drinks menu--!>
    </div> <!-- col-sm-10 --!>
    <div class="col-sm-1"></div>

</div> <!-- end menu container --!>
