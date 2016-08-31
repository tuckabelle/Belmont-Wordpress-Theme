<?php
/**
 * Include and setup custom metaboxes and fields. (make sure you copy this file to outside the CMB2 directory)
 *
 * Be sure to replace all instances of 'yourprefix_' with your project's prefix.
 * http://nacin.com/2010/05/11/in-wordpress-prefix-everything/
 *
 * @category YourThemeOrPlugin
 * @package  Demo_CMB2
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/WebDevStudios/CMB2
 */

/**
 * Get the bootstrap! If using the plugin from wordpress.org, REMOVE THIS!
 */

/**
 * Conditionally displays a metabox when used as a callback in the 'show_on_cb' cmb2_box parameter
 *
 * @param  CMB2 object $cmb CMB2 object
 *
 * @return bool             True if metabox should show
 */



$page_About = get_page_by_title( 'About' );
$ID_About = $page_About->ID;   

$page_Contact = get_page_by_title( 'Contact' );
$ID_Contact = $page_Contact->ID; 

$page_Events = get_page_by_title( 'Events' );
$ID_Events = $page_Events->ID; 
	

function belmont_show_if_front_page( $cmb ) {
	// Don't show this metabox if it's not the front page template
	if ( $cmb->object_id !== get_option( 'page_on_front' ) ) {
		return false;
	}
	return true;
}

/**
 * Conditionally displays a field when used as a callback in the 'show_on_cb' field parameter
 *
 * @param  CMB2_Field object $field Field object
 *
 * @return bool                     True if metabox should show
 */
function belmont_hide_if_no_cats( $field ) {
	// Don't show this field if not in the cats category
	if ( ! has_tag( 'cats', $field->object_id ) ) {
		return false;
	}
	return true;
}

/**
 * Manually render a field.
 *
 * @param  array      $field_args Array of field arguments.
 * @param  CMB2_Field $field      The field object
 */
function belmont_render_row_cb( $field_args, $field ) {
	$classes     = $field->row_classes();
	$id          = $field->args( 'id' );
	$label       = $field->args( 'name' );
	$name        = $field->args( '_name' );
	$value       = $field->escaped_value();
	$description = $field->args( 'description' );
	?>
	<div class="custom-field-row <?php echo $classes; ?>">
		<p><label for="<?php echo $id; ?>"><?php echo $label; ?></label></p>
		<p><input id="<?php echo $id; ?>" type="text" name="<?php echo $name; ?>" value="<?php echo $value; ?>"/></p>
		<p class="description"><?php echo $description; ?></p>
	</div>
	<?php
}

/**
 * Manually render a field column display.
 *
 * @param  array      $field_args Array of field arguments.
 * @param  CMB2_Field $field      The field object
 */
function belmont_display_text_small_column( $field_args, $field ) {
	?>
	<div class="custom-column-display <?php echo $field->row_classes(); ?>">
		<p><?php echo $field->escaped_value(); ?></p>
		<p class="description"><?php echo $field->args( 'description' ); ?></p>
	</div>
	<?php
}


add_action( 'cmb2_admin_init', 'belmont_register_phil_metabox' );
/**
 * Hook in and add a demo metabox. Can only happen on the 'cmb2_admin_init' or 'cmb2_init' hook.
 */
function belmont_register_phil_metabox() {
	$prefix = '_belmont_';
$page_About = get_page_by_title( 'About' );
$ID_About = $page_About->ID;   


	/**
	 * Sample metabox to demonstrate each field type included
	 */
	$cmb_phil = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => __( 'Philosophy', 'cmb2' ),
		'object_types'  => array( 'page', ), // Post type
		'show_on' => array( 'id' => array( $ID_About, ) ),
		 'show_names' => false, // Show field names on the left

	) );

	$cmb_phil->add_field( array(
		'name'       => __( 'Philosophy', 'cmb2' ),
		//'desc'       => __( 'field description (optional)', 'cmb2' ),
		'id'         => $prefix . 'philosophy',
		'type'       => 'textarea',

	) );

}


