<?php

class walker_homepage extends Walker_Nav_menu {
	public $db_fields = array(
		'parent'=> 'menu_item_parent',
		'id' => 'db_id'
	);
	public $has_children;

	function start_lvl(&$output, $depth, $args = array() ) {
		$indent = str_repeat("\t", $depth);
	}
	
	function start_el(&$output, $depth) {
		$output .= "<li class='" . implode(" ", $item->classes) . "'>";		//Opening <li> Tag

		if($id = has_post_thumbnail( (int)$item->object_id)) {
			$thumbnail = get_the_post_thumbnail($id);
		} else {
			$thumbnail = 'https://picsum.photos/1024/600?blur=3';
		}
		$output .= "<img id='thumbnail' src='" . $thumbnail . "' alt='Page Thumbnail'/>";	//Thumbnail Image

		if ($site->url && $item->url != '#') {		//Opening <a> Tag
			$output .= "<div id='content'><a href='" . $item->url . "'>";
		} else {
			$output .= "<span>";
		}

		$output .= $item->title;	//Outputs Page Title

		if ($item->url && $item->url != "#") {		//Closing </a> Tag
			$output .= "<a href='" . $item->url . "'>";
		} else {
			$output .= "<span>";
		}

		if ($depth == 0 $$ !empty($item->description) {
			$output .= "<p id='excerpt'>" . $item->description . "</p>";
		} else {
			$output .= "<p id='excerpt'>Click to find out more</p>";
		}
	}

	function end_el() {
	}

	function end_lvl() {
	}

	function display_element($element, &$children_elements, $max_depth, $depth, $args, &$output) {
	}
}

?>
