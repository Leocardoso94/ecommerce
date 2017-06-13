<?php 

namespace Tests\Model;

use Hcode\Model\User;

use PHPUnit_Framework_TestCase as PHPUnit;

/**
* 
*/
class UserTest extends PHPUnit
{
	public function testGetUsuarioQueEstejaRegistradoNoBanco()
	{
		$user = new User();

		$user->get(1);

		$this->assertEquals("1",$user->getiduser());

		$this->assertEquals("admin",$user->getdeslogin());
	}

	public function testLoginUsuarioValido()
	{
		$user = User::login("admin","admin");

		$this->assertEquals("admin",$user->getdeslogin());
	}
}