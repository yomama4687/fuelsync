<?php
/**
 * Part of the Fuel framework.
 *
 * @package    Fuel
 * @version    1.0
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2012 Fuel Development Team
 * @link       http://fuelphp.com
 */





// ------------------------------------------------------------------------

/**
 * Validation
 *
 * Static object to allow static usage of validation through singleton.
 *
 * @package     Fuel
 * @subpackage  Core
 * @category    Core
 */
class Validation extends Fuel\Core\Validation 
{
	public static function _validation_valid_date($val)
	{
		Log::info('0');
		if (!$val)
		{
		Log::info('1');
			return true;
		}
		 
		$parts = array();
		// 形式はyyyy-mm-dd
		if (!preg_match('/^([0-9]{4})[\-\/\.](0?[0-9]|1[0-2])[\-\/\.]([0-2]?[0-9]|3[01])$/', $val, $parts))
		{
		Log::info('2');
			return false;
		}
			 
		if (checkdate($parts[2], $parts[3], $parts[1]) === true)
		{
		Log::info('3');
			return true;
		}
		else
		{
		Log::info('4');
			return false;
		}
	}
}
