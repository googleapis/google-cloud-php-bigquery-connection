<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/connection/v1/connection.proto

namespace Google\Cloud\BigQuery\Connection\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Container for connection properties to execute stored procedures for Apache
 * Spark.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.connection.v1.SparkProperties</code>
 */
class SparkProperties extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The account ID of the service created for the purpose of this
     * connection.
     * The service account does not have any permissions associated with it when
     * it is created. After creation, customers delegate permissions to the
     * service account. When the connection is used in the context of a stored
     * procedure for Apache Spark in BigQuery, the service account is used to
     * connect to the desired resources in Google Cloud.
     * The account ID is in the form of:
     * bqcx-<projectnumber>-<uniqueid>&#64;gcp-sa-bigquery-consp.iam.gserviceaccount.com
     *
     * Generated from protobuf field <code>string service_account_id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $service_account_id = '';
    /**
     * Optional. Dataproc Metastore Service configuration for the connection.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.connection.v1.MetastoreServiceConfig metastore_service_config = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $metastore_service_config = null;
    /**
     * Optional. Spark History Server configuration for the connection.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.connection.v1.SparkHistoryServerConfig spark_history_server_config = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $spark_history_server_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $service_account_id
     *           Output only. The account ID of the service created for the purpose of this
     *           connection.
     *           The service account does not have any permissions associated with it when
     *           it is created. After creation, customers delegate permissions to the
     *           service account. When the connection is used in the context of a stored
     *           procedure for Apache Spark in BigQuery, the service account is used to
     *           connect to the desired resources in Google Cloud.
     *           The account ID is in the form of:
     *           bqcx-<projectnumber>-<uniqueid>&#64;gcp-sa-bigquery-consp.iam.gserviceaccount.com
     *     @type \Google\Cloud\BigQuery\Connection\V1\MetastoreServiceConfig $metastore_service_config
     *           Optional. Dataproc Metastore Service configuration for the connection.
     *     @type \Google\Cloud\BigQuery\Connection\V1\SparkHistoryServerConfig $spark_history_server_config
     *           Optional. Spark History Server configuration for the connection.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Connection\V1\Connection::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The account ID of the service created for the purpose of this
     * connection.
     * The service account does not have any permissions associated with it when
     * it is created. After creation, customers delegate permissions to the
     * service account. When the connection is used in the context of a stored
     * procedure for Apache Spark in BigQuery, the service account is used to
     * connect to the desired resources in Google Cloud.
     * The account ID is in the form of:
     * bqcx-<projectnumber>-<uniqueid>&#64;gcp-sa-bigquery-consp.iam.gserviceaccount.com
     *
     * Generated from protobuf field <code>string service_account_id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getServiceAccountId()
    {
        return $this->service_account_id;
    }

    /**
     * Output only. The account ID of the service created for the purpose of this
     * connection.
     * The service account does not have any permissions associated with it when
     * it is created. After creation, customers delegate permissions to the
     * service account. When the connection is used in the context of a stored
     * procedure for Apache Spark in BigQuery, the service account is used to
     * connect to the desired resources in Google Cloud.
     * The account ID is in the form of:
     * bqcx-<projectnumber>-<uniqueid>&#64;gcp-sa-bigquery-consp.iam.gserviceaccount.com
     *
     * Generated from protobuf field <code>string service_account_id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setServiceAccountId($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_account_id = $var;

        return $this;
    }

    /**
     * Optional. Dataproc Metastore Service configuration for the connection.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.connection.v1.MetastoreServiceConfig metastore_service_config = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\BigQuery\Connection\V1\MetastoreServiceConfig|null
     */
    public function getMetastoreServiceConfig()
    {
        return $this->metastore_service_config;
    }

    public function hasMetastoreServiceConfig()
    {
        return isset($this->metastore_service_config);
    }

    public function clearMetastoreServiceConfig()
    {
        unset($this->metastore_service_config);
    }

    /**
     * Optional. Dataproc Metastore Service configuration for the connection.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.connection.v1.MetastoreServiceConfig metastore_service_config = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\BigQuery\Connection\V1\MetastoreServiceConfig $var
     * @return $this
     */
    public function setMetastoreServiceConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\Connection\V1\MetastoreServiceConfig::class);
        $this->metastore_service_config = $var;

        return $this;
    }

    /**
     * Optional. Spark History Server configuration for the connection.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.connection.v1.SparkHistoryServerConfig spark_history_server_config = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\BigQuery\Connection\V1\SparkHistoryServerConfig|null
     */
    public function getSparkHistoryServerConfig()
    {
        return $this->spark_history_server_config;
    }

    public function hasSparkHistoryServerConfig()
    {
        return isset($this->spark_history_server_config);
    }

    public function clearSparkHistoryServerConfig()
    {
        unset($this->spark_history_server_config);
    }

    /**
     * Optional. Spark History Server configuration for the connection.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.connection.v1.SparkHistoryServerConfig spark_history_server_config = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\BigQuery\Connection\V1\SparkHistoryServerConfig $var
     * @return $this
     */
    public function setSparkHistoryServerConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\Connection\V1\SparkHistoryServerConfig::class);
        $this->spark_history_server_config = $var;

        return $this;
    }

}

