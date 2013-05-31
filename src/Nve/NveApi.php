<?php
/**
 * This class is used to actually fetch any data from the NVE api. It can fetch via
 * cordinates or a region can be used.
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

use Nve\Models\AvalancheWarningSimple;
use Nve\Models\AvalancheWarningDetail;
use Nve\Constants\Url;
use Nve\Constants\Language;
use Nve\Constants\Detail;

class NveApi
{
    private $_language;

    /**
     * Creates a instance of the NveApi class
     *
     * @param int $language The {@link Nve\Language } we want our requests in. By default it is English.
     */
    public function __construct($language)
    {
        if ($language == null) {
            $this->_language = Language::ENGLISH;
        } else {
            $this->_language = $language;
        }
    }

    /**
     * Search for avalanche warnings by specifying a region id.
     *
     * @param string $region    The {@link Nve\Region } we want to get data from
     * @param string $detailLvl The level of {@link Nve\Detail} we want from our response
     * @param string $startDate The start date we want results from. Defaults to today
     * @param string $endDate   The end date we want results form. Defaults to today
     *
     * @return Nve\Models\AvalancheWarning[] An array of avalanche warnings
     */
    public function getByRegion($region, $detailLvl, $startDate = '', $endDate = '')
    {
        $url  = Url::BASEURL;
        $url .= sprintf(URL::REGION_URL, $detailLvl, $region, $this->_language);

        if (!empty($startDate)) {
            if (!empty($endDate)) {
                $url .= sprintf(Url::START_END_DATE_URL, $startDate, $endDate);
            } else {
                $url .= sprintf(Url::START_DATE_URL, $startDate);
            }
        }

        return $this->_serializeToArray($this->_callApi($url), $detailLvl);
    }

    /**
     * Search for avalanche warnings by specifying latitude and longitude cordinates.
     *
     * @param string $latitude  The latitude coordinate
     * @param string $longitude The longitude coordinate
     * @param string $detailLvl The level of {@link Nve\Detail } we want from our response
     * @param string $startDate The start date we want results from
     * @param string $endDate   The end date we want results form
     *
     * @return Nve\Models\AvalancheWarning[] An array of avalanche warnings
     */
    public function getByCordinates($latitude, $longitude, $detailLvl, $startDate = '', $endDate = '')
    {
        $url  = Url::BASEURL;
        $url .= sprintf(URL::COORD_URL, $detailLvl, $latitude, $longitude, $this->_language);

        if ($startDate !== null) {
            if ($endDate !== null) {
                $url .= sprintf(Url::START_END_DATE_URL, $startDate, $endDate);
            } else {
                $url .= sprintf(Url::START_DATE_URL, $startDate);
            }
        }

        return $this->_serializeToArray($this->_callApi($url), $detailLvl);
    }

    /**
     * List a summary of AvalancheWarnings for every region with the next 3 warning forecasts.
     *
     * @param string $detailLvl The level of detail we want
     *
     * @return Nve\Models\AvalancheWarning[] An array of avalanche warnings
     */
    public function getRegionSummary($detailLvl)
    {
        $url = Url::BASEURL;
        $url .= sprintf(URL::SUMMARY_URL, $detailLvl);

        $json = $this->_callApi($url);
        $regionArray = array();
        if(!isset($json))
            return $regionArray;
        foreach ($json as $region) {
            $tempArray = array();
            if(is_object($region))
                $tempArray = $this->_serializeToArray($region->AvalancheWarningList, $detailLvl);
            else if(is_array($region))
                $tempArray = $this->_serializeToArray($region['AvalancheWarningList'], $detailLvl);

            $regionArray = array_merge($regionArray, $tempArray);
        }
        return $regionArray;
    }

    /**
     * Gets the value of _language.
     *
     * @return int
     */
    public function getLanguage()
    {
        return $this->_language;
    }

    /**
     * Gets the string value of _language.
     *
     * @return string
     */
    public function getLanguageString()
    {
        return Language::$enums[$this->_language];
    }

    /**
     * Calls the Nve api and returns the response json
     *
     * @param string $url The URL of the NVE request
     *
     * @return mixed Json decoded data
     */
    private function _callApi($url)
    {
        $ch = curl_init($url);
        $options = array(
            CURLOPT_RETURNTRANSFER => true
            );

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);

        $data = json_decode($result, true);

        return $data;
    }

    /**
     * Serializes the data in the JSON array into an array of AvalancheWarning objects
     *
     * @param mixed  $json      JSON array
     * @param string $detailLvl The level of detail we want
     *
     * @return array
     */
    private function _serializeToArray($json, $detailLvl)
    {
        $warningArray = array();
        if(!isset($json))
            return $warningArray;
        foreach ($json as $item) {
            if ($detailLvl === Detail::SIMPLE)
                array_push($warningArray, AvalancheWarningSimple::fromJson($item));
            else
                array_push($warningArray, AvalancheWarningDetail::fromJson($item));
        }
        return $warningArray;
    }
}
