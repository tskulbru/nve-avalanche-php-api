<?php
/**
 * Test class for AvalancheWarningSimple
 *
 * @category  Test
 * @package   Nve
 * @author    Torstein S. Skulbru <serrghi@gmail.com>
 * @copyright 2013 Torstein S. Skulbru
 * @license   http://opensource.org/licenses/BSD-2-Clause The BSD 2-Clause License
 * @version   0.1
 * @link      http://www.stubit.no
 */
namespace Nve\Test\Models;

use Nve\NveApi;
use Nve\Constants\Language;
use Nve\Constants\Region;
use Nve\Constants\Detail;
class AvalancheWarningSimpleTest extends \PHPUnit_Framework_TestCase
{
    protected $nveApi;
    protected $warningArray;
    protected $warning;

    /**
     * Initial setup
     *
     * @return void
     */
    protected function setUp()
    {
        $this->nveApi = new NveApi(Language::ENGLISH);
        $this->warningArray = $this->nveApi->getByRegion(Region::VOSS, Detail::SIMPLE);
        if (sizeof($this->warningArray) > 0) {
            $this->warning = $this->warningArray[0];
        } else {
            $this->fail();
        }

    }

    /**
     * Test to see if we have the correct instance.
     *
     * @return void
     */
    public function testAvalancheWarningType()
    {
        // Since AvalancheWarningSimple is a parent class of AvalancheWarningDetail we need to check
        // for properties instead. Simple detail doesnt have an array of avalancheproblems.
        $this->assertThat(
            $this->warning,
            $this->logicalNot(
                $this->classHasAttribute('_avalancheProblems')
            ),
            'Not an instance of AvalancheWarningSimple'
        );
    }
}
