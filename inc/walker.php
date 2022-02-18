<?php

class walker_homepage extends Walker_Nav_menu {
	function start_lvl(&$output, $depth) {
		$indent = str_repeat("\t", $depth);
		
	}
	
	function start_el(&$output, $depth) {
	}

	function end_el() {
	}

	function end_lvl() {
	}
}

?>
