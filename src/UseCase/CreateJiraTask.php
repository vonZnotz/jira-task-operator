<?php

declare(strict_types=1);

namespace vonZnotz\JiraTaskOperator\UseCase;

use vonZnotz\JiraTaskOperator\UseCase\Request\CreateJiraTaskRequest;
use vonZnotz\JiraTaskOperator\UseCase\Response\CreateJiraTaskResponse;

class CreateJiraTask
{
    public function run(CreateJiraTaskRequest $request, CreateJiraTaskResponse $response)
    {
        return $response;
    }
}