<?php
/* vim: set expandtab tabstop=4 shiftwidth=4: */
namespace Egulias\ProvincesBundle\Tests\Entity;

class ProvinceTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Test for region id of a province
     */
    public function testNameAndId()
    {
        $mock = $this->getMockForAbstractClass('Egulias\ProvincesBundle\Model\Province');
        $mock->setName('Madrid');
        $mock->setId(1);

        //Testing that province with id 1 is Álava
        $this->assertEquals(1, $mock->getId());
        $this->assertEquals('Madrid', $mock->getName());
    }

    public function testRegion()
    {
        $mock = $this->getMockForAbstractClass('Egulias\ProvincesBundle\Model\Province');
        $mRegion = $this->getMockForAbstractClass('Egulias\ProvincesBundle\Model\Region');
        $mock->setRegion($mRegion);
        $this->assertEquals($mRegion, $mock->getRegion());
        $this->assertInstanceOf('Egulias\ProvincesBundle\Model\Region', $mock->getRegion());

    }

}

