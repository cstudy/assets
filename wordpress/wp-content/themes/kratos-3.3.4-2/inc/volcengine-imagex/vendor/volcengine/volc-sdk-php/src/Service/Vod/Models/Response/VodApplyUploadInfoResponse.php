<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vod/response/response_vod.proto

namespace Volc\Service\Vod\Models\Response;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Response.VodApplyUploadInfoResponse</code>
 */
class VodApplyUploadInfoResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Base.ResponseMetadata ResponseMetadata = 1;</code>
     */
    protected $ResponseMetadata = null;
    /**
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.VodApplyUploadInfoResult Result = 2;</code>
     */
    protected $Result = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Volc\Service\Vod\Models\Base\ResponseMetadata $ResponseMetadata
     *     @type \Volc\Service\Vod\Models\Business\VodApplyUploadInfoResult $Result
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\ResponseVod::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Base.ResponseMetadata ResponseMetadata = 1;</code>
     * @return \Volc\Service\Vod\Models\Base\ResponseMetadata
     */
    public function getResponseMetadata()
    {
        return $this->ResponseMetadata;
    }

    /**
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Base.ResponseMetadata ResponseMetadata = 1;</code>
     * @param \Volc\Service\Vod\Models\Base\ResponseMetadata $var
     * @return $this
     */
    public function setResponseMetadata($var)
    {
        GPBUtil::checkMessage($var, \Volc\Service\Vod\Models\Base\ResponseMetadata::class);
        $this->ResponseMetadata = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.VodApplyUploadInfoResult Result = 2;</code>
     * @return \Volc\Service\Vod\Models\Business\VodApplyUploadInfoResult
     */
    public function getResult()
    {
        return $this->Result;
    }

    /**
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.VodApplyUploadInfoResult Result = 2;</code>
     * @param \Volc\Service\Vod\Models\Business\VodApplyUploadInfoResult $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkMessage($var, \Volc\Service\Vod\Models\Business\VodApplyUploadInfoResult::class);
        $this->Result = $var;

        return $this;
    }

}

