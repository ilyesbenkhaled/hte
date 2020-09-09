<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * hte_package_bordereau_etat
 *
 * @ORM\Table(name="hte_package_bordereau_etat")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\hte_package_bordereau_etatRepository")
 */
class Hte_package_bordereau_etat
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=255)
     */
    private $code;

    /**
     * @var int
     *
     * @ORM\Column(name="etat_id", type="integer")
     */
    private $etatId;

    /**
     * @var int
     *
     * @ORM\Column(name="package_id", type="integer")
     */
    private $packageId;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return hte_package_bordereau_etat
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set etatId
     *
     * @param integer $etatId
     *
     * @return hte_package_bordereau_etat
     */
    public function setEtatId($etatId)
    {
        $this->etatId = $etatId;

        return $this;
    }

    /**
     * Get etatId
     *
     * @return int
     */
    public function getEtatId()
    {
        return $this->etatId;
    }

    /**
     * Set packageId
     *
     * @param integer $packageId
     *
     * @return hte_package_bordereau_etat
     */
    public function setPackageId($packageId)
    {
        $this->packageId = $packageId;

        return $this;
    }

    /**
     * Get packageId
     *
     * @return int
     */
    public function getPackageId()
    {
        return $this->packageId;
    }
}

