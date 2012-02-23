<?php

/* vim: set expandtab tabstop=4 shiftwidth=4: */
namespace Egulias\ProvincesBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class to map spanish regions to their respectives provinces
 * This class does not have persistence
 *
 * @package EguliasProvincesBundle
 * @author Eduardo Gulias Davis
 */
abstract class Region
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
     *@var object $provinces
     *
     *@ORM\OneToMany(targetEntity="Province" mappedBy="region")
     */

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getProvinces()
    {
        return $this->provines;
    }
}
