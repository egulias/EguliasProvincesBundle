<?php

/* vim: set expandtab tabstop=4 shiftwidth=4: */
namespace Egulias\ProvincesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Egulias\ProvincesBundle\Model\Region as BaseRegion;

/**
 * Class to map spanish regions to their respectives provinces
 * This class does not have persistence
 *
 * @author Eduardo Gulias Davis
 * @ORM\Table(name="region")
 * @ORM\Entity
 */
class Region extends BaseRegion
{

    /**
     * @var integer $id
     *
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

}
