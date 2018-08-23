<?php

if(! function_exists('page_title')){

	function page_title($title){
		$base_title='Laracarte - Lst of artisans';

		if($title===''){
			return $base_title;
		}else {
			return $title.' | '.$base_title;
		}
	}
}
