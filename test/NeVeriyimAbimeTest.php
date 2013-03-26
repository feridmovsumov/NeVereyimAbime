<?php

require_once '../NeVeriyimAbime.php';

/**
 * Bakalım abisine gerçekten doğru şeyleri verebiliyor mu?
 * @author Ferid Mövsümov
 */
class NeVeriyimAbimeTest extends \PHPUnit_Framework_TestCase{
	
	public function testString()
	{
		//100 kere faklı farklı deneyelimki çalıştığından şüphemiz kalmasın
		for($i=1; $i<=100; $i++)
		{	
			//öncelikle gerçekten istediğimiz boyutta veriyor mu bakalım stringi?
			$randomInt = rand(1,100);
			$this->assertEquals($randomInt, strlen(NeVeriyimAbime::string($randomInt)));
		}
	}
}