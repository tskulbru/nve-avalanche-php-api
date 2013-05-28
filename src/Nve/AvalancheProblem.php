<?php
/**
 * Model class for a Avalanche Problem.
 * This class is a representation of what problems may be the cause for a avalanche warning.
 *
 * @category  API
 * @package   Nve
 * @author    Torstein S. Skulbru <serrghi@gmail.com>
 * @copyright 2013 Torstein S. Skulbru
 * @license   http://opensource.org/licenses/BSD-2-Clause The BSD 2-Clause License
 * @version   0.1
 * @link      http://www.stubit.no
 */
namespace Nve;

class AvalancheProblem
{
    private $_avalCauseExtId;
    private $_avalCauseExtName;
    private $_avalCauseId;
    private $_avalCauseName;
    private $_avalProbabilityId;
    private $_avalProbabilityName;
    private $_avalReleaseHeightId;
    private $_avalReleaseHeightName;
    private $_avalTriggerSimpleId;
    private $_avalTriggerSimpleName;
    private $_avalancheExtId;
    private $_avalancheExtName;

    /**
     * Constructor, requires a json array or object.
     *
     * @param mixed $mixed JSON array or object
     */
    public function __construct($mixed)
    {
        if (isset($mixed)) {
            if (is_object($mixed)) {
                if (isset($mixed->AvalCauseExtId))
                    $this->_avalCauseExtId = $mixed->AvalCauseExtId;
                if (isset($mixed->AvalCauseExtName))
                    $this->_avalCauseExtName = $mixed->AvalCauseExtName;
                if (isset($mixed->AvalCauseId))
                    $this->_avalCauseId = $mixed->AvalCauseId;
                if (isset($mixed->AvalCauseName))
                    $this->_avalCauseName = $mixed->AvalCauseName;
                if (isset($mixed->AvalProbabilityId))
                    $this->_avalProbabilityId = $mixed->AvalProbabilityId;
                if (isset($mixed->AvalProbabilityName))
                    $this->_avalProbabilityName = $mixed->AvalProbabilityName;
                if (isset($mixed->AvalReleaseHeightId))
                    $this->_avalReleaseHeightId = $mixed->AvalReleaseHeightId;
                if (isset($mixed->AvalReleaseHeightName))
                    $this->_avalReleaseHeightName = $mixed->AvalReleaseHeightName;
                if (isset($mixed->AvalTriggerSimpleId))
                    $this->_avalTriggerSimpleId = $mixed->AvalTriggerSimpleId;
                if (isset($mixed->AvalTriggerSimpleName))
                    $this->_avalTriggerSimpleName = $mixed->AvalTriggerSimpleName;
                if (isset($mixed->AvalancheExtId))
                    $this->_avalancheExtId = $mixed->AvalancheExtId;
                if (isset($mixed->AvalancheExtName))
                    $this->_avalancheExtId = $mixed->AvalancheExtName;
            } else if (is_array($mixed)) {
                if (isset($mixed['AvalCauseExtId']))
                    $this->__avalCauseExtId = $mixed['AvalCauseExtId'];
                if (isset($mixed['AvalCauseExtName']))
                    $this->_avalCauseExtName = $mixed['AvalCauseExtName'];
                if (isset($mixed['AvalCauseId']))
                    $this->_avalCauseId = $mixed['AvalCauseId'];
                if (isset($mixed['AvalCauseName']))
                    $this->_avalCauseName = $mixed['AvalCauseName'];
                if (isset($mixed['AvalProbabilityId']))
                    $this->_avalProbabilityId = $mixed['AvalProbabilityId'];
                if (isset($mixed['AvalProbabilityName']))
                    $this->_avalProbabilityName = $mixed['AvalProbabilityName'];
                if (isset($mixed['AvalReleaseHeightId']))
                    $this->_avalReleaseHeightId = $mixed['AvalReleaseHeightId'];
                if (isset($mixed['AvalReleaseHeightName']))
                    $this->_avalReleaseHeightName = $mixed['AvalReleaseHeightName'];
                if (isset($mixed['AvalTriggerSimpleId']))
                    $this->_avalTriggerSimpleId = $mixed['AvalTriggerSimpleId'];
                if (isset($mixed['AvalTriggerSimpleName']))
                    $this->_avalTriggerSimpleName = $mixed['AvalTriggerSimpleName'];
                if (isset($mixed['AvalancheExtId']))
                    $this->avalextid = $mixed['AvalancheExtId'];
                if (isset($mixed['AvalancheExtName']))
                    $this->_avalancheExtName = $mixed['AvalancheExtName'];
            }
        }
    }

    /**
     * Static factory method
     *
     * @param mixed $json JSON array or object
     *
     * @return AvalancheProblem
     */
    public static function fromJson($json)
    {
        return new self($json);
    }

    /**
     * Gets the value of _avalCauseExtId.
     *
     * @return int
     */
    public function getAavalCauseExtId()
    {
        return $this->_avalCauseExtId;
    }

    /**
     * Gets the value of _avalCauseExtName.
     *
     * @return string
     */
    public function getAvalCauseExtName()
    {
        return $this->_avalCauseExtName;
    }

    /**
     * Gets the value of _avalCauseId.
     *
     * @return int
     */
    public function getAvalCauseId()
    {
        return $this->_avalCauseId;
    }

    /**
     * Gets the value of _avalCauseName.
     *
     * @return string
     */
    public function getAvalCauseName()
    {
        return $this->_avalCauseName;
    }

    /**
     * Gets the value of _avalProbabilityId.
     *
     * @return int
     */
    public function getAvalProbabilityId()
    {
        return $this->_avalProbabilityId;
    }

    /**
     * Gets the value of _avalProbabilityName.
     *
     * @return string
     */
    public function getAvalProbabilityName()
    {
        return $this->_avalProbabilityName;
    }

    /**
     * Gets the value of _avalReleaseHeightId.
     *
     * @return int
     */
    public function getAvalReleaseHeightId()
    {
        return $this->_avalReleaseHeightId;
    }

    /**
     * Gets the value of _avalReleaseHeightName.
     *
     * @return string
     */
    public function getAvalReleaseHeightName()
    {
        return $this->_avalReleaseHeightName;
    }

    /**
     * Gets the value of _avalTriggerSimpleId.
     *
     * @return int
     */
    public function getAvalTriggerSimpleId()
    {
        return $this->_avalTriggerSimpleId;
    }

    /**
     * Gets the value of _avalTriggerSimpleName.
     *
     * @return string
     */
    public function getAvalTriggerSimpleName()
    {
        return $this->_avalTriggerSimpleName;
    }

    /**
     * Gets the value of _avalancheExtId.
     *
     * @return int
     */
    public function getAvalancheExtId()
    {
        return $this->_avalancheExtId;
    }

    /**
     * Gets the value of _avalancheExtName.
     *
     * @return string
     */
    public function getAvalancheExtName()
    {
        return $this->_avalancheExtName;
    }
}
