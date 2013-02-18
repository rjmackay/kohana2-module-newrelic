<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * New Relic loader
 *
 * @package    newrelic
 * @author     Robbie Mackay
 * @copyright  (c) 2013 Ushahidi Team  - http://www.ushahidi.com
 * @license    http://www.gnu.org/copyleft/lesser.html GNU Lesser General Public License (LGPL) 
 */
class Newrelic_Loader {
	/**
	 * Set transaction name from Router
	 */
	public static function name_transaction()
	{
		newrelic_name_transaction(implode('/', Router::$rsegments));
	}
	
}
