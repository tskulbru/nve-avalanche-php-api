<?php
/**
 * Test class for NveApi
 *
 * @category  Test
 * @package   Nve
 * @author    Torstein S. Skulbru <serrghi@gmail.com>
 * @copyright 2013 Torstein S. Skulbru
 * @license   http://opensource.org/licenses/BSD-2-Clause The BSD 2-Clause License
 * @version   0.1
 * @link      http://www.stubit.no
 */

/**
 * Simple autoloader.
 *
 * @param string $class The class we want to load.
 *
 * @return void
 */
require_once '../src/NveApi.php';
require_once '../src/Language.php';
require_once '../src/Region.php';
require_once '../src/Detail.php';
require_once '../src/Url.php';
require_once '../src/Url.php';
class NveApiTest extends PHPUnit_Framework_TestCase
{
    protected $nveApi;

    /**
     * Initial setup
     *
     * @return void
     */
    protected function setUp()
    {
        $this->nveApi = new Nve\NveApi(Nve\Language::ENGLISH);
    }

    /**
     * Check that we actually get a avalanchewarning array returned.
     *
     * @return void
     */
    public function testGetByRegionNotEmpty()
    {
        $this->warning = $this->nveApi->getByRegion(Nve\Region::VOSS, Nve\Detail::DETAIL);
        $this->assertGreaterThanOrEqual(1, sizeof($this->warning));
    }

    /**
     * Check that we actually get the correct region for the avalanchewarning.
     *
     * @return void
     */
    public function testGetByRegionVoss()
    {
        try {
            $regionId = Nve\Region::VOSS;

            $this->warning = $this->nveApi->getByRegion($regionId, Nve\Detail::DETAIL);
            $this->assertSame(Nve\Region::$enums[$regionId], $this->warning[0]->getRegionName());
        } catch (Exception $e) {
            $this->fail();
        }
    }
}
