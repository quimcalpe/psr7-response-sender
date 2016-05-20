<?php
namespace QuimCalpe\ResponseSender;

use Psr\Http\Message\ResponseInterface;

function send(ResponseInterface $response)
{
    if (!headers_sent()) {
        // status
        header(sprintf('HTTP/%s %s %s', $response->getProtocolVersion(), $response->getStatusCode(), $response->getReasonPhrase()), true, $response->getStatusCode());

        // headers
        foreach ($response->getHeaders() as $header => $values) {
            foreach ($values as $value) {
                header($header.': '.$value, false, $response->getStatusCode());
            }
        }
    }

    echo $response->getBody();
}