add_action( 'cmb2_admin_init', 'belmont_register_aboutP1_metabox' );
/**
 * Hook in and add a demo metabox. Can only happen on the 'cmb2_admin_init' or 'cmb2_init' hook.
 */
function belmont_register_aboutP1_metabox() {
	$prefix = '_belmont_';
$page_About = get_page_by_title( 'About' );
$ID_About = $page_About->ID;   


	/**
	 * Sample metabox to demonstrate each field type included
	 */
	$cmb_aboutP1 = new_cmb2_box( array(
		'id'            => $prefix . 'aboutP1_metabox',
		'title'         => __( 'About Part 1', 'cmb2' ),
		'object_types'  => array( 'page', ), // Post type
		'show_on' => array( 'id' => array( $ID_About, ) ),
		 'show_names' => true, // Show field names on the left

	) );

	$cmb_aboutP1->add_field( array(
		'name'       => __( 'Paragraph 1', 'cmb2' ),
		//'desc'       => __( 'field description (optional)', 'cmb2' ),
		'id'         => $prefix . 'p1',
		'type'       => 'textarea',

	) );

	$cmb_aboutP1->add_field( array(
		'name'       => __( 'Image 1', 'cmb2' ),
		//'desc'       => __( 'field description (optional)', 'cmb2' ),
		'id'         => $prefix . 'i1',
		'type'       => 'file',
'options' => array(
        'url' => false, // Hide the text input for the url
    ),

	) );

}

add_action( 'cmb2_admin_init', 'belmont_register_aboutP2_metabox' );
/**
 * Hook in and add a demo metabox. Can only happen on the 'cmb2_admin_init' or 'cmb2_init' hook.
 */
function belmont_register_aboutP2_metabox() {
	$prefix = '_belmont_';
$page_About = get_page_by_title( 'About' );
$ID_About = $page_About->ID;   


	/**
	 * Sample metabox to demonstrate each field type included
	 */
	$cmb_aboutP2 = new_cmb2_box( array(
		'id'            => $prefix . 'aboutP2_metabox',
		'title'         => __( 'About Part 2', 'cmb2' ),
		'object_types'  => array( 'page', ), // Post type
		'show_on' => array( 'id' => array( $ID_About, ) ),
		 'show_names' => true, // Show field names on the left

	) );

	$cmb_aboutP2->add_field( array(
		'name'       => __( 'Paragraph 2', 'cmb2' ),
		//'desc'       => __( 'field description (optional)', 'cmb2' ),
		'id'         => $prefix . 'p2',
		'type'       => 'textarea',

	) );

	$cmb_aboutP2->add_field( array(
		'name'       => __( 'Image 2', 'cmb2' ),
		//'desc'       => __( 'field description (optional)', 'cmb2' ),
		'id'         => $prefix . 'i2',
		'type'       => 'file',

	) );

}


add_action( 'cmb2_admin_init', 'belmont_register_hours_metabox' );

