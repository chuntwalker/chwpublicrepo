<?php
/*
OUTPUT CLASS

This class formats output to be shown to the browser using the decorator pattern.

*/

class Output {
	
	function __construct() {}
	
	public function showLine($label, $text) {
		return '<strong>'.$label.':</strong> '.$text.'<br/>';
	}
	
	public function outputTitle($heading, $text) {
		return '<'.$heading.'>'.$text.'</'.$heading.'>';
	}
	
	public function makeButton($text) {
		return '<input type="submit" value="'.$text.'" />';
	}
	
	public function makeLink($href, $linktext) {
		return '<p><a href="'.$href.'">'.$linktext.'</a></p>';
	}
}
?>