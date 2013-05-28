<?php
/**
 * Model class for a Avalanche Warning (Simple).
 * This class is a representation of a simple (non-detailed) avalanche warning.
 *
 * @category  API
 * @package   Nve
 * @author    Torstein S. Skulbru <serrghi@gmail.com>
 * @copyright 2013 Torstein S. Skulbru
 * @license   http://opensource.org/licenses/BSD-2-Clause The BSD 2-Clause License
 * @version   0.1
 * @link      http://www.stubit.no
 */
namespace Nve\Models;

class AvalancheWarningSimple
{
    private $_dangerLevel;
    private $_mainText;
    private $_nextWarningTime;
    private $_publishTime;
    private $_regId;
    private $_regionId;
    private $_regionName;
    private $_validFrom;
    private $_validTo;

    /**
     * Constructor, requires a JSON array or object.
     *
     * @param mixed $mixed JSON array or object
     */
    public function __construct($mixed)
    {
        if (isset($mixed)) {
            if (is_object($mixed)) {
                if (isset($mixed->DangerLevel))
                    $this->_dangerLevel = $mixed->DangerLevel;
                if (isset($mixed->MainText))
                    $this->_mainText = $mixed->MainText;
                if (isset($mixed->NextWarningTime))
                    $this->_nextWarningTime = $mixed->NextWarningTime;
                if (isset($mixed->PublishTime))
                    $this->_publishTime = $mixed->PublishTime;
                if (isset($mixed->RegId))
                    $this->_regId = $mixed->RegId;
                if (isset($mixed->RegionId))
                    $this->_regionId = $mixed->RegionId;
                if (isset($mixed->RegionName))
                    $this->_regionName = $mixed->RegionName;
                if (isset($mixed->ValidFrom))
                    $this->_validFrom = $mixed->ValidFrom;
                if (isset($mixed->ValidTo))
                    $this->_validTo = $mixed->ValidTo;
            } else if (is_array($mixed)) {
                if (isset($mixed['DangerLevel']))
                    $this->_dangerLevel = $mixed['DangerLevel'];
                if (isset($mixed['MainText']))
                    $this->_mainText = $mixed['MainText'];
                if (isset($mixed['NextWarningTime']))
                    $this->_nextWarningTime = $mixed['NextWarningTime'];
                if (isset($mixed['PublishTime']))
                    $this->_publishTime = $mixed['PublishTime'];
                if (isset($mixed['RegId']))
                    $this->_regId = $mixed['RegId'];
                if (isset($mixed['RegionId']))
                    $this->_regionId = $mixed['RegionId'];
                if (isset($mixed['RegionName']))
                    $this->_regionName = $mixed['RegionName'];
                if (isset($mixed['ValidFrom']))
                    $this->_validFrom = $mixed['ValidFrom'];
                if (isset($mixed['ValidTo']))
                    $this->_validTo = $mixed['ValidTo'];
            }
        }
    }

    /**
     * Factory method
     *
     * @param mixed $json JSON array or object
     *
     * @return AvalancheWarningSimple
     */
    public static function fromJson($json)
    {
        return new self($json);
    }

    /**
     * Gets the value of _dangerLevel.
     *
     * @return mixed
     */
    public function getDangerLevel()
    {
        return $this->_dangerLevel;
    }

    /**
     * Gets the value of _mainText.
     *
     * @return string
     */
    public function getMainText()
    {
        return $this->_mainText;
    }

    /**
     * Gets the value of _nextWarningTime.
     *
     * @return string
     */
    public function getNextWarningTime()
    {
        return $this->_nextWarningTime;
    }

    /**
     * Gets the value of _publishTime.
     *
     * @return string
     */
    public function getPublishTime()
    {
        return $this->_publishTime;
    }

    /**
     * Gets the value of _regId.
     *
     * @return int
     */
    public function getRegId()
    {
        return $this->_regId;
    }

    /**
     * Gets the value of _regionId.
     *
     * @return int
     */
    public function getRegionId()
    {
        return $this->_regionId;
    }

    /**
     * Gets the value of _regionName.
     *
     * @return string
     */
    public function getRegionName()
    {
        return $this->_regionName;
    }

    /**
     * Gets the value of _validFrom.
     *
     * @return string
     */
    public function getValidFrom()
    {
        return $this->_validFrom;
    }

    /**
     * Gets the value of _validTo.
     *
     * @return string
     */
    public function getValidTo()
    {
        return $this->_validTo;
    }
}
