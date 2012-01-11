<?php
/* vim: set expandtab tabstop=4 shiftwidth=4: */
namespace Egulias\ProvincesBundle\Entity;

/**
 *
 **/
class SpainRegion
{

    /**
     * @var array $regions
     */
    protected $regions;
    protected $id = NULL;
    protected $province;


    /**
     * Maps Regions to provinces
     */
    public function __construct()
    {
        $this->regions = array(
            1   => array('name' => 'Andalucia', array(4,11,14,18,21,23,29,41)),
            2   => array('name' => 'Aragón', array(22,44,50)),
            3   => array('name' => 'Canarias', array(35,38)),
            4   => array('name' => 'Cantabria', array(39)),
            5   => array('name' => 'Castilla y León',  array(5,9,24,34,37,40,42,47,49)),
            6   => array('name' => 'Castilla-La Mancha',  array(2,13,16,19,45)),
            7   => array('name' => 'Cataluña',  array(8,17,25,43)),
            8   => array('name' => 'Ceuta',  array(51)),
            9   => array('name' => 'Comunidad de Madrid',  array(28)),
            10  => array('name' => 'Comunidad Valenciana',  array(3,12,46)),
            11  => array('name' => 'Extremadura',  array(6,10)),
            12  => array('name' => 'Galicia',  array(15,27,32,36)),
            13  => array('name' => 'Islas Baleares',  array(7)),
            14  => array('name' => 'La Rioja',  array(26)),
            15  => array('name' => 'Melilla',  array(52)),
            16  => array('name' => 'Navarra',  array(31)),
            17  => array('name' => 'Pais Vasco',  array(1,20,48)),
            18  => array('name' => 'Principado de Asturias', array(33)),
            19  => array('name' => 'Región de Murcia', array(30))
        );
    }


    public function getRegions()
    {
        return $this->regions;
    }

    public function setProvince($province)
    {
        $this->province = $province;
    }

    public function getProvince()
    {
        return $this->province;
    }

    public function getName()
    {
        return $this->regions[$this->getId()]['name'];
    }
    /**
     * Finds the ID via Province or sel id
     *
     * @author Eduardo Gulias <me@egulias.com>
     * @return int $id
     * @throws Exception $e
     */
    public function getId()
    {
        $validKey = NULL;
        //Lets find the region ID
        if (!is_null($this->id))return $this->id;

        //If it hasn't been defined, we search by province
        $prov = $this->getProvince();

        foreach ($this->regions as $key => $re) {
            if (array_search($prov, $re[0]) !== FALSE) {
                $validKey = $key;
                break;
            }
        }

        //We throw an exception if no valid key was found
        if (is_null($validKey)) {
            $e = new \Exception('No Valid Province or Region ID setted');
            throw $e;
        }
        return $validKey;
    }


    /**
     * Set a valid Region ID
     *
     * @author Eduardo Gulias <me@egulias.com>
     * @param int $id
     * @return void
     * @throws Exception
     */
    public function setRegionId($id)
    {
        if (array_key_exists($id, $this->regions)) {
            $this->id = $id;
        }
        else {
            $e = new \Exception('Invalid Region ID ' . $id);
            throw $e;
        }
    }

    public function getProvinces()
    {
        return $this->regions[$this->getId()][0];
    }

}
