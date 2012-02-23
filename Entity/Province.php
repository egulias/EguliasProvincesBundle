<?php

/* vim: set expandtab tabstop=4 shiftwidth=4: */
namespace Egulias\ProvincesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Egulias\ProvincesBundle\Model\Province as BaseProvince;

/**
 * Egulias\ProvinceBundle
 *
 * @ORM\Table(name="province")
 * @ORM\Entity
 */
class Province extends BaseProvince
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
