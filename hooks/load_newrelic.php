<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * New Relic loader
 *
 * @package    newrelic
 * @author     Robbie Mackay
 * @copyright  (c) 2013 Ushahidi Team  - http://www.ushahidi.com
 * @license    http://www.gnu.org/copyleft/lesser.html GNU Lesser General Public License (LGPL) 
 */
if (extension_loaded ('newrelic')) {
	Event::add('system.post_routing', array('Newrelic_Loader', 'name_transaction'));
}
