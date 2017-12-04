<?php

declare(strict_types=1);

namespace vonZnotz\JiraTaskOperator\Plugin;

class HttpBrowser implements HttpBrowserInterface
{
    private $browser;

    public function __construct()
    {
        $this->browser = new \GuzzleHttp\Client();
    }

    public function request(string $url): int
    {
        $res = $this->browser->request("POST", $url);
        return $res->getStatusCode();
    }
}