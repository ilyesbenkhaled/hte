<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * hte_package_history
 *
 * @ORM\Table(name="hte_package_history")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\hte_package_historyRepository")
 */
class Hte_package_history
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
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=255)
     */
    private $code;

    /**
     * @var float
     *
     * @ORM\Column(name="weight_c", type="float")
     */
    private $weightC;

    /**
     * @var float
     *
     * @ORM\Column(name="weight_a", type="float")
     */
    private $weightA;

    /**
     * @var float
     *
     * @ORM\Column(name="height", type="float")
     */
    private $height;

    /**
     * @var float
     *
     * @ORM\Column(name="width", type="float")
     */
    private $width;

    /**
     * @var float
     *
     * @ORM\Column(name="length", type="float")
     */
    private $length;

    /**
     * @var float
     *
     * @ORM\Column(name="cr_bt", type="float")
     */
    private $crBt;

    /**
     * @var float
     *
     * @ORM\Column(name="cr_bt_a", type="float")
     */
    private $crBtA;

    /**
     * @var string
     *
     * @ORM\Column(name="delivery_address", type="string", length=255)
     */
    private $deliveryAddress;

    /**
     * @var int
     *
     * @ORM\Column(name="complete", type="integer")
     */
    private $complete;

    /**
     * @var string
     *
     * @ORM\Column(name="external_ref", type="string", length=255)
     */
    private $externalRef;

    /**
     * @var string
     *
     * @ORM\Column(name="url_update", type="string", length=255)
     */
    private $urlUpdate;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_name", type="string", length=255)
     */
    private $contactName;

    /**
     * @var int
     *
     * @ORM\Column(name="contact_phone", type="integer")
     */
    private $contactPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_mail", type="string", length=255)
     */
    private $contactMail;

    /**
     * @var string
     *
     * @ORM\Column(name="decription", type="string", length=255)
     */
    private $decription;

    /**
     * @var string
     *
     * @ORM\Column(name="package_to_change", type="string", length=255)
     */
    private $packageToChange;

    /**
     * @var int
     *
     * @ORM\Column(name="to_change", type="integer")
     */
    private $toChange;

    /**
     * @var int
     *
     * @ORM\Column(name="paid", type="integer")
     */
    private $paid;

    /**
     * @var int
     *
     * @ORM\Column(name="versed", type="integer")
     */
    private $versed;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="versed_at", type="datetime")
     */
    private $versedAt;

    /**
     * @var float
     *
     * @ORM\Column(name="chec", type="float")
     */
    private $chec;

    /**
     * @var float
     *
     * @ORM\Column(name="cach", type="float")
     */
    private $cach;

    /**
     * @var string
     *
     * @ORM\Column(name="check_number", type="string", length=255)
     */
    private $checkNumber;

    /**
     * @var int
     *
     * @ORM\Column(name="client_id", type="integer")
     */
    private $clientId;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer")
     */
    private $userId;

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
     * @ORM\Column(name="status_id", type="integer")
     */
    private $statusId;

    /**
     * @var int
     *
     * @ORM\Column(name="updated_by", type="integer")
     */
    private $updatedBy;

    /**
     * @var string
     *
     * @ORM\Column(name="reception_signature", type="string", length=255)
     */
    private $receptionSignature;

    /**
     * @var string
     *
     * @ORM\Column(name="gouvernorat", type="string", length=255)
     */
    private $gouvernorat;

    /**
     * @var int
     *
     * @ORM\Column(name="invoiced", type="integer")
     */
    private $invoiced;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="paid_at", type="datetime")
     */
    private $paidAt;

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
     * Set packageId
     *
     * @param integer $packageId
     *
     * @return hte_package_history
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
     * Set code
     *
     * @param string $code
     *
     * @return hte_package_history
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
     * Set weightC
     *
     * @param float $weightC
     *
     * @return hte_package_history
     */
    public function setWeightC($weightC)
    {
        $this->weightC = $weightC;

        return $this;
    }

    /**
     * Get weightC
     *
     * @return float
     */
    public function getWeightC()
    {
        return $this->weightC;
    }

    /**
     * Set weightA
     *
     * @param float $weightA
     *
     * @return hte_package_history
     */
    public function setWeightA($weightA)
    {
        $this->weightA = $weightA;

        return $this;
    }

    /**
     * Get weightA
     *
     * @return float
     */
    public function getWeightA()
    {
        return $this->weightA;
    }

    /**
     * Set height
     *
     * @param float $height
     *
     * @return hte_package_history
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height
     *
     * @return float
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set width
     *
     * @param float $width
     *
     * @return hte_package_history
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get width
     *
     * @return float
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set length
     *
     * @param float $length
     *
     * @return hte_package_history
     */
    public function setLength($length)
    {
        $this->length = $length;

        return $this;
    }

    /**
     * Get length
     *
     * @return float
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Set crBt
     *
     * @param float $crBt
     *
     * @return hte_package_history
     */
    public function setCrBt($crBt)
    {
        $this->crBt = $crBt;

        return $this;
    }

    /**
     * Get crBt
     *
     * @return float
     */
    public function getCrBt()
    {
        return $this->crBt;
    }

    /**
     * Set crBtA
     *
     * @param float $crBtA
     *
     * @return hte_package_history
     */
    public function setCrBtA($crBtA)
    {
        $this->crBtA = $crBtA;

        return $this;
    }

    /**
     * Get crBtA
     *
     * @return float
     */
    public function getCrBtA()
    {
        return $this->crBtA;
    }

    /**
     * Set deliveryAddress
     *
     * @param string $deliveryAddress
     *
     * @return hte_package_history
     */
    public function setDeliveryAddress($deliveryAddress)
    {
        $this->deliveryAddress = $deliveryAddress;

        return $this;
    }

    /**
     * Get deliveryAddress
     *
     * @return string
     */
    public function getDeliveryAddress()
    {
        return $this->deliveryAddress;
    }

    /**
     * Set complete
     *
     * @param integer $complete
     *
     * @return hte_package_history
     */
    public function setComplete($complete)
    {
        $this->complete = $complete;

        return $this;
    }

    /**
     * Get complete
     *
     * @return int
     */
    public function getComplete()
    {
        return $this->complete;
    }

    /**
     * Set externalRef
     *
     * @param string $externalRef
     *
     * @return hte_package_history
     */
    public function setExternalRef($externalRef)
    {
        $this->externalRef = $externalRef;

        return $this;
    }

    /**
     * Get externalRef
     *
     * @return string
     */
    public function getExternalRef()
    {
        return $this->externalRef;
    }

    /**
     * Set urlUpdate
     *
     * @param string $urlUpdate
     *
     * @return hte_package_history
     */
    public function setUrlUpdate($urlUpdate)
    {
        $this->urlUpdate = $urlUpdate;

        return $this;
    }

    /**
     * Get urlUpdate
     *
     * @return string
     */
    public function getUrlUpdate()
    {
        return $this->urlUpdate;
    }

    /**
     * Set contactName
     *
     * @param string $contactName
     *
     * @return hte_package_history
     */
    public function setContactName($contactName)
    {
        $this->contactName = $contactName;

        return $this;
    }

    /**
     * Get contactName
     *
     * @return string
     */
    public function getContactName()
    {
        return $this->contactName;
    }

    /**
     * Set contactPhone
     *
     * @param integer $contactPhone
     *
     * @return hte_package_history
     */
    public function setContactPhone($contactPhone)
    {
        $this->contactPhone = $contactPhone;

        return $this;
    }

    /**
     * Get contactPhone
     *
     * @return int
     */
    public function getContactPhone()
    {
        return $this->contactPhone;
    }

    /**
     * Set contactMail
     *
     * @param string $contactMail
     *
     * @return hte_package_history
     */
    public function setContactMail($contactMail)
    {
        $this->contactMail = $contactMail;

        return $this;
    }

    /**
     * Get contactMail
     *
     * @return string
     */
    public function getContactMail()
    {
        return $this->contactMail;
    }

    /**
     * Set decription
     *
     * @param string $decription
     *
     * @return hte_package_history
     */
    public function setDecription($decription)
    {
        $this->decription = $decription;

        return $this;
    }

    /**
     * Get decription
     *
     * @return string
     */
    public function getDecription()
    {
        return $this->decription;
    }

    /**
     * Set packageToChange
     *
     * @param string $packageToChange
     *
     * @return hte_package_history
     */
    public function setPackageToChange($packageToChange)
    {
        $this->packageToChange = $packageToChange;

        return $this;
    }

    /**
     * Get packageToChange
     *
     * @return string
     */
    public function getPackageToChange()
    {
        return $this->packageToChange;
    }

    /**
     * Set toChange
     *
     * @param integer $toChange
     *
     * @return hte_package_history
     */
    public function setToChange($toChange)
    {
        $this->toChange = $toChange;

        return $this;
    }

    /**
     * Get toChange
     *
     * @return int
     */
    public function getToChange()
    {
        return $this->toChange;
    }

    /**
     * Set paid
     *
     * @param integer $paid
     *
     * @return hte_package_history
     */
    public function setPaid($paid)
    {
        $this->paid = $paid;

        return $this;
    }

    /**
     * Get paid
     *
     * @return int
     */
    public function getPaid()
    {
        return $this->paid;
    }

    /**
     * Set versed
     *
     * @param integer $versed
     *
     * @return hte_package_history
     */
    public function setVersed($versed)
    {
        $this->versed = $versed;

        return $this;
    }

    /**
     * Get versed
     *
     * @return int
     */
    public function getVersed()
    {
        return $this->versed;
    }

    /**
     * Set versedAt
     *
     * @param \DateTime $versedAt
     *
     * @return hte_package_history
     */
    public function setVersedAt($versedAt)
    {
        $this->versedAt = $versedAt;

        return $this;
    }

    /**
     * Get versedAt
     *
     * @return \DateTime
     */
    public function getVersedAt()
    {
        return $this->versedAt;
    }

    /**
     * Set chec
     *
     * @param float $chec
     *
     * @return hte_package_history
     */
    public function setChec($chec)
    {
        $this->chec = $chec;

        return $this;
    }

    /**
     * Get chec
     *
     * @return float
     */
    public function getChec()
    {
        return $this->chec;
    }

    /**
     * Set cach
     *
     * @param float $cach
     *
     * @return hte_package_history
     */
    public function setCach($cach)
    {
        $this->cach = $cach;

        return $this;
    }

    /**
     * Get cach
     *
     * @return float
     */
    public function getCach()
    {
        return $this->cach;
    }

    /**
     * Set checkNumber
     *
     * @param string $checkNumber
     *
     * @return hte_package_history
     */
    public function setCheckNumber($checkNumber)
    {
        $this->checkNumber = $checkNumber;

        return $this;
    }

    /**
     * Get checkNumber
     *
     * @return string
     */
    public function getCheckNumber()
    {
        return $this->checkNumber;
    }

    /**
     * Set clientId
     *
     * @param integer $clientId
     *
     * @return hte_package_history
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * Get clientId
     *
     * @return int
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return hte_package_history
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return hte_package_history
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
     * @return hte_package_history
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
     * Set statusId
     *
     * @param integer $statusId
     *
     * @return hte_package_history
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
     * Set updatedBy
     *
     * @param integer $updatedBy
     *
     * @return hte_package_history
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
     * Set receptionSignature
     *
     * @param string $receptionSignature
     *
     * @return hte_package_history
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

    /**
     * Set gouvernorat
     *
     * @param string $gouvernorat
     *
     * @return hte_package_history
     */
    public function setGouvernorat($gouvernorat)
    {
        $this->gouvernorat = $gouvernorat;

        return $this;
    }

    /**
     * Get gouvernorat
     *
     * @return string
     */
    public function getGouvernorat()
    {
        return $this->gouvernorat;
    }

    /**
     * Set invoiced
     *
     * @param integer $invoiced
     *
     * @return hte_package_history
     */
    public function setInvoiced($invoiced)
    {
        $this->invoiced = $invoiced;

        return $this;
    }

    /**
     * Get invoiced
     *
     * @return int
     */
    public function getInvoiced()
    {
        return $this->invoiced;
    }

    /**
     * Set paidAt
     *
     * @param \DateTime $paidAt
     *
     * @return hte_package_history
     */
    public function setPaidAt($paidAt)
    {
        $this->paidAt = $paidAt;

        return $this;
    }

    /**
     * Get paidAt
     *
     * @return \DateTime
     */
    public function getPaidAt()
    {
        return $this->paidAt;
    }

    /**
     * Set depositoryId
     *
     * @param integer $depositoryId
     *
     * @return hte_package_history
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

