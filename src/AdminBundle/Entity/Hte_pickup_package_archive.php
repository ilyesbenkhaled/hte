<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * hte_pickup_package_archive
 *
 * @ORM\Table(name="hte_pickup_package_archive")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\hte_pickup_package_archiveRepository")
 */
class hte_pickup_package_archive
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
     * @ORM\Column(name="package_id", type="integer")
     */
    private $packageId;

    /**
     * @var int
     *
     * @ORM\Column(name="bordereau_id", type="integer")
     */
    private $bordereauId;

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
     * @var int
     *
     * @ORM\Column(name="active", type="integer")
     */
    private $active;


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
     * Set packageId
     *
     * @param integer $packageId
     *
     * @return hte_pickup_package_archive
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

    /**
     * Set bordereauId
     *
     * @param integer $bordereauId
     *
     * @return hte_pickup_package_archive
     */
    public function setBordereauId($bordereauId)
    {
        $this->bordereauId = $bordereauId;

        return $this;
    }

    /**
     * Get bordereauId
     *
     * @return int
     */
    public function getBordereauId()
    {
        return $this->bordereauId;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return hte_pickup_package_archive
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
     * @return hte_pickup_package_archive
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

    /**
     * Set active
     *
     * @param integer $active
     *
     * @return hte_pickup_package_archive
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return int
     */
    public function getActive()
    {
        return $this->active;
    }
}

