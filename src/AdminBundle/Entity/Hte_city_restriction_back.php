<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * hte_city_restriction_back
 *
 * @ORM\Table(name="hte_city_restriction_back")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\hte_city_restriction_backRepository")
 */
class Hte_city_restriction_back
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
     * @var int
     *
     * @ORM\Column(name="zip_code", type="integer")
     */
    private $zipCode;

    /**
     * @var string
     *
     * @ORM\Column(name="governorate", type="string", length=255)
     */
    private $governorate;

    /**
     * @var int
     *
     * @ORM\Column(name="city_id", type="integer")
     */
    private $cityId;

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
     * Set zipCode
     *
     * @param integer $zipCode
     *
     * @return hte_city_restriction_back
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * Get zipCode
     *
     * @return int
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * Set governorate
     *
     * @param string $governorate
     *
     * @return hte_city_restriction_back
     */
    public function setGovernorate($governorate)
    {
        $this->governorate = $governorate;

        return $this;
    }

    /**
     * Get governorate
     *
     * @return string
     */
    public function getGovernorate()
    {
        return $this->governorate;
    }

    /**
     * Set cityId
     *
     * @param integer $cityId
     *
     * @return hte_city_restriction_back
     */
    public function setCityId($cityId)
    {
        $this->cityId = $cityId;

        return $this;
    }

    /**
     * Get cityId
     *
     * @return int
     */
    public function getCityId()
    {
        return $this->cityId;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return hte_city_restriction_back
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
     * @return hte_city_restriction_back
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

