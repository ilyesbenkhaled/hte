<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * hte_delivery_pricing
 *
 * @ORM\Table(name="hte_delivery_pricing")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\hte_delivery_pricingRepository")
 */
class Hte_delivery_pricing
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
     * @ORM\Column(name="labl", type="string", length=255)
     */
    private $labl;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=255)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="weight_min", type="string", length=255)
     */
    private $weightMin;

    /**
     * @var string
     *
     * @ORM\Column(name="weight_max", type="string", length=255)
     */
    private $weightMax;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime")
     */
    private $updatedAt;


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
     * Set labl
     *
     * @param string $labl
     *
     * @return hte_delivery_pricing
     */
    public function setLabl($labl)
    {
        $this->labl = $labl;

        return $this;
    }

    /**
     * Get labl
     *
     * @return string
     */
    public function getLabl()
    {
        return $this->labl;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return hte_delivery_pricing
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
     * Set weightMin
     *
     * @param string $weightMin
     *
     * @return hte_delivery_pricing
     */
    public function setWeightMin($weightMin)
    {
        $this->weightMin = $weightMin;

        return $this;
    }

    /**
     * Get weightMin
     *
     * @return string
     */
    public function getWeightMin()
    {
        return $this->weightMin;
    }

    /**
     * Set weightMax
     *
     * @param string $weightMax
     *
     * @return hte_delivery_pricing
     */
    public function setWeightMax($weightMax)
    {
        $this->weightMax = $weightMax;

        return $this;
    }

    /**
     * Get weightMax
     *
     * @return string
     */
    public function getWeightMax()
    {
        return $this->weightMax;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return hte_delivery_pricing
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return hte_delivery_pricing
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}

