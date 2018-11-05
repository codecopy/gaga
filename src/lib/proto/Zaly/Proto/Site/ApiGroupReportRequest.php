<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: site/api_group_report.proto

namespace Zaly\Proto\Site;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 **
 * action: api.group.report
 *
 * Generated from protobuf message <code>site.ApiGroupReportRequest</code>
 */
class ApiGroupReportRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string groupId = 1;</code>
     */
    private $groupId = '';
    /**
     * Generated from protobuf field <code>int32 reportType = 2;</code>
     */
    private $reportType = 0;
    /**
     * Generated from protobuf field <code>string note = 3;</code>
     */
    private $note = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $groupId
     *     @type int $reportType
     *     @type string $note
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Site\ApiGroupReport::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string groupId = 1;</code>
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Generated from protobuf field <code>string groupId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setGroupId($var)
    {
        GPBUtil::checkString($var, True);
        $this->groupId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 reportType = 2;</code>
     * @return int
     */
    public function getReportType()
    {
        return $this->reportType;
    }

    /**
     * Generated from protobuf field <code>int32 reportType = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setReportType($var)
    {
        GPBUtil::checkInt32($var);
        $this->reportType = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string note = 3;</code>
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Generated from protobuf field <code>string note = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setNote($var)
    {
        GPBUtil::checkString($var, True);
        $this->note = $var;

        return $this;
    }

}

