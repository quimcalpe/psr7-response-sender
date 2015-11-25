<?php
namespace QuimCalpe\ResponseSender\Test;

use QuimCalpe\ResponseSender;
use PHPUnit_Framework_TestCase as TestCase;

class SenderTest extends TestCase
{
    public function test_send_ok()
    {
        $response = new MockResponse("Hi there!");
        ob_start();
        ResponseSender\send($response);
        $content = ob_get_clean();
        $this->assertEquals("Hi there!", $content);
    }
}
