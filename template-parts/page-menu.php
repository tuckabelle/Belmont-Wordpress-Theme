<?php /* Template Name: Menu */ ?>
<div class="container">
             <?php
             $page_Menu       = get_page_by_title( 'Menu' );
             $ID_Menu          = $page_Menu->ID;   

	$nameUpdate  = get_post_meta( $ID_Menu, '_belmontMenu_menuUpdate', true );

              
                 echo '<div class="today_date">' . esc_html($nameUpdate ) . '</div>';

             

         ?>

           
    
    <div class="plateIcon"></div>
    
    
    <!-- APPETIZERS --!>
    <h1 class="menu-section">Appetizers</h1>
    <div class="col-sm-1"></div>
    <div class="col-sm-10">

         <?php
             $page_Menu       = get_page_by_title( 'Menu' );
             $ID_Menu          = $page_Menu->ID;   
             $entriesApps = get_post_meta( $ID_Menu, '_belmontMenu_apps', true );
             $A = 1;
             foreach ( (array) $entriesApps as $keyApp => $entryApp ) {

                 $nameApp = $descriptionApp = '';

                 if ( isset( $entryApp ['name'] ) )
                     $nameApp = ( $entryApp ['name'] );

                 if ( isset( $entryApp ['description'] ) )
                     $descriptionApp = ( $entryApp ['description'] );

                 echo '<div class="col-sm-6"><span class="menu-key">' . esc_html($nameApp ) . '</span><br />';

                 if ($A % 2 == 0) {
                          echo '<span class="menu-value">' . esc_html($descriptionApp ) . '</span></div><div class="clearfix visible-xs-block"></div>';
                 }
                 else {
                          echo '<span class="menu-value">' . esc_html($descriptionApp ) . '</span></div>';
                 }
                 $A++;
             }

         ?>

    </div> <!-- end col-sm-10 --!>
    <div class="col-sm-1"></div>
    <!-- end APPETIZERS --!>


    <!-- ENTRES --!>
    <h1 class="menu-section">ENTRES</h1>
    <div class="col-sm-1"></div>
    <div class="col-sm-10">

         <?php
             $page_Menu       = get_page_by_title( 'Menu' );
             $ID_Menu          = $page_Menu->ID;   
             $entriesEntres = get_post_meta( $ID_Menu, '_belmontMenu_entres', true );
             $E = 1;
             foreach ( (array) $entriesEntres as $keyEntre => $entryEntre ) {

                 $nameEntre = $descriptionEntre = '';

                 if ( isset( $entryEntre ['name'] ) )
                     $nameEntre = ( $entryEntre ['name'] );

                 if ( isset( $entryEntre ['description'] ) )
                     $descriptionEntre = ( $entryEntre ['description'] );

                 echo '<div class="col-sm-6"><span class="menu-key">' . esc_html($nameEntre ) . '</span><br />';

                 if ($E % 2 == 0) {
                          echo '<span class="menu-value">' . esc_html($descriptionEntre ) . '</span></div><div class="clearfix visible-xs-block"></div>';
                 }
                 else {
                          echo '<span class="menu-value">' . esc_html($descriptionEntre ) . '</span></div>';
                 }
                 $E++;
             }

         ?>

    </div> <!-- end col-sm-10 --!>
    <div class="col-sm-1"></div>
    <!-- end ENTRES --!>


    <!-- DESSERTS --!>
    <h1 class="menu-section">Desserts</h1>
    <div class="col-sm-1"></div>
    <div class="col-sm-10">

         <?php
             $page_Menu       = get_page_by_title( 'Menu' );
             $ID_Menu          = $page_Menu->ID;   
             $entriesDesserts = get_post_meta( $ID_Menu, '_belmontMenu_desserts', true );
             $D = 1;
             foreach ( (array) $entriesDesserts as $keyDessert => $entryDessert ) {

                 $nameDessert = $descriptionDessert = '';

                 if ( isset( $entryDessert ['name'] ) )
                     $nameDessert = ( $entryDessert ['name'] );

                 if ( isset( $entryDessert ['description'] ) )
                     $descriptionDessert = ( $entryDessert ['description'] );

                 echo '<div class="col-sm-6"><span class="menu-key">' . esc_html($nameDessert ) . '</span><br />';

                 if ($D % 2 == 0) {
                          echo '<span class="menu-value">' . esc_html($descriptionDessert ) . '</span></div><div class="clearfix visible-xs-block"></div>';
                 }
                 else {
                          echo '<span class="menu-value">' . esc_html($descriptionDessert ) . '</span></div>';
                 }
                 $D++;
             }

         ?>

    </div> <!-- end col-sm-10 --!>
    <div class="col-sm-1"></div>
    <!-- end DESSERTS --!>




    <div class="clear"></div>

   <!-- DRINKS MENU --!>
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
         <div class="wineIcon"></div>
         <div class="cocktailGap"></div>
         <div id="drinksMenu" class="imageBorder">

                 <div id="cocktails">
                     <div class="col-sm-6">
                   <!-- COCKTAILS --!>
                    <h1 class="menu-section">Cocktails</h1>
                         <?php
                             $page_Menu       = get_page_by_title( 'Menu' );
                             $ID_Menu          = $page_Menu->ID;   
                             $entriesCocktails = get_post_meta( $ID_Menu, '_belmontMenu_cocktails', true );
                             $C = 1;
                             foreach ( (array) $entriesCocktails as $keyCocktail => $entryCocktail ) {

                                 $nameCocktail = $descriptionCocktail = '';

                                 if ( isset( $entryCocktail ['name'] ) )
                                     $nameCocktail = ( $entryCocktail ['name'] );

                                 if ( isset( $entryCocktail ['description'] ) )
                                     $descriptionCocktail = ( $entryCocktail ['description'] );

                                 echo '<div><span class="menu-key">' . esc_html($nameCocktail ) . '</span><br />';
                                 echo '<span class="menu-value">' . esc_html($descriptionCocktail ) . '</span></div>';
                             }

                         ?>
                    <!-- end COCKTAILS --!>                    
                            
                    </div><!-- end col-sm-6 --!>
                </div><!-- end cocktails--!>

 

                <div id="wine">
                    <div class="col-sm-6">
                    <!-- WINE --!>
                    <h1 class="menu-section">Wine</h1>
                         <?php
                             $page_Menu       = get_page_by_title( 'Menu' );
                             $ID_Menu          = $page_Menu->ID;   
                             $entriesWine = get_post_meta( $ID_Menu, '_belmontMenu_wine', true );
                             $C = 1;
                             foreach ( (array) $entriesWine as $keyWine => $entryWine ) {

                                 $nameWine = $descriptionWine = '';

                                 if ( isset( $entryWine ['name'] ) )
                                     $nameWine = ( $entryWine ['name'] );

                                 if ( isset( $entryWine ['description'] ) )
                                     $descriptionWine = ( $entryWine ['description'] );

                                 echo '<div><span class="menu-key">' . esc_html($nameWine ) . '</span><br />';
                                 echo '<span class="menu-value">' . esc_html($descriptionWine ) . '</span></div>';
                             }

                         ?>
                    <!-- end WINE --!>                    

                    </div><!-- end col-sm-6 --!>
                </div><!-- end wine--!>
   
         </div><!-- end drinks menu--!>
    </div> <!-- col-sm-10 --!>
    
   
    <div class="col-sm-1"></div>












</div> <!-- end menu container --!>
