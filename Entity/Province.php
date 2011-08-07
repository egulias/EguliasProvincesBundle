<?php

/* vim: set expandtab tabstop=4 shiftwidth=4: */
namespace Egulias\EguliasProvincesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Egulias\EguliasProvinceBundle
 *
 * @ORM\Table(name="province")
 * @ORM\Entity
 */
class Province
{
    /**
     * @var integer $id
     *
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     *@ORM\ManyToOne(targetEntity="Region", inversedBy="provinces")
     *
     */
    private $region;

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
      return $this->name;
    }

    /**
     * Set id
     *
     * @param integer $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
      return $this->id;
    }


    public function setRegion($region)
    {
        $this->region = $region;
    }

    public function getRegion()
    {
        return $this->region;
    }

}
