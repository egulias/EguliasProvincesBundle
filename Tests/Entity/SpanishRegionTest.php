<?php
/* vim: set expandtab tabstop=4 shiftwidth=4: */
namespace Egulias\ProvincesBundle\Tests\Entity;

use Egulias\ProvincesBundle\Model\DataFixtures\ORM\SpainRegion;
use Egulias\ProvincesBundle\Model\DataFixtures\ORM\SpainProvince;

class SpanishRegionTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Test for region name
     */
    public function testGetRegions()
    {
        $re = new SpainRegion();
        $re->setRegionId(1);

        $this->assertEquals('Andalucia', $re->getName());
    }
    /**
     * Test for retrieving the Region ID upon province ID
     */
    public function testGetId()
    {
        $re = new SpainRegion();
        //Set Province as Cordoba
        $spProvince = new SpainProvince();
        $spProvince->setId(14);
        $re->setProvince($spProvince);
        //Testing for Province id 14 (Cordoba) to give back RegionId 1 (Andalucia)
        $this->assertEquals(1, $re->getId());
    }

    /**
     * Test for retrieving the Provinces that copose a Region
     */
    public function testCompositeProvinces()
    {
        $re = new SpainRegion();
        //Set Region as Andalucia
        $re->setRegionId(1);
        //Testing for Province id 14 (Cordoba) to be inside provinces array
        $this->assertContains(14, $re->getProvinces());
    }

    /**
     * Test for a province to belong to the same region as other
     */
    public function testBrotherProvinces()
    {
        $re = new SpainRegion();
        //Set Province to Cordoba
        $spProvince = new SpainProvince();
        $spProvince->setId(14);
        $re->setProvince($spProvince);
        //Testing for Province id 11 (Cadiz) to be inside provinces array
        $this->assertContains(11, $re->getProvinces());

    }

}
