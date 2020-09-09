<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Colis
 *
 * @ORM\Table(name="colis")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\ColisRepository")
 */
class Colis
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
     * @ORM\Column(name="name_colis", type="string", length=255)
     */
    private $nameColis;

    /**
     * @var string
     *
     * @ORM\Column(name="date_colis", type="string", length=255)
     */
    private $dateColis;

    /**
     * @var string
     *
     * @ORM\Column(name="name_livreur", type="string", length=255)
     */
    private $nameLivreur;


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
     * Set nameColis
     *
     * @param string $nameColis
     *
     * @return Colis
     */
    public function setNameColis($nameColis)
    {
        $this->nameColis = $nameColis;

        return $this;
    }

    /**
     * Get nameColis
     *
     * @return string
     */
    public function getNameColis()
    {
        return $this->nameColis;
    }

    /**
     * Set dateColis
     *
     * @param string $dateColis
     *
     * @return Colis
     */
    public function setDateColis($dateColis)
    {
        $this->dateColis = $dateColis;

        return $this;
    }

    /**
     * Get dateColis
     *
     * @return string
     */
    public function getDateColis()
    {
        return $this->dateColis;
    }

    /**
     * Set nameLivreur
     *
     * @param string $nameLivreur
     *
     * @return Colis
     */
    public function setNameLivreur($nameLivreur)
    {
        $this->nameLivreur = $nameLivreur;

        return $this;
    }

    /**
     * Get nameLivreur
     *
     * @return string
     */
    public function getNameLivreur()
    {
        return $this->nameLivreur;
    }
}

