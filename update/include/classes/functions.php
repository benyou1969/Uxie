<?php
namespace classes;
class functions
{
	public static function get_ext( $name )
	{
		$name_array = explode( ".", $name );
		$extention  = strtolower( end( $name_array ) );
		return $extention;
	}
	public static function redirect( $link )
	{
		ob_start();
		header( 'LOCATION: ' . $link );
	}
}
