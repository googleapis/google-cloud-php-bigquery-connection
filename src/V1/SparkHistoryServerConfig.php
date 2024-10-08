<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/connection/v1/connection.proto

namespace Google\Cloud\BigQuery\Connection\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration of the Spark History Server.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.connection.v1.SparkHistoryServerConfig</code>
 */
class SparkHistoryServerConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Resource name of an existing Dataproc Cluster to act as a Spark
     * History Server for the connection.
     * Example:
     * * `projects/[project_id]/regions/[region]/clusters/[cluster_name]`
     *
     * Generated from protobuf field <code>string dataproc_cluster = 1 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     */
    protected $dataproc_cluster = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $dataproc_cluster
     *           Optional. Resource name of an existing Dataproc Cluster to act as a Spark
     *           History Server for the connection.
     *           Example:
     *           * `projects/[project_id]/regions/[region]/clusters/[cluster_name]`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Connection\V1\Connection::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Resource name of an existing Dataproc Cluster to act as a Spark
     * History Server for the connection.
     * Example:
     * * `projects/[project_id]/regions/[region]/clusters/[cluster_name]`
     *
     * Generated from protobuf field <code>string dataproc_cluster = 1 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getDataprocCluster()
    {
        return $this->dataproc_cluster;
    }

    /**
     * Optional. Resource name of an existing Dataproc Cluster to act as a Spark
     * History Server for the connection.
     * Example:
     * * `projects/[project_id]/regions/[region]/clusters/[cluster_name]`
     *
     * Generated from protobuf field <code>string dataproc_cluster = 1 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setDataprocCluster($var)
    {
        GPBUtil::checkString($var, True);
        $this->dataproc_cluster = $var;

        return $this;
    }

}

