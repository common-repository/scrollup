<?php
/*
Plugin Name: scrollup
Plugin URI: http://wordpress.org/plugins/scrollup/
Description: A simple plugin that replaces a [retour] shortcode by a button to scroll back to top.
Version: 1.1
Author: midori
Author URI: http://www.loutan.net
License: GPL2
*/

/*  Copyright 2012  Scrollup - midori  (email : midori@loutan.net)
 
    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.
 
    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.
 
    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

	//[retour]
	function remonter($atts) {
		extract(shortcode_atts(array(
		        'ancrage' => "top",
		        'laimg'   => 1,
				'lalt' 	  => '&#9660; Sommet',
				'lavant'  => '<p class="thescrollup">',
				'lapres'  => "</p>"
				 // default value if none supplied
		    ), $atts));	
		
		$laligne = $lavant . '<a href="#' . $ancrage . '">';
		if ($laimg) { $milieu = '<img src="' . plugins_url( 'arrow.png', __FILE__ ) . '" alt="' . $lalt . '" title="' . $lalt . '" />'; } 
		else { $milieu = $lalt; }   // image or not image...
		
		$laligne .= $milieu . '</a>' . $lapres;
		
		return $laligne;
	}
	
	add_shortcode( 'retour', 'remonter' );
?>