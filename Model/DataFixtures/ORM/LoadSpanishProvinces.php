<?php
/* vim: set expandtab tabstop=4 shiftwidth=4: */
namespace Egulias\ProvincesBundle\Model\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Egulias\ProvincesBundle\Entity\SpainProvince;
use Egulias\ProvincesBundle\Entity\Province;

class LoadSpanishProvinces implements FixtureInterface
{
    public function load($manager)
    {
        $sp = new SpainProvince();
        $provinces = $sp->getProvinces();

        foreach ($provinces as $id => $r) {
            $sp->setId($id);
            $region = $manager->getRepository('EguliasProvincesBundle:Region')
                        ->findOneBy(array('id' => $sp->getRegionId()));

            $province = new Province();
            $province->setId($id);
            $province->setName($sp->getName());
            $province->setRegion($region);
            $manager->persist($province);

        }
        $manager->flush();
    }
}
