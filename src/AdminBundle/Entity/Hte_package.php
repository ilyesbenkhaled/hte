<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * hte_package
 *
 * @ORM\Table(name="hte_package")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\hte_packageRepository")
 */
class Hte_package
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
     * @var string
     *
     * @ORM\Column(name="weight_c", type="decimal", precision=10, scale=0)
     */
    private $weightC;

    /**
     * @var string
     *
     * @ORM\Column(name="weight_a", type="decimal", precision=10, scale=0)
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
     * @var int
     *
     * @ORM\Column(name="delivery_adress", type="integer")
     */
    private $deliveryAdress;

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
     * @ORM\Column(name="cash", type="float")
     */
    private $cash;

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
     * @var int
     *
     * @ORM\Column(name="relayer_id", type="integer")
     */
    private $relayerId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="paid_at", type="datetime")
     */
    private $paidAt;

    /**
     * @var string
     *
     * @ORM\Column(name="paid_by", type="string", length=255)
     */
    private $paidBy;

    /**
     * @var int
     *
     * @ORM\Column(name="to_return", type="integer")
     */
    private $toReturn;

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
     * Set code
     *
     * @param string $code
     *
     * @return hte_package
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
     * @return hte_package
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
     * @return hte_package
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
     * @return hte_package
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
     * @return hte_package
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
     * @return hte_package
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
     * @return hte_package
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
     * @return hte_package
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
     * Set deliveryAdress
     *
     * @param integer $deliveryAdress
     *
     * @return hte_package
     */
    public function setDeliveryAdress($deliveryAdress)
    {
        $this->deliveryAdress = $deliveryAdress;

        return $this;
    }

    /**
     * Get deliveryAdress
     *
     * @return int
     */
    public function getDeliveryAdress()
    {
        return $this->deliveryAdress;
    }

    /**
     * Set complete
     *
     * @param integer $complete
     *
     * @return hte_package
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
     * @return hte_package
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
     * @return hte_package
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
     * @return hte_package
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
     * @return hte_package
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
     * @return hte_package
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
     * @return hte_package
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
     * @return hte_package
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
     * @return hte_package
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
     * @return hte_package
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
     * @return hte_package
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
     * @return hte_package
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
     * @return hte_package
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
     * Set cash
     *
     * @param float $cash
     *
     * @return hte_package
     */
    public function setCash($cash)
    {
        $this->cash = $cash;

        return $this;
    }

    /**
     * Get cash
     *
     * @return float
     */
    public function getCash()
    {
        return $this->cash;
    }

    /**
     * Set checkNumber
     *
     * @param string $checkNumber
     *
     * @return hte_package
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
     * @return hte_package
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
     * @return hte_package
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
     * @return hte_package
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
     * @return hte_package
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
     * @return hte_package
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
     * @return hte_package
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
     * @return hte_package
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
     * @return hte_package
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
     * @return hte_package
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
     * Set relayerId
     *
     * @param integer $relayerId
     *
     * @return hte_package
     */
    public function setRelayerId($relayerId)
    {
        $this->relayerId = $relayerId;

        return $this;
    }

    /**
     * Get relayerId
     *
     * @return int
     */
    public function getRelayerId()
    {
        return $this->relayerId;
    }

    /**
     * Set paidAt
     *
     * @param \DateTime $paidAt
     *
     * @return hte_package
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
     * Set paidBy
     *
     * @param string $paidBy
     *
     * @return hte_package
     */
    public function setPaidBy($paidBy)
    {
        $this->paidBy = $paidBy;

        return $this;
    }

    /**
     * Get paidBy
     *
     * @return string
     */
    public function getPaidBy()
    {
        return $this->paidBy;
    }

    /**
     * Set toReturn
     *
     * @param integer $toReturn
     *
     * @return hte_package
     */
    public function setToReturn($toReturn)
    {
        $this->toReturn = $toReturn;

        return $this;
    }

    /**
     * Get toReturn
     *
     * @return int
     */
    public function getToReturn()
    {
        return $this->toReturn;
    }

    /**
     * Set depositoryId
     *
     * @param integer $depositoryId
     *
     * @return hte_package
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

