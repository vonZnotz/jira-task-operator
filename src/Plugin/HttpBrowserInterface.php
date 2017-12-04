<?php

declare(strict_types=1);

namespace vonZnotz\JiraTaskOperator\Plugin;

interface HttpBrowserInterface
{
    /**
     * @param string $url
     * @return int The status of the request
     */
    public function request(string $url): int;
}