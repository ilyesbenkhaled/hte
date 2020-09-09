<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * hte_expedition_package_history
 *
 * @ORM\Table(name="hte_expedition_package_history")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\hte_expedition_package_historyRepository")
 */
class Hte_expedition_package_history
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
     * @ORM\Column(name="original_created_at", type="datetime")
     */
    private $originalCreatedAt;

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
     * Set packageId
     *
     * @param integer $packageId
     *
     * @return hte_expedition_package_history
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
     * @return hte_expedition_package_history
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
     * Set originalCreatedAt
     *
     * @param \DateTime $originalCreatedAt
     *
     * @return hte_expedition_package_history
     */
    public function setOriginalCreatedAt($originalCreatedAt)
    {
        $this->originalCreatedAt = $originalCreatedAt;

        return $this;
    }

    /**
     * Get originalCreatedAt
     *
     * @return \DateTime
     */
    public function getOriginalCreatedAt()
    {
        return $this->originalCreatedAt;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return hte_expedition_package_history
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
     * @return hte_expedition_package_history
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

