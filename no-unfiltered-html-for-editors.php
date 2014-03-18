<?php
/**
  *
  * Plugin Name: No Unfiltered HTML for Editors
  * Description: Disables unfiltered HTML for the Editor role.
  *
  */
function remove_editor_unfiltered_html() {
	$role = get_role( 'editor' );
	$role->remove_cap( 'unfiltered_html' );
}
register_activation_hook( __FILE__, 'remove_editor_unfiltered_html' );

function add_editor_unfiltered_html() {
	$role = get_role( 'editor' );
	$role->add_cap( 'unfiltered_html' );
}
register_deactivation_hook( __FILE__, 'add_editor_unfiltered_html' );
