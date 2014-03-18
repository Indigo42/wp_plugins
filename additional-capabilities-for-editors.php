<?php
/**
  *
  * Plugin Name: Additional Capabilities for Editors
  * Description: Allows the Editor role to access the following administration screens: <strong>Appearance&nbsp;&gt;&nbsp;Background</strong>, <strong>Appearance&nbsp;&gt;&nbsp;Customize</strong> (if applicable), <strong>Appearance&nbsp;&gt;&nbsp;Header</strong>, <strong>Appearance&nbsp;&gt;&nbsp;Menus</strong>, and <strong>Appearance&nbsp;&gt;&nbsp;Widgets</strong>.
  *
  */
function add_editor_edit_theme_options() {
	$role = get_role( 'editor' );
	$role->add_cap( 'edit_theme_options' );
}
register_activation_hook( __FILE__, 'add_editor_edit_theme_options' );

function remove_editor_edit_theme_options() {
	$role = get_role( 'editor' );
	$role->remove_cap( 'edit_theme_options' );
}
register_deactivation_hook( __FILE__, 'remove_editor_edit_theme_options' );
