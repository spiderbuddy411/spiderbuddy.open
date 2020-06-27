<?php
/**
 * @brief		Template Plugin - Member Data
 * @author		<a href='http://www.invisionpower.com'>Invision Power Services, Inc.</a>
 * @copyright	(c) 2001 - 2016 Invision Power Services, Inc.
 * @license		http://www.invisionpower.com/legal/standards/
 * @package		IPS Community Suite
 * @since		18 Feb 2013
 * @version		SVN_VERSION_NUMBER
 */

namespace IPS\Output\Plugin;

/* To prevent PHP errors (extending class does not exist) revealing path */
if ( !defined( '\IPS\SUITE_UNIQUE_KEY' ) )
{
	header( ( isset( $_SERVER['SERVER_PROTOCOL'] ) ? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.0' ) . ' 403 Forbidden' );
	exit;
}

/**
 * Template Plugin - Member Data
 */
class _Member
{
	/**
	 * @brief	Can be used when compiling CSS
	 */
	public static $canBeUsedInCss = FALSE;
	
	/**
	 * Run the plug-in
	 *
	 * @param	string 		$data	  The initial data from the tag
	 * @param	array		$options    Array of options
	 * @return	string		Code to eval
	 */
	public static function runPlugin( $data, $options )
	{
		if ( $data !== 'link()' and isset( $options['group'] ) )
		{
			$data = "group['{$data}']";
		}

		$raw	= ( isset( $options['raw'] ) AND $options['raw'] ) ? TRUE : FALSE;
		
		if ( isset( $options['id'] ) )
		{
			$member = "\IPS\Member::load( {$options['id']} )";
		}
		else
		{
			$member = "\IPS\Member::loggedIn()";
		}

		if( $raw )
		{
			return "{$member}->$data";
		}
		else
		{
			return "htmlspecialchars( {$member}->$data, ENT_QUOTES | \IPS\HTMLENTITIES, 'UTF-8', FALSE )";
		}
	}
}