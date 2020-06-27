<?php
/**
 * @brief		Front Navigation Extension: Dropdown Menu
 * @author		<a href='http://www.invisionpower.com'>Invision Power Services, Inc.</a>
 * @copyright	(c) 2001 - 2016 Invision Power Services, Inc.
 * @license		http://www.invisionpower.com/legal/standards/
 * @package		IPS Community Suite
 * @subpackage	Core
 * @since		30 Jun 2015
 * @version		SVN_VERSION_NUMBER
 */

namespace IPS\core\extensions\core\FrontNavigation;

/* To prevent PHP errors (extending class does not exist) revealing path */
if ( !defined( '\IPS\SUITE_UNIQUE_KEY' ) )
{
	header( ( isset( $_SERVER['SERVER_PROTOCOL'] ) ? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.0' ) . ' 403 Forbidden' );
	exit;
}

/**
 * Front Navigation Extension: Dropdown Menu
 */
class _Menu extends \IPS\core\FrontNavigation\FrontNavigationAbstract
{
	/**
	 * Get Type Title which will display in the AdminCP Menu Manager
	 *
	 * @return	string
	 */
	public static function typeTitle()
	{
		return \IPS\Member::loggedIn()->language()->addToStack('menu_custom_menu');
	}
	
	/**
	 * Allow multiple instances?
	 *
	 * @return	string
	 */
	public static function allowMultiple()
	{
		return TRUE;
	}
	
	/**
	 * Get configuration fields
	 *
	 * @param	array	$configuration	The existing configuration, if editing an existing item
	 * @param	int		$id				The ID number of the existing item, if editing
	 * @return	array
	 */
	public static function configuration( $existingConfiguration, $id = NULL )
	{
		return array(
			new \IPS\Helpers\Form\Translatable( 'menu_custom_menu_title', NULL, TRUE, array( 'app' => 'core', 'key' => $id ? "menu_item_{$id}" : NULL ) ),
		);
	}
	
	/**
	 * Parse configuration fields
	 *
	 * @param	array	$configuration	The values received from the form
	 * @return	array
	 */
	public static function parseConfiguration( $configuration, $id )
	{		
		\IPS\Lang::saveCustom( 'core', "menu_item_{$id}", $configuration['menu_custom_menu_title'] );
		unset( $configuration['menu_custom_menu_title'] );
		
		return $configuration;
	}
	
	/**
	 * Permissions can be inherited?
	 *
	 * @return	bool
	 */
	public static function permissionsCanInherit()
	{
		return FALSE;
	}
		
	/**
	 * Get Title
	 *
	 * @return	string
	 */
	public function title()
	{
		return \IPS\Member::loggedIn()->language()->addToStack( "menu_item_{$this->id}" );
	}
	
	/**
	 * Get Link
	 *
	 * @return	\IPS\Http\Url
	 */
	public function link()
	{
		return NULL;
	}
	
	/**
	 * Is Active?
	 *
	 * @return	bool
	 */
	public function active()
	{
		foreach ( $this->children() as $child )
		{
			if ( $child->active() )
			{
				return TRUE;
			}
		}
	}
	
	/**
	 * Children
	 *
	 * @param	bool	$noStore	If true, will skip datastore and get from DB (used for ACP preview)
	 * @return	array
	 */
	public function children( $noStore=FALSE )
	{		
		$items = array();
		
		$frontNavigation = \IPS\core\FrontNavigation::frontNavigation( $noStore );
		if ( isset( $frontNavigation[ $this->id ] ) )
		{
			foreach ( $frontNavigation[ $this->id ] as $item )
			{
				if ( ! empty( $item['is_menu_child'] ) and \IPS\Application::appIsEnabled( $item['app'] ) )
				{
					$class = 'IPS\\' . $item['app'] . '\extensions\core\FrontNavigation\\' . $item['extension'];
					$items[ $item['id'] ] = new $class( json_decode( $item['config'], TRUE ), $item['id'], $item['permissions'] );
				}
			}
		}
				
		return $items;
	}
}