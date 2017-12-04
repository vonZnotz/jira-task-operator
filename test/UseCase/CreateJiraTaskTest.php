<?php

declare(strict_types=1);

namespace vonZnotz\JiraTaskOperator\test\UseCase;

use PHPUnit\Framework\TestCase;

class CreateJiraTaskTest extends TestCase
{
    public function testCreateJiraTask()
    {
        $useCase = new \vonZnotz\JiraTaskOperator\UseCase\CreateJiraTask();

        $request = new \vonZnotz\JiraTaskOperator\UseCase\Request\CreateJiraTaskRequest();

        $request->setProjectId("ME");

        $response = new \vonZnotz\JiraTaskOperator\UseCase\Response\CreateJiraTaskResponse();

        $response = $useCase->run($request, $response);
        $this->assertTrue($response->getCreatedTask());
    }
}