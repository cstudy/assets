<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vod/business/vod_workflow.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.VodStartWorkflowResult</code>
 */
class VodStartWorkflowResult extends \Google\Protobuf\Internal\Message
{
    /**
     * 工作流执行Id
     *
     * Generated from protobuf field <code>string RunId = 1;</code>
     */
    protected $RunId = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $RunId
     *           工作流执行Id
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodWorkflow::initOnce();
        parent::__construct($data);
    }

    /**
     * 工作流执行Id
     *
     * Generated from protobuf field <code>string RunId = 1;</code>
     * @return string
     */
    public function getRunId()
    {
        return $this->RunId;
    }

    /**
     * 工作流执行Id
     *
     * Generated from protobuf field <code>string RunId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setRunId($var)
    {
        GPBUtil::checkString($var, True);
        $this->RunId = $var;

        return $this;
    }

}

