<?php
/* vim: set expandtab tabstop=4 shiftwidth=4: */
namespace Egulias\ProvincesBundle\Tests\Entity;

use
    Egulias\ProvincesBundle\Entity\SpainRegion,
    Egulias\ProvincesBundle\Entity\SpainProvince

;

class SpanishProvinceTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Test for region id of a province
     */
    public function testGetRegionId()
    {
        $prov = new SpainProvince();
        $prov->setId(1);

        //Testing province id 1 (Álava) to be in region id 17 (Pais Vasco)
        $this->assertEquals(17, $prov->getRegionId());
    }

    public function testGetProvinceName()
    {
        $prov = new SpainProvince();
        $prov->setId(1);

        //Testing that province with id 1 is Álava
        $this->assertEquals('Álava', $prov->getName());
    }

}
