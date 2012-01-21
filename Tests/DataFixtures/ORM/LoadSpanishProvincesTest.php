<?php
/* vim: set expandtab tabstop=4 shiftwidth=4: */
namespace Egulias\ProvincesBundle\Tests\DataFixtures\ORM;

use
    Egulias\ProvincesBundle\DataFixtures\ORM\LoadSpanishProvinces,
    Egulias\ProvincesBundle\Entity\SpainRegion,
    Egulias\ProvincesBundle\Entity\SpainProvince,
    Egulias\ProvincesBundle\Entity\Province
;

class LoadSpanishProvincesTest extends \PHPUnit_Framework_TestCase
{

    public function testFixturesLoad()
    {
        $emMock = $this->getMockBuilder('Doctrine\ORM\EntityManager')
                    ->disableOriginalConstructor()
                    ->setMethods(array('getRepository', 'findOneBy','persist', 'flush'))
                    ->getMock();

        $emMock->expects($this->any())
            ->method('getRepository')
            ->with($this->equalTo('EguliasProvincesBundle:Region'))
            ->will($this->returnSelf());

        $emMock->expects($this->any())
            ->method('findOneBy')
            ->will($this->returnValue(new SpainRegion()));

        $emMock->expects($this->atLeastOnce())
            ->method('persist')
            ->will($this->returnValue(null));

        $emMock->expects($this->atLeastOnce())
            ->method('flush')
            ->will($this->returnValue(null));


        $fixtures = new LoadSpanishProvinces();
        $fixtures->load($emMock);

    }
}
