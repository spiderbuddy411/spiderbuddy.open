<?php
/**
 * @brief		cartCleanup Task
 * @author		<a href='http://www.invisionpower.com'>Invision Power Services, Inc.</a>
 * @copyright	(c) 2001 - 2016 Invision Power Services, Inc.
 * @license		http://www.invisionpower.com/legal/standards/
 * @package		IPS Community Suite
 * @subpackage	nexus
 * @since		17 Feb 2016
 * @version		SVN_VERSION_NUMBER
 */

namespace IPS\nexus\tasks;

/* To prevent PHP errors (extending class does not exist) revealing path */
if ( !defined( '\IPS\SUITE_UNIQUE_KEY' ) )
{
	header( ( isset( $_SERVER['SERVER_PROTOCOL'] ) ? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.0' ) . ' 403 Forbidden' );
	exit;
}

/**
 * cartCleanup Task
 */
class _cartCleanup extends \IPS\Task
{
	/**
	 * Execute
	 *
	 * If ran successfully, should return anything worth logging. Only log something
	 * worth mentioning (don't log "task ran successfully"). Return NULL (actual NULL, not '' or 0) to not log (which will be most cases).
	 * If an error occurs which means the task could not finish running, throw an \IPS\Task\Exception - do not log an error as a normal log.
	 * Tasks should execute within the time of a normal HTTP request.
	 *
	 * @return	mixed	Message to log or NULL
	 * @throws	\IPS\Task\Exception
	 */
	public function execute()
	{
		$ids = array();
		
		foreach ( \IPS\Db::i()->select( 'nexus_cart_uploads.id', 'nexus_cart_uploads', array( 'time<? AND core_sessions.id IS NULL', ( time() - 86400 ) ) )->join( 'core_sessions', 'core_sessions.id=nexus_cart_uploads.session_id' ) as $id )
		{
			\IPS\File::unclaimAttachments( 'nexus_Purchases', $id, NULL, 'cart' );
			$ids[] = $id;
		}
		
		\IPS\Db::i()->delete( 'nexus_cart_uploads', \IPS\Db::i()->in( 'id', $ids ) );
				
		return NULL;
	}
	
	/**
	 * Cleanup
	 *
	 * If your task takes longer than 15 minutes to run, this method
	 * will be called before execute(). Use it to clean up anything which
	 * may not have been done
	 *
	 * @return	void
	 */
	public function cleanup()
	{
		
	}
}