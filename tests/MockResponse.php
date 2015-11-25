<?php
namespace QuimCalpe\ResponseSender\Test;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;

class MockResponse implements ResponseInterface
{
    private $body;
    private $statusCode;
    private $reasonPhrase;

    public function __construct($body, $statusCode = 200, $reasonPhrase = "")
    {
        $this->body = $body;
        $this->statusCode = $statusCode;
        $this->reasonPhrase = $reasonPhrase;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function getStatusCode()
    {
        return $this->statusCode;
    }

    public function getReasonPhrase()
    {
        return $this->reasonPhrase;
    }

    public function getProtocolVersion()
    {
        return '1.1';
    }

    public function withStatus($code, $reasonPhrase = '') {}

    public function withProtocolVersion($version) {}

    public function getHeaders() {}

    public function hasHeader($name) {}

    public function getHeader($name) {}

    public function getHeaderLine($name) {}

    public function withHeader($name, $value) {}

    public function withAddedHeader($name, $value) {}

    public function withoutHeader($name) {}

    public function withBody(StreamInterface $body) {}
}
