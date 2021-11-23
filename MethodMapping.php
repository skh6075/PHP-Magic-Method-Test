<?php


/**
 *
 * @method static MethodMapping __printMapping(...$args)
 */

class MethodMapping{

	public function __construct(){
	}

	public static function __callStatic(string $name, array $arguments){
		(new self())::{str_replace("__", "", $name)}(...$arguments);
	}

	public static function printMapping(string $args): void{
		echo $args;
	}

	public function dump(): void{
		/* echo */ self::__printMapping("hello world"); // res => hello world
	}
}

