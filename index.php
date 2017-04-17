<?php

require_once( 'functions.php' );

$top_text    = isset( $_GET['top_text'] )    ? $_GET['top_text']    : 'напиши';
$bottom_text = isset( $_GET['bottom_text'] ) ? $_GET['bottom_text'] : 'текст';
$url = isset( $_GET['url'] ) ? $_GET['url'] : 'https://pp.userapi.com/c637126/v637126216/399ad/mXrcczefp-k.jpg';
$filename    = memegen_sanitize( $bottom_text ? $bottom_text : $top_text );

// setup args for image
$args = array(
	'top_text'    => $top_text,
	'bottom_text' => $bottom_text,
	'filename'    => $filename,
	'font'        => dirname(__FILE__) .'/font.ttf',
	'memebase'    => $url,
	'textsize'    => 40,
	'textfit'     => true,
	'padding'     => 10,
);

// create and output image
memegen_build_image( $args );
