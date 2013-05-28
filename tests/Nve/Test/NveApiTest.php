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
namespace Nve\Test;

use Nve\NveApi;
use Nve\Region;
use Nve\Detail;
use Nve\Language;

/**
 * Simple autoloader.
 *
 * @param string $class The class we want to load.
 *
 * @return void
 */
class NveApiTest extends \PHPUnit_Framework_TestCase
{
    protected $nveApi;

    /**
     * Initial setup
     *
     * @return void
     */
    protected function setUp()
    {
        $this->nveApi = new NveApi(Language::ENGLISH);
    }

    /**
     * Check that we actually get a avalanchewarning array returned.
     *
     * @return void
     */
    public function testGetByRegionNotEmpty()
    {
        $this->warning = $this->nveApi->getByRegion(Region::VOSS, Detail::DETAIL);
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
            $regionId = Region::VOSS;

            $this->warning = $this->nveApi->getByRegion($regionId, Detail::DETAIL);
            $this->assertSame(Region::$enums[$regionId], $this->warning[0]->getRegionName());
        } catch (Exception $e) {
            $this->fail();
        }
    }
}
