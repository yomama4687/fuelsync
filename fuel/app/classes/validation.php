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
		if (!$val)
		{
			return true;
		}
		 
		$parts = array();
		// 形式はyyyy-mm-dd
		if (!preg_match('/^([0-9]{4})[\-\/\.](0?[0-9]|1[0-2])[\-\/\.]([0-2]?[0-9]|3[01])$/', $val, $parts))
		{
			return false;
		}
			 
		if (checkdate($parts[2], $parts[3], $parts[1]) === true)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}