function belmont_register_hours_metabox() {
$prefix = '_belmontHours_';
$page_Contact = get_page_by_title( 'Contact' );
$ID_Contact = $page_Contact->ID;   


	$cmb_hours = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => __( 'Hours of Operation', 'cmb2' ),
		'object_types'  => array( 'page', ), // Post type
		'show_on' => array( 'id' => array( $ID_Contact, ) ),
		//'show_names' => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // true to keep the metabox closed by default
		// 'classes'    => 'extra-class', // Extra cmb2-wrap classes
		// 'classes_cb' => 'belmont_add_some_classes', // Add classes through a callback.
	) );

	$cmb_hours->add_field( array(
		'name'       => __( 'Monday', 'cmb2' ),
		'id'         => $prefix . 'monday',
		'type'       => 'text',

	) );
	$cmb_hours->add_field( array(
		'name'       => __( 'Tuesday', 'cmb2' ),
		'id'         => $prefix . 'tuesday',
		'type'       => 'text',

	) );
	$cmb_hours->add_field( array(
		'name'       => __( 'Wednesday', 'cmb2' ),
		'id'         => $prefix . 'wednesday',
		'type'       => 'text',

	) );
	$cmb_hours->add_field( array(
		'name'       => __( 'Thursday', 'cmb2' ),
		'id'         => $prefix . 'thursday',
		'type'       => 'text',

	) );
	$cmb_hours->add_field( array(
		'name'       => __( 'Friday', 'cmb2' ),
		'id'         => $prefix . 'friday',
		'type'       => 'text',

	) );
	$cmb_hours->add_field( array(
		'name'       => __( 'Saturday', 'cmb2' ),
		'id'         => $prefix . 'saturday',
		'type'       => 'text',

	) );
	$cmb_hours->add_field( array(
		'name'       => __( 'Sunday', 'cmb2' ),
		'id'         => $prefix . 'sunday',
		'type'       => 'text',

	) );
}


add_action( 'cmb2_admin_init', 'belmont_register_contact_metabox' );

function belmont_register_contact_metabox() {
$prefix = '_belmontContact_';
$page_Contact = get_page_by_title( 'Contact' );
$ID_Contact = $page_Contact->ID;   


	$cmb_contact = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => __( 'Contact Details', 'cmb2' ),
		'object_types'  => array( 'page', ), // Post type
		'show_on' => array( 'id' => array( $ID_Contact, ) ),
		//'show_names' => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // true to keep the metabox closed by default
		// 'classes'    => 'extra-class', // Extra cmb2-wrap classes
		// 'classes_cb' => 'belmont_add_some_classes', // Add classes through a callback.
	) );

	$cmb_contact->add_field( array(
		'name'       => __( 'Address', 'cmb2' ),
		'id'         => $prefix . 'address',
		'type'       => 'text',

	) );
	$cmb_contact->add_field( array(
		'name'       => __( 'Phone Number', 'cmb2' ),
		'id'         => $prefix . 'phone',
		'type'       => 'text',

	) );
	$cmb_contact->add_field( array(
		'name'       => __( 'Email', 'cmb2' ),
		'id'         => $prefix . 'email',
		'type'       => 'text',

	) );
	
}



add_action( 'cmb2_admin_init', 'belmont_register_reserveInfo_metabox' );
/**
 * Hook in and add a demo metabox. Can only happen on the 'cmb2_admin_init' or 'cmb2_init' hook.
 */
function belmont_register_reserveInfo_metabox() {
$prefix = '_belmontReserveInfo_';
$page_Events = get_page_by_title( 'Events' );
$ID_Events = $page_Events->ID;   


	/**
	 * Sample metabox to demonstrate each field type included
	 */
	$cmb_events = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => __( 'Hours of Operation', 'cmb2' ),
		'object_types'  => array( 'page', ), // Post type
		'show_on' => array( 'id' => array( $ID_Events, ) ),
		//'show_names' => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // true to keep the metabox closed by default
		// 'classes'    => 'extra-class', // Extra cmb2-wrap classes
		// 'classes_cb' => 'belmont_add_some_classes', // Add classes through a callback.
	) );

	$cmb_events->add_field( array(
		'name'       => __( 'Size', 'cmb2' ),
		'id'         => $prefix . 'size',
		'type'       => 'text',

	) );
	$cmb_events->add_field( array(
		'name'       => __( 'Max Occupancy', 'cmb2' ),
		'id'         => $prefix . 'max',
		'type'       => 'text',

	) );
	$cmb_events->add_field( array(
		'name'       => __( 'Details', 'cmb2' ),
		'id'         => $prefix . 'details',
		'type'       => 'text',

	) );
}








add_action( 'cmb2_admin_init', 'belmont_register_repeatable_group_field_metabox' );
/**
 * Hook in and add a metabox to demonstrate repeatable grouped fields
 */
