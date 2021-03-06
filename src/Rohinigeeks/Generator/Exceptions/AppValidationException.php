<?php
/**
 * User: Rohinigeeks
 * Date: 14/02/15
 * Time: 10:38 PM
 */

namespace Rohinigeeks\Generator\Exceptions;

use Exception;

class AppValidationException extends Exception
{

	public $dataMsg;

	function __construct($message = "", $code = 0, $dataMsg = [], Exception $previous = null)
	{
		$this->dataMsg = $dataMsg;
		parent::__construct($message, $code, $previous);
	}
}