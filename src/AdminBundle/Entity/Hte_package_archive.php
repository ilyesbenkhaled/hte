<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * hte_package_archive
 *
 * @ORM\Table(name="hte_package_archive")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\hte_package_archiveRepository")
 */
class Hte_package_archive
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
     * @var string
     *
     * @ORM\Column(name="weight_c", type="string", length=255)
     */
    private $weightC;

    /**
     * @var string
     *
     * @ORM\Column(name="weight_a", type="string", length=255)
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
     * @var string
     *
     * @ORM\Column(name="cr_bt", type="string", length=255)
     */
    private $crBt;

    /**
     * @var string
     *
     * @ORM\Column(name="cr_bt_a", type="string", length=255)
     */
    private $crBtA;

    /**
     * @var string
     *
     * @ORM\Column(name="delivery_adress", type="string", length=255)
     */
    private $deliveryAdress;

    /**
     * @var string
     *
     * @ORM\Column(name="complete", type="string", length=255)
     */
    private $complete;

    /**
     * @var string
     *
     * @ORM\Column(name="externel_ref", type="string", length=255)
     */
    private $externelRef;

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
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="package_to_change", type="string", length=255)
     */
    private $packageToChange;

    /**
     * @var string
     *
     * @ORM\Column(name="to_change", type="string", length=255)
     */
    private $toChange;

    /**
     * @var string
     *
     * @ORM\Column(name="paid", type="string", length=255)
     */
    private $paid;

    /**
     * @var string
     *
     * @ORM\Column(name="versed", type="string", length=255)
     */
    private $versed;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="verset_at", type="datetime")
     */
    private $versetAt;

    /**
     * @var string
     *
     * @ORM\Column(name="chec", type="string", length=255)
     */
    private $chec;

    /**
     * @var string
     *
     * @ORM\Column(name="cash", type="string", length=255)
     */
    private $cash;

    /**
     * @var int
     *
     * @ORM\Column(name="check_number", type="integer")
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
     * @var string
     *
     * @ORM\Column(name="invoiced", type="string", length=255)
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
     * @return hte_package_archive
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
     * @return hte_package_archive
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
     * @param string $weightC
     *
     * @return hte_package_archive
     */
    public function setWeightC($weightC)
    {
        $this->weightC = $weightC;

        return $this;
    }

    /**
     * Get weightC
     *
     * @return string
     */
    public function getWeightC()
    {
        return $this->weightC;
    }

    /**
     * Set weightA
     *
     * @param string $weightA
     *
     * @return hte_package_archive
     */
    public function setWeightA($weightA)
    {
        $this->weightA = $weightA;

        return $this;
    }

    /**
     * Get weightA
     *
     * @return string
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
     * @return hte_package_archive
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
     * @return hte_package_archive
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
     * @return hte_package_archive
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
     * @param string $crBt
     *
     * @return hte_package_archive
     */
    public function setCrBt($crBt)
    {
        $this->crBt = $crBt;

        return $this;
    }

    /**
     * Get crBt
     *
     * @return string
     */
    public function getCrBt()
    {
        return $this->crBt;
    }

    /**
     * Set crBtA
     *
     * @param string $crBtA
     *
     * @return hte_package_archive
     */
    public function setCrBtA($crBtA)
    {
        $this->crBtA = $crBtA;

        return $this;
    }

    /**
     * Get crBtA
     *
     * @return string
     */
    public function getCrBtA()
    {
        return $this->crBtA;
    }

    /**
     * Set deliveryAdress
     *
     * @param string $deliveryAdress
     *
     * @return hte_package_archive
     */
    public function setDeliveryAdress($deliveryAdress)
    {
        $this->deliveryAdress = $deliveryAdress;

        return $this;
    }

    /**
     * Get deliveryAdress
     *
     * @return string
     */
    public function getDeliveryAdress()
    {
        return $this->deliveryAdress;
    }

    /**
     * Set complete
     *
     * @param string $complete
     *
     * @return hte_package_archive
     */
    public function setComplete($complete)
    {
        $this->complete = $complete;

        return $this;
    }

    /**
     * Get complete
     *
     * @return string
     */
    public function getComplete()
    {
        return $this->complete;
    }

    /**
     * Set externelRef
     *
     * @param string $externelRef
     *
     * @return hte_package_archive
     */
    public function setExternelRef($externelRef)
    {
        $this->externelRef = $externelRef;

        return $this;
    }

    /**
     * Get externelRef
     *
     * @return string
     */
    public function getExternelRef()
    {
        return $this->externelRef;
    }

    /**
     * Set urlUpdate
     *
     * @param string $urlUpdate
     *
     * @return hte_package_archive
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
     * @return hte_package_archive
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
     * @return hte_package_archive
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
     * @return hte_package_archive
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
     * Set description
     *
     * @param string $description
     *
     * @return hte_package_archive
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set packageToChange
     *
     * @param string $packageToChange
     *
     * @return hte_package_archive
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
     * @param string $toChange
     *
     * @return hte_package_archive
     */
    public function setToChange($toChange)
    {
        $this->toChange = $toChange;

        return $this;
    }

    /**
     * Get toChange
     *
     * @return string
     */
    public function getToChange()
    {
        return $this->toChange;
    }

    /**
     * Set paid
     *
     * @param string $paid
     *
     * @return hte_package_archive
     */
    public function setPaid($paid)
    {
        $this->paid = $paid;

        return $this;
    }

    /**
     * Get paid
     *
     * @return string
     */
    public function getPaid()
    {
        return $this->paid;
    }

    /**
     * Set versed
     *
     * @param string $versed
     *
     * @return hte_package_archive
     */
    public function setVersed($versed)
    {
        $this->versed = $versed;

        return $this;
    }

    /**
     * Get versed
     *
     * @return string
     */
    public function getVersed()
    {
        return $this->versed;
    }

    /**
     * Set versetAt
     *
     * @param \DateTime $versetAt
     *
     * @return hte_package_archive
     */
    public function setVersetAt($versetAt)
    {
        $this->versetAt = $versetAt;

        return $this;
    }

    /**
     * Get versetAt
     *
     * @return \DateTime
     */
    public function getVersetAt()
    {
        return $this->versetAt;
    }

    /**
     * Set chec
     *
     * @param string $chec
     *
     * @return hte_package_archive
     */
    public function setChec($chec)
    {
        $this->chec = $chec;

        return $this;
    }

    /**
     * Get chec
     *
     * @return string
     */
    public function getChec()
    {
        return $this->chec;
    }

    /**
     * Set cash
     *
     * @param string $cash
     *
     * @return hte_package_archive
     */
    public function setCash($cash)
    {
        $this->cash = $cash;

        return $this;
    }

    /**
     * Get cash
     *
     * @return string
     */
    public function getCash()
    {
        return $this->cash;
    }

    /**
     * Set checkNumber
     *
     * @param integer $checkNumber
     *
     * @return hte_package_archive
     */
    public function setCheckNumber($checkNumber)
    {
        $this->checkNumber = $checkNumber;

        return $this;
    }

    /**
     * Get checkNumber
     *
     * @return int
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
     * @return hte_package_archive
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
     * @return hte_package_archive
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
     * @return hte_package_archive
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
     * @return hte_package_archive
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
     * @return hte_package_archive
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
     * @return hte_package_archive
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
     * @return hte_package_archive
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
     * @return hte_package_archive
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
     * @param string $invoiced
     *
     * @return hte_package_archive
     */
    public function setInvoiced($invoiced)
    {
        $this->invoiced = $invoiced;

        return $this;
    }

    /**
     * Get invoiced
     *
     * @return string
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
     * @return hte_package_archive
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
     * @return hte_package_archive
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

