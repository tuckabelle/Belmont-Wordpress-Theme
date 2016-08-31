<?php /* Template Name: About */ ?>
<div class="container">
    <h1 class="menuHeading">Philosophy
    </h1>
    <div class="philosophy">
        <p>
            <?php
            $page_About = get_page_by_title( 'About' );
            $ID_About = $page_About->ID;   
            $phil_text = get_post_meta( $ID_About, '_belmont_philosophy', true); 

            echo esc_html( $phil_text );

            ?>
        </p>
    </div>


        
    <h1 class="menuHeading">History</h1>
    <div class="entry-content">
        <div class="row">
            <div class="col-sm-6">
            <div class="content-paragraph"> 
                <?php
                $page_About = get_page_by_title( 'About' );
                $ID_About = $page_About->ID;   
                $aboutP1_text = get_post_meta( $ID_About, '_belmont_p1', true); 
                echo '<p>' . esc_html( $aboutP1_text ) . '</p>';

                ?>
            </div>  <!-- end content-parapgraph -->  
            </div>  <!-- end col-sm-6 -->    
            <div class="col-sm-6"> 
                <?php
                $page_About = get_page_by_title( 'About' );
                $ID_About = $page_About->ID;   
                $img1_meta = get_post_meta( $ID_About, '_belmont_i1_id', 1 );	
                $image = get_post($img1_meta);
                $caption1 = $image->post_excerpt;
                $img1 = wp_get_attachment_image( get_post_meta( $ID_About, '_belmont_i1_id', 1 ), 'large', array( "class" => "img-responsive" ));
            
                echo  $img1 ;
                echo '<figcaption class="wp-caption-text wp-caption">' . $caption1 . '</figcaption>';
    
                ?>

            </div>  <!-- end col-sm-6 -->  
            <div class="clearfix"></div>
            <div class="col-sm-6 col-sm-push-6"> 
            <div class="content-paragraph"> 

             <?php
                $page_About = get_page_by_title( 'About' );
                $ID_About = $page_About->ID;   
                $aboutP2_text = get_post_meta( $ID_About, '_belmont_p2', true); 
                echo '<p>' . esc_html( $aboutP2_text ) . '</p>';

                ?>

            <p></p>
            </div>  <!-- end content-parapgraph -->            
            </div>  <!-- end col-sm-6 -->  

            <div class="col-sm-6 col-sm-pull-6 about2p">

            <?php
                $page_About = get_page_by_title( 'About' );
                $ID_About = $page_About->ID;  
                $img2_meta = get_post_meta( $ID_About, '_belmont_i2_id', 1 );	
                $image = get_post($img2_meta);
                $caption2 = $image->post_excerpt;
                $img2 = wp_get_attachment_image( get_post_meta( $ID_About, '_belmont_i2_id', 1 ), 'large', array( "class" => "img-responsive" ));
                
                echo  $img2 ;
                echo '<figcaption class="wp-caption-text wp-caption">' . $caption2 . '</figcaption>';
                ?>
            </div>  <!-- end col-sm-6 -->    
            <div class="clearfix"></div>
 
        </div>  <!-- end row -->              
    </div>  <!-- end entry-content -->
</div>  <!-- end container -->
<?php 