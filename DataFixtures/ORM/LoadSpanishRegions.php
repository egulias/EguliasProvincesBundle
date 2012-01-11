<?php
/* vim: set expandtab tabstop=4 shiftwidth=4: */
namespace Egulias\ProvincesBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Egulias\ProvincesBundle\Entity\SpainRegion;
use Egulias\ProvincesBundle\Entity\Region;

class LoadSpanishRegions implements FixtureInterface
{
    public function load($manager)
    {
        $spain = new SpainRegion();
        $regions = $spain->getRegions();

        foreach ($regions as $id => $r) {
            $region = new Region();
            $region->setId($id);
            $region->setName($r['name']);
            $manager->persist($region);

        }
        $manager->flush();
    }
}