function belmont_register_repeatable_group_field_metabox() {
	$prefix = '_belmontGroup_';
$page_Events = get_page_by_title( 'Events' );
$ID_Events = $page_Events->ID;   
	/**
	 * Repeatable Field Groups
	 */
	$cmb_group = new_cmb2_box( array(
		'id'           => $prefix . 'metabox',
		'title'        => __( 'Event Details', 'cmb2' ),
		'object_types' => array( 'page', ),
		'show_on' => array( 'id' => array( $ID_Events, ) ),

	) );

	// $group_field_id is the field id string, so in this case: $prefix . 'demo'
	$group_field_id = $cmb_group->add_field( array(
		'id'          => $prefix . 'event',
		'type'        => 'group',
		//'description' => __( 'Generates reusable form entries', 'cmb2' ),
		'options'     => array(
			'group_title'   => __( 'Event {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'    => __( 'Add Another Event', 'cmb2' ),
			'remove_button' => __( 'Remove Event', 'cmb2' ),
			'sortable'      => false, // beta
			// 'closed'     => true, // true to have the groups closed by default
		),
	) );

	/**
	 * Group fields works the same, except ids only need
	 * to be unique to the group. Prefix is not needed.
	 *
	 * The parent field's id needs to be passed as the first argument.
	 */

	$cmb_group->add_group_field( $group_field_id, array(
		'name'       => __( 'Title', 'cmb2' ),
		'id'         => 'title',
		'type'       => 'text',
		
	) );

	$cmb_group->add_group_field( $group_field_id, array(
		'name'       => __( 'Date', 'cmb2' ),
		'id'         => 'date',
		'type'       => 'text',
		
	) );

	$cmb_group->add_group_field( $group_field_id, array(
		'name'       => __( 'Menu Items', 'cmb2' ),
		'id'         => 'menuItem',
		'type'       => 'text',
		'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );


}



add_action( 'cmb2_admin_init', 'belmont_register_menuUpdate_metabox' );
/**
 * Hook in and add a demo metabox. Can only happen on the 'cmb2_admin_init' or 'cmb2_init' hook.
 */
function belmont_register_menuUpdate_metabox() {
	$prefix = '_belmontMenu_';
$page_Menu = get_page_by_title( 'menu' );
$ID_Menu = $page_Menu->ID;    


	/**
	 * Sample metabox to demonstrate each field type included
	 */
	$cmb_menuUpdate = new_cmb2_box( array(
		'id'            => $prefix . 'menuUpdate_metabox',
		'title'         => __( 'Menu Update', 'cmb2' ),
		'object_types'  => array( 'page', ), // Post type
		'show_on' => array( 'id' => array( $ID_Menu, ) ),
		 'show_names' => false, // Show field names on the left

	) );

	$cmb_menuUpdate->add_field( array(
		'name'       => __( 'When was the menu last updated?', 'cmb2' ),
		'before_row'       => '<p>When was the menu last updated?<br><i>Note: This date will appear on the website!</i></p>',
		'id'         => $prefix . 'menuUpdate',
		'type'       => 'text_medium',

	) );

}




/**
 * APPETIZERS
 */
 
add_action( 'cmb2_admin_init', 'belmont_register_apps_metabox' );
/**
 * Hook in and add a metabox to demonstrate repeatable grouped fields
 */
function belmont_register_apps_metabox() {
	$prefix = '_belmontMenu_';
$page_Menu = get_page_by_title( 'menu' );
$ID_Menu = $page_Menu->ID;   
	/**
	 * Repeatable Field Groups
	 */
	$cmb_group = new_cmb2_box( array(
		'id'           => $prefix . 'apps_metabox',
		'title'        => __( 'Appetizers', 'cmb2' ),
		'object_types' => array( 'page', ),
		'show_on' => array( 'id' => array( $ID_Menu, ) ),

	) );

	// $group_field_id is the field id string, so in this case: $prefix . 'demo'
	$group_field_id = $cmb_group->add_field( array(
		'id'          => $prefix . 'apps',
		'type'        => 'group',
		//'description' => __( 'Generates reusable form entries', 'cmb2' ),
		'options'     => array(
			'group_title'   => __( 'Appetizer {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'    => __( 'Add Another Appetizer', 'cmb2' ),
			'remove_button' => __( 'Remove Appetizer', 'cmb2' ),
			'sortable'      => false, // beta
			// 'closed'     => true, // true to have the groups closed by default
		),
	) );



	$cmb_group->add_group_field( $group_field_id, array(
		'name'       => __( 'Name', 'cmb2' ),
		'id'         => 'name',
		'type'       => 'text_medium',
		
	) );

	$cmb_group->add_group_field( $group_field_id, array(
		'name'       => __( 'Description', 'cmb2' ),
		'id'         => 'description',
		'type'       => 'textarea_small',
		
	) );

}


/**
 * Entres
 */
 
add_action( 'cmb2_admin_init', 'belmont_register_entres_metabox' );
/**
 * Hook in and add a metabox to demonstrate repeatable grouped fields
 */
function belmont_register_entres_metabox() {
	$prefix = '_belmontMenu_';
$page_Menu = get_page_by_title( 'menu' );
$ID_Menu = $page_Menu->ID;   
	/**
	 * Repeatable Field Groups
	 */
	$cmb_group = new_cmb2_box( array(
		'id'           => $prefix . 'entres_metabox',
		'title'        => __( 'Entres', 'cmb2' ),
		'object_types' => array( 'page', ),
		'show_on' => array( 'id' => array( $ID_Menu, ) ),

	) );

	// $group_field_id is the field id string, so in this case: $prefix . 'demo'
	$group_field_id = $cmb_group->add_field( array(
		'id'          => $prefix . 'entres',
		'type'        => 'group',
		//'description' => __( 'Generates reusable form entries', 'cmb2' ),
		'options'     => array(
			'group_title'   => __( 'Entre {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'    => __( 'Add Another Entre', 'cmb2' ),
			'remove_button' => __( 'Remove Entre', 'cmb2' ),
			'sortable'      => false, // beta
			// 'closed'     => true, // true to have the groups closed by default
		),
	) );



	$cmb_group->add_group_field( $group_field_id, array(
		'name'       => __( 'Name', 'cmb2' ),
		'id'         => 'name',
		'type'       => 'text_medium',
		
	) );

	$cmb_group->add_group_field( $group_field_id, array(
		'name'       => __( 'Description', 'cmb2' ),
		'id'         => 'description',
		'type'       => 'textarea_small',
		
	) );

}



/**
 * Desserts
 */
 
add_action( 'cmb2_admin_init', 'belmont_register_desserts_metabox' );
/**
 * Hook in and add a metabox to demonstrate repeatable grouped fields
 */
function belmont_register_desserts_metabox() {
	$prefix = '_belmontMenu_';
$page_Menu = get_page_by_title( 'menu' );
$ID_Menu = $page_Menu->ID;   
	/**
	 * Repeatable Field Groups
	 */
	$cmb_group = new_cmb2_box( array(
		'id'           => $prefix . 'desserts_metabox',
		'title'        => __( 'Desserts', 'cmb2' ),
		'object_types' => array( 'page', ),
		'show_on' => array( 'id' => array( $ID_Menu, ) ),

	) );

	// $group_field_id is the field id string, so in this case: $prefix . 'demo'
	$group_field_id = $cmb_group->add_field( array(
		'id'          => $prefix . 'desserts',
		'type'        => 'group',
		//'description' => __( 'Generates reusable form entries', 'cmb2' ),
		'options'     => array(
			'group_title'   => __( 'Dessert {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'    => __( 'Add Another Dessert', 'cmb2' ),
			'remove_button' => __( 'Remove Dessert', 'cmb2' ),
			'sortable'      => false, // beta
			// 'closed'     => true, // true to have the groups closed by default
		),
	) );



	$cmb_group->add_group_field( $group_field_id, array(
		'name'       => __( 'Name', 'cmb2' ),
		'id'         => 'name',
		'type'       => 'text_medium',
		
	) );

	$cmb_group->add_group_field( $group_field_id, array(
		'name'       => __( 'Description', 'cmb2' ),
		'id'         => 'description',
		'type'       => 'textarea_small',
		
	) );

}


/**
 * Cocktails
 */
 
add_action( 'cmb2_admin_init', 'belmont_register_cocktails_metabox' );
/**
 * Hook in and add a metabox to demonstrate repeatable grouped fields
 */
function belmont_register_cocktails_metabox() {
	$prefix = '_belmontMenu_';
$page_Menu = get_page_by_title( 'menu' );
$ID_Menu = $page_Menu->ID;   
	/**
	 * Repeatable Field Groups
	 */
	$cmb_group = new_cmb2_box( array(
		'id'           => $prefix . 'cocktails_metabox',
		'title'        => __( 'Cocktails', 'cmb2' ),
		'object_types' => array( 'page', ),
		'show_on' => array( 'id' => array( $ID_Menu, ) ),

	) );

	// $group_field_id is the field id string, so in this case: $prefix . 'demo'
	$group_field_id = $cmb_group->add_field( array(
		'id'          => $prefix . 'cocktails',
		'type'        => 'group',
		//'description' => __( 'Generates reusable form entries', 'cmb2' ),
		'options'     => array(
			'group_title'   => __( 'Cocktail {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'    => __( 'Add Another Cocktail', 'cmb2' ),
			'remove_button' => __( 'Cocktail Dessert', 'cmb2' ),
			'sortable'      => false, // beta
			// 'closed'     => true, // true to have the groups closed by default
		),
	) );



	$cmb_group->add_group_field( $group_field_id, array(
		'name'       => __( 'Name', 'cmb2' ),
		'id'         => 'name',
		'type'       => 'text_medium',
		
	) );

	$cmb_group->add_group_field( $group_field_id, array(
		'name'       => __( 'Description', 'cmb2' ),
		'id'         => 'description',
		'type'       => 'textarea_small',
		
	) );

}


/**
 * Wine
 */
 
add_action( 'cmb2_admin_init', 'belmont_register_wine_metabox' );
/**
 * Hook in and add a metabox to demonstrate repeatable grouped fields
 */
function belmont_register_wine_metabox() {
	$prefix = '_belmontMenu_';
$page_Menu = get_page_by_title( 'menu' );
$ID_Menu = $page_Menu->ID;   
	/**
	 * Repeatable Field Groups
	 */
	$cmb_group = new_cmb2_box( array(
		'id'           => $prefix . 'wine_metabox',
		'title'        => __( 'Wine', 'cmb2' ),
		'object_types' => array( 'page', ),
		'show_on' => array( 'id' => array( $ID_Menu, ) ),

	) );

	// $group_field_id is the field id string, so in this case: $prefix . 'demo'
	$group_field_id = $cmb_group->add_field( array(
		'id'          => $prefix . 'wine',
		'type'        => 'group',
		//'description' => __( 'Generates reusable form entries', 'cmb2' ),
		'options'     => array(
			'group_title'   => __( 'Wine {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'    => __( 'Add Another Wine', 'cmb2' ),
			'remove_button' => __( 'Remove Wine', 'cmb2' ),
			'sortable'      => false, // beta
			// 'closed'     => true, // true to have the groups closed by default
		),
	) );



	$cmb_group->add_group_field( $group_field_id, array(
		'name'       => __( 'Name', 'cmb2' ),
		'id'         => 'name',
		'type'       => 'text_medium',
		
	) );

	$cmb_group->add_group_field( $group_field_id, array(
		'name'       => __( 'Description', 'cmb2' ),
		'id'         => 'description',
		'type'       => 'textarea_small',
		
	) );

}