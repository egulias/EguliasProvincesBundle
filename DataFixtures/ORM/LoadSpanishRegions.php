<?php
/* vim: set expandtab tabstop=4 shiftwidth=4: */
namespace Egulias\EguliasProvincesBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Egulias\EguliasProvincesBundle\Entity\SpainRegion;
use Egulias\EguliasProvincesBundle\Entity\Region;

class LoadSpanishRegions implements FixtureInterface
{
    public function load($manager)
    {
        $spain = new SpainRegion();
        $regions = $spain->getRegions();

        foreach($regions as $id => $r) {
            $region = new Region();
            $region->setId($id);
            $region->setName($r['name']);
            $manager->persist($region);

        }
        $manager->flush();
    }
}
