<?php
namespace CC\QuakeParser;

/**
 * @author Yme-Jan Iedema <yj.iedema@coffeecup-studios.nl>
 */
class TypeFactory
{
	public static function createType($data)
	{
		$type = ucfirst($data[2]);
		
		$class = '\\CC\\QuakeParser\\Type\\' . $type . 'Type';
		
		if (class_exists($class)) {
			return new $class($data);
		}
		user_error("Unknown type " . $type, E_USER_WARNING);
		// throw new \Exception();
	}
	
}