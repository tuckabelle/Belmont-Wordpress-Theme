<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Belmont
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
	    <div id="footer-content" class="site-content">
	        <div class="col-sm-2"></div>
	        <div class="col-sm-10 footer-inner">
	           <div class="col-sm-6">
<div class="site-title">BELMONT FOOD SHOP</div>
	           </div><!-- end col-sm-6-->

	           <div class="col-sm-6">
		<div class="site-info">
Owned by Mike Yavorsky<br>
Located in Richmond, Virginia<br>		

			<?php printf( esc_html__( '%1$s Wordpress theme developed by %2$s', 'belmont' ), 'Belmont', '<a href="http://etuckerharris.com" rel="designer">Tucker Harris</a>' ); ?>

		</div><!-- .site-info -->

	           </div><!-- end col-sm-6-->

	        </div><!-- col-sm-10 -->
	        
	    </div><!-- site-content -->

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
