<?php
/* vim: set expandtab tabstop=4 shiftwidth=4: */
namespace Egulias\ProvincesBundle\Tests\DataFixtures\ORM;

use
    Egulias\ProvincesBundle\DataFixtures\ORM\LoadSpanishRegions
;

class LoadSpanishRegionsTest extends \PHPUnit_Framework_TestCase
{

    public function testFixturesLoad()
    {
        $emMock = $this->getMockBuilder('Doctrine\ORM\EntityManager')
                    ->disableOriginalConstructor()
                    ->setMethods(array('persist', 'flush'))
                    ->getMock();

        $emMock->expects($this->atLeastOnce())
            ->method('persist')
            ->will($this->returnValue(null));

        $emMock->expects($this->atLeastOnce())
            ->method('flush')
            ->will($this->returnValue(null));


        $fixtures = new LoadSpanishRegions();
        $fixtures->load($emMock);

    }
}
