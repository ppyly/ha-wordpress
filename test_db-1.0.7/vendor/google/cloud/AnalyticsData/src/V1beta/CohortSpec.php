<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/data/v1beta/data.proto

namespace Google\Analytics\Data\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The specification of cohorts for a cohort report.
 * Cohort reports create a time series of user retention for the cohort. For
 * example, you could select the cohort of users that were acquired in the first
 * week of September and follow that cohort for the next six weeks. Selecting
 * the users acquired in the first week of September cohort is specified in the
 * `cohort` object. Following that cohort for the next six weeks is specified in
 * the `cohortsRange` object.
 * For examples, see [Cohort Report
 * Examples](https://developers.google.com/analytics/devguides/reporting/data/v1/advanced#cohort_report_examples).
 * The report response could show a weekly time series where say your app has
 * retained 60% of this cohort after three weeks and 25% of this cohort after
 * six weeks. These two percentages can be calculated by the metric
 * `cohortActiveUsers/cohortTotalUsers` and will be separate rows in the report.
 *
 * Generated from protobuf message <code>google.analytics.data.v1beta.CohortSpec</code>
 */
class CohortSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * Defines the selection criteria to group users into cohorts.
     * Most cohort reports define only a single cohort. If multiple cohorts are
     * specified, each cohort can be recognized in the report by their name.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.Cohort cohorts = 1;</code>
     */
    private $cohorts;
    /**
     * Cohort reports follow cohorts over an extended reporting date range. This
     * range specifies an offset duration to follow the cohorts over.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.CohortsRange cohorts_range = 2;</code>
     */
    private $cohorts_range = null;
    /**
     * Optional settings for a cohort report.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.CohortReportSettings cohort_report_settings = 3;</code>
     */
    private $cohort_report_settings = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Analytics\Data\V1beta\Cohort[]|\Google\Protobuf\Internal\RepeatedField $cohorts
     *           Defines the selection criteria to group users into cohorts.
     *           Most cohort reports define only a single cohort. If multiple cohorts are
     *           specified, each cohort can be recognized in the report by their name.
     *     @type \Google\Analytics\Data\V1beta\CohortsRange $cohorts_range
     *           Cohort reports follow cohorts over an extended reporting date range. This
     *           range specifies an offset duration to follow the cohorts over.
     *     @type \Google\Analytics\Data\V1beta\CohortReportSettings $cohort_report_settings
     *           Optional settings for a cohort report.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Data\V1Beta\Data::initOnce();
        parent::__construct($data);
    }

    /**
     * Defines the selection criteria to group users into cohorts.
     * Most cohort reports define only a single cohort. If multiple cohorts are
     * specified, each cohort can be recognized in the report by their name.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.Cohort cohorts = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCohorts()
    {
        return $this->cohorts;
    }

    /**
     * Defines the selection criteria to group users into cohorts.
     * Most cohort reports define only a single cohort. If multiple cohorts are
     * specified, each cohort can be recognized in the report by their name.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.Cohort cohorts = 1;</code>
     * @param \Google\Analytics\Data\V1beta\Cohort[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCohorts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Analytics\Data\V1beta\Cohort::class);
        $this->cohorts = $arr;

        return $this;
    }

    /**
     * Cohort reports follow cohorts over an extended reporting date range. This
     * range specifies an offset duration to follow the cohorts over.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.CohortsRange cohorts_range = 2;</code>
     * @return \Google\Analytics\Data\V1beta\CohortsRange|null
     */
    public function getCohortsRange()
    {
        return $this->cohorts_range;
    }

    public function hasCohortsRange()
    {
        return isset($this->cohorts_range);
    }

    public function clearCohortsRange()
    {
        unset($this->cohorts_range);
    }

    /**
     * Cohort reports follow cohorts over an extended reporting date range. This
     * range specifies an offset duration to follow the cohorts over.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.CohortsRange cohorts_range = 2;</code>
     * @param \Google\Analytics\Data\V1beta\CohortsRange $var
     * @return $this
     */
    public function setCohortsRange($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Data\V1beta\CohortsRange::class);
        $this->cohorts_range = $var;

        return $this;
    }

    /**
     * Optional settings for a cohort report.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.CohortReportSettings cohort_report_settings = 3;</code>
     * @return \Google\Analytics\Data\V1beta\CohortReportSettings|null
     */
    public function getCohortReportSettings()
    {
        return $this->cohort_report_settings;
    }

    public function hasCohortReportSettings()
    {
        return isset($this->cohort_report_settings);
    }

    public function clearCohortReportSettings()
    {
        unset($this->cohort_report_settings);
    }

    /**
     * Optional settings for a cohort report.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.CohortReportSettings cohort_report_settings = 3;</code>
     * @param \Google\Analytics\Data\V1beta\CohortReportSettings $var
     * @return $this
     */
    public function setCohortReportSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Data\V1beta\CohortReportSettings::class);
        $this->cohort_report_settings = $var;

        return $this;
    }

}

