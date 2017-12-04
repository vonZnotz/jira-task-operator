<?php

declare(strict_types=1);

namespace vonZnotz\JiraTaskOperator\UseCase\Request;

class CreateJiraTaskRequest
{
    /** @var string */
    private $projectId;

    /** @var string */
    private $summary;

    /** @var string */
    private $description;

    /** @var string */
    private $assignee;

    /** @var \DateTime */
    private $originalEstimationTime;

    /** @var \DateTime */
    private $duedate;

    /** @var string */
    private $issueType;

    /** @var array */
    private $customFields = [];

    /**
     * @return string
     */
    public function getPriorityName(): string
    {
        return $this->priorityName;
    }

    /**
     * @param string $priorityName
     */
    public function setPriorityName(string $priorityName)
    {
        $this->priorityName = $priorityName;
    }

    /** @var string */
    private $priorityName;

    /**
     * @return string
     */
    public function getProjectId(): string
    {
        return $this->projectId;
    }

    /**
     * @param string $projectId
     */
    public function setProjectId(string $projectId)
    {
        $this->projectId = $projectId;
    }

    /**
     * @return string
     */
    public function getSummary(): string
    {
        return $this->summary;
    }

    /**
     * @param string $summary
     */
    public function setSummary(string $summary)
    {
        $this->summary = $summary;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getAssignee(): string
    {
        return $this->assignee;
    }

    /**
     * @param string $assignee
     */
    public function setAssignee(string $assignee)
    {
        $this->assignee = $assignee;
    }

    /**
     * @return \DateTime
     */
    public function getOriginalEstimationTime(): \DateTime
    {
        return $this->originalEstimationTime;
    }

    /**
     * @param \DateTime $originalEstimationTime
     */
    public function setOriginalEstimationTime(\DateTime $originalEstimationTime)
    {
        $this->originalEstimationTime = $originalEstimationTime;
    }

    /**
     * @return \DateTime
     */
    public function getDuedate(): \DateTime
    {
        return $this->duedate;
    }

    /**
     * @param \DateTime $duedate
     */
    public function setDuedate(\DateTime $duedate)
    {
        $this->duedate = $duedate;
    }

    /**
     * @return string
     */
    public function getIssueType(): string
    {
        return $this->issueType;
    }

    /**
     * @param string $issueType
     */
    public function setIssueType(string $issueType)
    {
        $this->issueType = $issueType;
    }

    /**
     * @return array
     */
    public function getCustomFields(): array
    {
        return $this->customFields;
    }

    /**
     * @param array $customFields
     */
    public function setCustomFields(array $customFields)
    {
        $this->customFields = $customFields;
    }

    /**
     * @param $key
     * @param $value
     */
    public function addCustomField($key, $value)
    {
        $this->customFields[$key] = $value;
    }

}