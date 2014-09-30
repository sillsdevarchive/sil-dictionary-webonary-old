<?php
namespace SIL\Webonary\Receiver;
require "Receiver.php";

class ReceiverTest extends \PHPUnit_Framework_TestCase
{
    public function testReceiveZipReturnsNullOnNullInput()
    {
        $receiver = new Receiver();
        $this->assertEquals(null, $receiver->receiveZip(null), "Unexpected output");
    }
}
