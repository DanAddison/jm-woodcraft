<?php

add_action( 'admin_menu', function(){

	/** Remove items from the main menu for non-Administrators */
	if( !user_has_role( 'administrator' ) ) {
		remove_menu_page( 'tools.php' );
	}

});