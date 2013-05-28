<?php
/**
 * This class defines the URL constants used by the api.
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

abstract class Url
{
    const BASEURL            = "http://api01.nve.no/hydrology/forecast/avalanche/v1.0.0/api/";
    const REGION_URL         = "AvalancheWarningByRegion/%s/%s/%s";// {details}/{region}/{language}
    const COORD_URL          = "AvalancheWarningByCoordinates/%s/%s/%s/%s"; // {details}/{latitude}/{longitude}/{language}
    const START_END_DATE_URL = "/%s/%s"; // {startdate}/{enddate}
    const START_DATE_URL     = "/%s";
    const SUMMARY_URL        = "%s/%s"; // {method}/{details}
    const SUMMARY            = "RegionSummary";
}
