<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * hte_bordereau_interdepository
 *
 * @ORM\Table(name="hte_bordereau_interdepository")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\hte_bordereau_interdepositoryRepository")
 */
class Hte_bordereau_interdepository
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
     * @ORM\Column(name="depository_src_id", type="integer")
     */
    private $depositorySrcId;

    /**
     * @var int
     *
     * @ORM\Column(name="depository_dest_id", type="integer")
     */
    private $depositoryDestId;

    /**
     * @var string
     *
     * @ORM\Column(name="affected_to", type="string", length=255)
     */
    private $affectedTo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="predicted_date", type="date")
     */
    private $predictedDate;

    /**
     * @var int
     *
     * @ORM\Column(name="created_by", type="integer")
     */
    private $createdBy;

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
     * @var string
     *
     * @ORM\Column(name="updated_by", type="string", length=255)
     */
    private $updatedBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pickedup_at", type="datetime")
     */
    private $pickedupAt;

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
     * @var string
     *
     * @ORM\Column(name="reception_signature", type="string", length=255)
     */
    private $receptionSignature;


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
     * @return hte_bordereau_interdepository
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
     * Set depositorySrcId
     *
     * @param integer $depositorySrcId
     *
     * @return hte_bordereau_interdepository
     */
    public function setDepositorySrcId($depositorySrcId)
    {
        $this->depositorySrcId = $depositorySrcId;

        return $this;
    }

    /**
     * Get depositorySrcId
     *
     * @return int
     */
    public function getDepositorySrcId()
    {
        return $this->depositorySrcId;
    }

    /**
     * Set depositoryDestId
     *
     * @param integer $depositoryDestId
     *
     * @return hte_bordereau_interdepository
     */
    public function setDepositoryDestId($depositoryDestId)
    {
        $this->depositoryDestId = $depositoryDestId;

        return $this;
    }

    /**
     * Get depositoryDestId
     *
     * @return int
     */
    public function getDepositoryDestId()
    {
        return $this->depositoryDestId;
    }

    /**
     * Set affectedTo
     *
     * @param string $affectedTo
     *
     * @return hte_bordereau_interdepository
     */
    public function setAffectedTo($affectedTo)
    {
        $this->affectedTo = $affectedTo;

        return $this;
    }

    /**
     * Get affectedTo
     *
     * @return string
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
     * @return hte_bordereau_interdepository
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
     * Set createdBy
     *
     * @param integer $createdBy
     *
     * @return hte_bordereau_interdepository
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return hte_bordereau_interdepository
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
     * @return hte_bordereau_interdepository
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
     * Set updatedBy
     *
     * @param string $updatedBy
     *
     * @return hte_bordereau_interdepository
     */
    public function setUpdatedBy($updatedBy)
    {
        $this->updatedBy = $updatedBy;

        return $this;
    }

    /**
     * Get updatedBy
     *
     * @return string
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }

    /**
     * Set pickedupAt
     *
     * @param \DateTime $pickedupAt
     *
     * @return hte_bordereau_interdepository
     */
    public function setPickedupAt($pickedupAt)
    {
        $this->pickedupAt = $pickedupAt;

        return $this;
    }

    /**
     * Get pickedupAt
     *
     * @return \DateTime
     */
    public function getPickedupAt()
    {
        return $this->pickedupAt;
    }

    /**
     * Set statusId
     *
     * @param integer $statusId
     *
     * @return hte_bordereau_interdepository
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
     * @return hte_bordereau_interdepository
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
     * @return hte_bordereau_interdepository
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
     * Set receptionSignature
     *
     * @param string $receptionSignature
     *
     * @return hte_bordereau_interdepository
     */
    public function setReceptionSignature($receptionSignature)
    {
        $this->receptionSignature = $receptionSignature;

        return $this;
    }

    /**
     * Get receptionSignature
     *
     * @return string
     */
    public function getReceptionSignature()
    {
        return $this->receptionSignature;
    }
}

