<?php
/**
 * @brief		Support Log Model
 * @author		<a href='http://www.invisionpower.com'>Invision Power Services, Inc.</a>
 * @copyright	(c) 2001 - 2016 Invision Power Services, Inc.
 * @license		http://www.invisionpower.com/legal/standards/
 * @package		IPS Community Suite
 * @subpackage	Nexus
 * @since		14 Nov 2014
 * @version		SVN_VERSION_NUMBER
 */

namespace IPS\nexus\Support;

/* To prevent PHP errors (extending class does not exist) revealing path */
if ( !defined( '\IPS\SUITE_UNIQUE_KEY' ) )
{
	header( ( isset( $_SERVER['SERVER_PROTOCOL'] ) ? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.0' ) . ' 403 Forbidden' );
	exit;
}

/**
 * Support Log Model
 */
class _Log extends \IPS\Patterns\ActiveRecord
{
	/**
	 * @brief	[ActiveRecord] Multiton Store
	 */
	protected static $multitons;
	
	/**
	 * @brief	[ActiveRecord] Database Table
	 */
	public static $databaseTable = 'nexus_support_request_log';
	
	/**
	 * @brief	[ActiveRecord] Database Prefix
	 */
	public static $databasePrefix = 'rlog_';
	
	/**
	 * Set request
	 *
	 * @param	\IPS\nexus\Support\Request	$request	The request
	 * @return	void
	 */
	public function set_request( \IPS\nexus\Support\Request $request )
	{
		$this->_data['request'] = $request->id;
	}
	
	/**
	 * Get request
	 *
	 * @return	\IPS\nexus\Support\Request
	 */
	public function get_request()
	{
		return \IPS\nexus\Support\Request::load( $this->_data['request'] );
	}
	
	/**
	 * Set member performing the action
	 *
	 * @param	\IPS\nexus\Support\Request	$member	The member performing the action
	 * @return	void
	 */
	public function set_member( \IPS\Member $member )
	{
		$this->_data['member'] = $member->member_id;
	}
	
	/**
	 * Get member performing the action
	 *
	 * @return	\IPS\nexus\Customer
	 */
	public function get_member()
	{
		return \IPS\nexus\Customer::load( $this->_data['member'] );
	}
	
	/**
	 * Set old value
	 *
	 * @param	mixed	$old	The old value
	 * @return	void
	 */
	public function set_old( $old )
	{
		$this->_data['old'] = $old ? $old->id : NULL;
	}
	
	/**
	 * Get old value
	 *
	 * @return	mixed
	 */
	public function get_old()
	{
		return $this->getValue( $this->_data['old'] );
	}
	
	/**
	 * Set new value
	 *
	 * @param	mixed	$new	The new value
	 * @return	void
	 */
	public function set_new( $new )
	{
		if ( $new )
		{
			if ( $new instanceof \IPS\Member )
			{
				$this->_data['new'] = $new->member_id;
			}
			else
			{
				$this->_data['new'] = $new->id;
			}
		}
		else
		{
			$this->_data['new'] = NULL;
		}
	}
	
	/**
	 * Get new value
	 *
	 * @return	mixed
	 */
	public function get_new()
	{
		return $this->getValue( $this->_data['new'] );
	}
	
	/**
	 * Set date
	 *
	 * @param	\IPS\DateTime	$date	The date
	 * @return	void
	 */
	public function set_date( \IPS\DateTime $date )
	{
		$this->_data['date'] = $date->getTimestamp();
	}
	
	/**
	 * Get old value
	 *
	 * @return	\IPS\DateTime
	 */
	public function get_date()
	{
		return \IPS\DateTime::ts( $this->_data['date'] );
	}
	
	/**
	 * Get object from ID
	 *
	 * @param	int	$id
	 * @return	mixed
	 */
	protected function getValue( $id )
	{
		if ( !$id )
		{
			return NULL;
		}

		try
		{
			switch ( $this->action )
			{
				case 'status':
					return \IPS\nexus\Support\Status::load( $id );
				case 'department':
					return \IPS\nexus\Support\Department::load( $id );
				case 'purchase':
					return \IPS\nexus\Purchase::load( $id );
				case 'severity':
					return \IPS\nexus\Support\Severity::load( $id );
				case 'staff':
					return \IPS\Member::load( $id );
			}
		}
		catch ( \OutOfRangeException $e )
		{
			return NULL;
		}
		
		throw new \InvalidArgumentException( $this->action );
	}
}