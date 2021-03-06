<?php

namespace Saramin\RecruitApi\Parameters;

use Saramin\RecruitApi\Contracts\ParameterInterface;

class Deadline implements ParameterInterface
{
    private $deadline = '';

    /**
     * Deadline constructor.
     *
     * @param string $deadline
     */
    public function __construct($deadline)
    {
        $this->deadline = $deadline;
    }

    /**
     * @return array
     */
    public function rules()
    {
        return ['deadline' => ['in:today,tomorrow,-']];
    }

    /**
     * @return array
     */
    public function getQueryArray()
    {
        return ['deadline' => $this->deadline];
    }
}
