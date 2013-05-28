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
use Nve\Constants\Region;
use Nve\Constants\Detail;
use Nve\Constants\Language;

class NveApiTest extends \PHPUnit_Framework_TestCase
{
    protected $nveApi;
    protected $language;

    /**
     * Initial setup
     *
     * @return void
     */
    protected function setUp()
    {
        $this->language = Language::ENGLISH;
        $this->nveApi = new NveApi($this->language);
    }

    /**
     * Test fetching of avalanche warnings based on region id.
     * Check that we actually get a avalanchewarning array returned.
     *
     * @return void
     */
    public function testGetByRegion()
    {
        $warning = $this->nveApi->getByRegion(Region::VOSS, Detail::DETAIL);
        $this->assertGreaterThanOrEqual(1, sizeof($warning));
    }

    /**
     * Test fetching of avalanche warnings based on cordinates.
     * Check that we actually get a avalanchewarning array returned.
     *
     * @return void
     */
    public function testGetByCordinates()
    {
        // Region is Lyngsalpan
        $warning = $this->nveApi->getByCordinates("69.455819", "19.907227", Detail::DETAIL);
        $this->assertGreaterThanOrEqual(1, sizeof($warning));
    }

    /**
     * Test that the language string returned matches what was sent in.
     *
     * @return void
     */
    public function testGetLanguageString()
    {
        $this->assertSame(Language::$enums[$this->language], $this->nveApi->getLanguageString());
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
