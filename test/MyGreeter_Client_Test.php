<?php  namespace test;

use MyGreeter\Client;
use PHPUnit\Framework\TestCase;

class MyGreeter_Client_Test extends TestCase
{
    public $greeter;

    public function setUp()
    {
        $this->greeter = new Client();
    }

    public function testEchoTimeString()
    {
        $this->expectOutputString('Good evening');
        $str = $this->greeter->getGreeting();
        print $str;
    }

    public function testInstance()
    {
        $this->assertEquals(
            get_class($this->greeter),
            Client::class
        );
    }
    public function testGetGreeting()
    {
        $this->assertTrue(
            strlen($this->greeter->getGreeting()) > 0
        );
    }


}
