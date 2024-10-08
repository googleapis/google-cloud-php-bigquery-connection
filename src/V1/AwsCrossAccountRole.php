<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/connection/v1/connection.proto

namespace Google\Cloud\BigQuery\Connection\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Authentication method for Amazon Web Services (AWS) that uses Google owned
 * AWS IAM user's access key to assume into customer's AWS IAM Role.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.connection.v1.AwsCrossAccountRole</code>
 */
class AwsCrossAccountRole extends \Google\Protobuf\Internal\Message
{
    /**
     * The user’s AWS IAM Role that trusts the Google-owned AWS IAM user
     * Connection.
     *
     * Generated from protobuf field <code>string iam_role_id = 1;</code>
     */
    protected $iam_role_id = '';
    /**
     * Output only. Google-owned AWS IAM User for a Connection.
     *
     * Generated from protobuf field <code>string iam_user_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $iam_user_id = '';
    /**
     * Output only. A Google-generated id for representing Connection’s identity
     * in AWS. External Id is also used for preventing the Confused Deputy
     * Problem. See
     * https://docs.aws.amazon.com/IAM/latest/UserGuide/id_roles_create_for-user_externalid.html
     *
     * Generated from protobuf field <code>string external_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $external_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $iam_role_id
     *           The user’s AWS IAM Role that trusts the Google-owned AWS IAM user
     *           Connection.
     *     @type string $iam_user_id
     *           Output only. Google-owned AWS IAM User for a Connection.
     *     @type string $external_id
     *           Output only. A Google-generated id for representing Connection’s identity
     *           in AWS. External Id is also used for preventing the Confused Deputy
     *           Problem. See
     *           https://docs.aws.amazon.com/IAM/latest/UserGuide/id_roles_create_for-user_externalid.html
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Connection\V1\Connection::initOnce();
        parent::__construct($data);
    }

    /**
     * The user’s AWS IAM Role that trusts the Google-owned AWS IAM user
     * Connection.
     *
     * Generated from protobuf field <code>string iam_role_id = 1;</code>
     * @return string
     */
    public function getIamRoleId()
    {
        return $this->iam_role_id;
    }

    /**
     * The user’s AWS IAM Role that trusts the Google-owned AWS IAM user
     * Connection.
     *
     * Generated from protobuf field <code>string iam_role_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setIamRoleId($var)
    {
        GPBUtil::checkString($var, True);
        $this->iam_role_id = $var;

        return $this;
    }

    /**
     * Output only. Google-owned AWS IAM User for a Connection.
     *
     * Generated from protobuf field <code>string iam_user_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getIamUserId()
    {
        return $this->iam_user_id;
    }

    /**
     * Output only. Google-owned AWS IAM User for a Connection.
     *
     * Generated from protobuf field <code>string iam_user_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setIamUserId($var)
    {
        GPBUtil::checkString($var, True);
        $this->iam_user_id = $var;

        return $this;
    }

    /**
     * Output only. A Google-generated id for representing Connection’s identity
     * in AWS. External Id is also used for preventing the Confused Deputy
     * Problem. See
     * https://docs.aws.amazon.com/IAM/latest/UserGuide/id_roles_create_for-user_externalid.html
     *
     * Generated from protobuf field <code>string external_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getExternalId()
    {
        return $this->external_id;
    }

    /**
     * Output only. A Google-generated id for representing Connection’s identity
     * in AWS. External Id is also used for preventing the Confused Deputy
     * Problem. See
     * https://docs.aws.amazon.com/IAM/latest/UserGuide/id_roles_create_for-user_externalid.html
     *
     * Generated from protobuf field <code>string external_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setExternalId($var)
    {
        GPBUtil::checkString($var, True);
        $this->external_id = $var;

        return $this;
    }

}

