<?php
// php magic constants
namespace php\Test;
class Test{
	public function __construct(){
		echo "File - ".__FILE__."<br>";
		echo "Dir - ".__DIR__."<br>";
		echo "Class - ".__CLASS__."<br>";
		echo "Class - ".Test::class."<br>";
		echo "Function - ".__FUNCTION__."<br>";
		echo "Line - ".__LINE__."<br>";
		echo "Namespace - ".__NAMESPACE__."<br>";
		echo "Trait - ".__TRAIT__."<br>";
		echo "Method - ".__METHOD__."<br>";
	}
}
new Test();