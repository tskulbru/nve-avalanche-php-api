<?php
/**
 * Model class for a Avalanche Warning (Detailed).
 * This class is a representation of a detailed avalanche warning.
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

class AvalancheWarningDetail extends AvalancheWarningSimple
{
    private $_dangerLevelName;
    private $_utmZone;
    private $_utmEast;
    private $_utmNorth;
    private $_municipalityName;
    private $_author;
    private $_avalancheWarning;
    private $_validExpositions;
    private $_exposedHeight1;
    private $_exposedHeight2;
    private $_exposedHeightFill;
    private $_exposedClimateId;
    private $_exposedClimateName;
    private $_langKey;

    private $_avalancheProblems = array();

    /**
     * Constructor, requires a JSON array or object.
     *
     * @param mixed $mixed JSON array or object
     */
    public function __construct($mixed)
    {
        if (isset($mixed)) {
            parent::__construct($mixed);

            if (is_object($mixed)) {
                if (isset($mixed->DangerLevelName))
                    $this->_dangerLevelName = $mixed->DangerLevelName;
                if (isset($mixed->UtmZone))
                    $this->_utmZone = $mixed->UtmZone;
                if (isset($mixed->UtmEast))
                    $this->_utmEast = $mixed->UtmEast;
                if (isset($mixed->UtmNorth))
                    $this->_utmNorth = $mixed->UtmNorth;
                if (isset($mixed->MunicipalityName))
                    $this->_municipalityName = $mixed->MunicipalityName;
                if (isset($mixed->Author))
                    $this->_author = $mixed->Author;
                if (isset($mixed->AvalancheWarning))
                    $this->_avalancheWarning = $mixed->AvalancheWarning;
                if (isset($mixed->ValidExpositions))
                    $this->_validExpositions = $mixed->ValidExpositions;
                if (isset($mixed->ExposedHeight1))
                    $this->_exposedHeight1 = $mixed->ExposedHeight1;
                if (isset($mixed->ExposedHeight2))
                    $this->_exposedHeight2 = $mixed->ExposedHeight2;
                if (isset($mixed->ExposedHeightFill))
                    $this->_exposedHeightFill = $mixed->ExposedHeightFill;
                if (isset($mixed->ExposedClimateId))
                    $this->_exposedClimateId = $mixed->ExposedClimateId;
                if (isset($mixed->ExposedClimateName))
                    $this->_exposedClimateName = $mixed->ExposedClimateName;
                if (isset($mixed->LangKey))
                    $this->_langKey = $mixed->LangKey;
                if (isset($mixed->AvalancheProblems)) {
                    if (is_object($mixed->AvalancheProblems)) {
                        array_push($this->_avalancheProblems, AvalancheProblem::fromJson($mixed->AvalancheProblem));
                    } else if (is_array($mixed->AvalancheProblems)) {
                        foreach ($mixed->AvalancheProblems as $problem) {
                            array_push($this->_avalancheProblems, AvalancheProblem::fromJson($problem));
                        }
                    }
                }
            } else if (is_array($mixed)) {
                if (isset($mixed['DangerLevel']))
                    $this->dangerLevel = $mixed['DangerLevel'];
                 if (isset($mixed['DangerLevelName']))
                    $this->_dangerLevelName = $mixed['DangerLevelName'];
                if (isset($mixed['UtmZone']))
                    $this->_utmZone = $mixed['UtmZone'];
                if (isset($mixed['UtmEast']))
                    $this->_utmEast = $mixed['UtmEast'];
                if (isset($mixed['UtmNorth']))
                    $this->_utmNorth = $mixed['UtmNorth'];
                if (isset($mixed['MunicipalityName']))
                    $this->_municipalityName = $mixed['MunicipalityName'];
                if (isset($mixed['Author']))
                    $this->_author = $mixed['Author'];
                if (isset($mixed['AvalancheWarning']))
                    $this->_avalancheWarning = $mixed['AvalancheWarning'];
                if (isset($mixed['ValidExpositions']))
                    $this->_validExpositions = $mixed['ValidExpositions'];
                if (isset($mixed['ExposedHeight1']))
                    $this->_exposedHeight1 = $mixed['ExposedHeight1'];
                if (isset($mixed['ExposedHeight2']))
                    $this->_exposedHeight2 = $mixed['ExposedHeight2'];
                if (isset($mixed['ExposedHeightFill']))
                    $this->_exposedHeightFill = $mixed['ExposedHeightFill'];
                if (isset($mixed['ExposedClimateId']))
                    $this->_exposedClimateId = $mixed['ExposedClimateId'];
                if (isset($mixed['ExposedClimateName']))
                    $this->_exposedClimateName = $mixed['ExposedClimateName'];
                if (isset($mixed['LangKey']))
                    $this->_langKey = $mixed['LangKey'];
                if (isset($mixed['AvalancheProblems'])) {
                    if (is_object($mixed['AvalancheProblems'])) {
                        array_push($this->_avalancheProblems, AvalancheProblem::fromJson($mixed->AvalancheProblem));
                    } else if (is_array($mixed['AvalancheProblems'])) {
                        foreach ($mixed['AvalancheProblems'] as $problem) {
                            array_push($this->_avalancheProblems, AvalancheProblem::fromJson($problem));
                        }
                    }
                }
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
     * Gets the value of _dangerLevelName.
     *
     * @return string
     */
    public function getDangerLevelName()
    {
        return $this->_dangerLevelName;
    }

    /**
     * Gets the value of _utmZone.
     *
     * @return string
     */
    public function getUtmZone()
    {
        return $this->_utmZone;
    }

    /**
     * Gets the value of _utmEast.
     *
     * @return string
     */
    public function getUtmEast()
    {
        return $this->_utmEast;
    }

    /**
     * Gets the value of _utmNorth.
     *
     * @return string
     */
    public function getUtmNorth()
    {
        return $this->_utmNorth;
    }

    /**
     * Gets the value of _municipalityName.
     *
     * @return string
     */
    public function getMunicipalityName()
    {
        return $this->_municipalityName;
    }

    /**
     * Gets the value of _author.
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->_author;
    }

    /**
     * Gets the value of _avalancheWarning.
     *
     * @return string
     */
    public function getAvalancheWarning()
    {
        return $this->_avalancheWarning;
    }

    /**
     * Gets the value of _validExpositions.
     *
     * @return string
     */
    public function getValidExpositions()
    {
        return $this->_validExpositions;
    }

    /**
     * Gets the value of _exposedHeight1.
     *
     * @return int
     */
    public function getExposedHeight1()
    {
        return $this->_exposedHeight1;
    }

    /**
     * Gets the value of _exposedHeight2.
     *
     * @return int
     */
    public function getExposedHeight2()
    {
        return $this->_exposedHeight2;
    }

    /**
     * Gets the value of _exposedHeightFill.
     *
     * @return string
     */
    public function getExposedHeightFill()
    {
        return $this->_exposedHeightFill;
    }

    /**
     * Gets the value of _exposedClimateId.
     *
     * @return int
     */
    public function getExposedClimateId()
    {
        return $this->_exposedClimateId;
    }

    /**
     * Gets the value of _exposedClimateName.
     *
     * @return string
     */
    public function getExposedClimateName()
    {
        return $this->_exposedClimateName;
    }

    /**
     * Gets the value of _langKey.
     *
     * @return int
     */
    public function getLangKey()
    {
        return $this->_langKey;
    }

    /**
     * Gets the value of _avalancheProblems.
     *
     * @return array
     */
    public function getAvalancheProblems()
    {
        return $this->_avalancheProblems;
    }
}
