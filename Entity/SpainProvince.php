<?php

/* vim: set expandtab tabstop=4 shiftwidth=4: */
namespace Egulias\EguliasProvincesBundle\Entity;

use Egulias\EguliasProvincesBundle\Entity\SpainRegion;

/**
 *
 */
class SpainProvince
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $name
     */
    private $name;


    public function __construct()
    {
        // code...
        $this->provinces = array(
            8=>'Barcelona',
            17=>'Girona',
            25=>'Lleida',
            43=>'Tarragona',
            28=>'Madrid',
            4=>'Almería',
            11=>'Cádiz',
            14=>'Córdoba',
            18=>'Granada',
            21=>'Huelva',
            23=>'Jaén',
            29=>'Málaga',
            41=>'Sevilla',
            3=>'Alicante',
            12=>'Castellón',
            46=>'Valencia',
            1=>'Álava',
            20=>'Guipúzcoa',
            48=>'Vizcaya',
            5=>'Ávila',
            9=>'Burgos',
            24=>'León',
            34=>'Palencia',
            37=>'Salamanca',
            40=>'Segovia',
            42=>'Soria',
            47=>'Valladolid',
            49=>'Zamora',
            15=>'A Coruña',
            27=>'Lugo',
            32=>'Ourense',
            36=>'Pontevedra',
            35=>'Las Palmas',
            38=>'Santa Cruz de Tenerife',
            2=>'Albacete',
            13=>'Ciudad Real',
            16=>'Cuenca',
            19=>'Guadalajara',
            45=>'Toledo',
            22=>'Huesca',
            44  =>'Teruel',
            50  =>'Zaragoza',
            30  =>'Murcia',
            7   =>'Illes Balears',
            33  =>'Asturias',
            31  =>'Navarra',
            6   =>'Badajoz',
            10  =>'Cáceres',
            39  =>'Cantabria',
            26  =>'La Rioja',
            51  =>'Ceuta',
            52  =>'Melilla',
        );
    }

    public function getProvinces()
    {
        return $this->provinces;
    }

    public function getName()
    {
      return $this->name;
    }

    public function getId()
    {
      return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    public function setId($id)
    {
        $this->id = $id;
        $this->setName($this->provinces[$id]);
    }
    /**
     * Maps a province id to a region id
     */
    public function getRegionId()
    {
        $re = new SpainRegion();
        $re->setProvince($this->getId());
        return $re->getId();
    }
}
