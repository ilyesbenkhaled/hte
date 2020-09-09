<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * hte_bordereau_expedition_archive
 *
 * @ORM\Table(name="hte_bordereau_expedition_archive")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\hte_bordereau_expedition_archiveRepository")
 */
class Hte_bordereau_expedition_archive
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
     * @ORM\Column(name="bordereau_id", type="integer")
     */
    private $bordereauId;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=255)
     */
    private $code;

    /**
     * @var int
     *
     * @ORM\Column(name="affected_to", type="integer")
     */
    private $affectedTo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="predicted_date", type="date")
     */
    private $predictedDate;

    /**
     * @var string
     *
     * @ORM\Column(name="region", type="string", length=255)
     */
    private $region;

    /**
     * @var int
     *
     * @ORM\Column(name="status_id", type="integer")
     */
    private $statusId;

    /**
     * @var string
     *
     * @ORM\Column(name="pickup_signature", type="string", length=255)
     */
    private $pickupSignature;

    /**
     * @var string
     *
     * @ORM\Column(name="dispatcher_signature", type="string", length=255)
     */
    private $dispatcherSignature;

    /**
     * @var int
     *
     * @ORM\Column(name="created_by", type="integer")
     */
    private $createdBy;

    /**
     * @var int
     *
     * @ORM\Column(name="updated_by", type="integer")
     */
    private $updatedBy;

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
     * @ORM\Column(name="depository_id", type="integer")
     */
    private $depositoryId;


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
     * Set bordereauId
     *
     * @param integer $bordereauId
     *
     * @return hte_bordereau_expedition_archive
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
     * Set code
     *
     * @param string $code
     *
     * @return hte_bordereau_expedition_archive
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
     * Set affectedTo
     *
     * @param integer $affectedTo
     *
     * @return hte_bordereau_expedition_archive
     */
    public function setAffectedTo($affectedTo)
    {
        $this->affectedTo = $affectedTo;

        return $this;
    }

    /**
     * Get affectedTo
     *
     * @return int
     */
    public function getAffectedTo()
    {
        return $this->affectedTo;
    }

    /**
     * Set predictedDate
     *
     * @param \DateTime $predictedDate
     *
     * @return hte_bordereau_expedition_archive
     */
    public function setPredictedDate($predictedDate)
    {
        $this->predictedDate = $predictedDate;

        return $this;
    }

    /**
     * Get predictedDate
     *
     * @return \DateTime
     */
    public function getPredictedDate()
    {
        return $this->predictedDate;
    }

    /**
     * Set region
     *
     * @param string $region
     *
     * @return hte_bordereau_expedition_archive
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set statusId
     *
     * @param integer $statusId
     *
     * @return hte_bordereau_expedition_archive
     */
    public function setStatusId($statusId)
    {
        $this->statusId = $statusId;

        return $this;
    }

    /**
     * Get statusId
     *
     * @return int
     */
    public function getStatusId()
    {
        return $this->statusId;
    }

    /**
     * Set pickupSignature
     *
     * @param string $pickupSignature
     *
     * @return hte_bordereau_expedition_archive
     */
    public function setPickupSignature($pickupSignature)
    {
        $this->pickupSignature = $pickupSignature;

        return $this;
    }

    /**
     * Get pickupSignature
     *
     * @return string
     */
    public function getPickupSignature()
    {
        return $this->pickupSignature;
    }

    /**
     * Set dispatcherSignature
     *
     * @param string $dispatcherSignature
     *
     * @return hte_bordereau_expedition_archive
     */
    public function setDispatcherSignature($dispatcherSignature)
    {
        $this->dispatcherSignature = $dispatcherSignature;

        return $this;
    }

    /**
     * Get dispatcherSignature
     *
     * @return string
     */
    public function getDispatcherSignature()
    {
        return $this->dispatcherSignature;
    }

    /**
     * Set createdBy
     *
     * @param integer $createdBy
     *
     * @return hte_bordereau_expedition_archive
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return int
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set updatedBy
     *
     * @param integer $updatedBy
     *
     * @return hte_bordereau_expedition_archive
     */
    public function setUpdatedBy($updatedBy)
    {
        $this->updatedBy = $updatedBy;

        return $this;
    }

    /**
     * Get updatedBy
     *
     * @return int
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return hte_bordereau_expedition_archive
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
     * @return hte_bordereau_expedition_archive
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
     * Set depositoryId
     *
     * @param integer $depositoryId
     *
     * @return hte_bordereau_expedition_archive
     */
    public function setDepositoryId($depositoryId)
    {
        $this->depositoryId = $depositoryId;

        return $this;
    }

    /**
     * Get depositoryId
     *
     * @return int
     */
    public function getDepositoryId()
    {
        return $this->depositoryId;
    }
}

