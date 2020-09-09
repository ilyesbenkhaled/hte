<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * hte_client
 *
 * @ORM\Table(name="hte_client")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\hte_clientRepository")
 */
class Hte_client
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
     * @ORM\Column(name="firstname", type="string", length=255)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=255)
     */
    private $gender;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="companyname", type="string", length=255)
     */
    private $companyname;

    /**
     * @var int
     *
     * @ORM\Column(name="phone", type="integer")
     */
    private $phone;

    /**
     * @var int
     *
     * @ORM\Column(name="active", type="integer")
     */
    private $active;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="url_update", type="string", length=255)
     */
    private $urlUpdate;

    /**
     * @var int
     *
     * @ORM\Column(name="mail_workflow", type="integer")
     */
    private $mailWorkflow;

    /**
     * @var int
     *
     * @ORM\Column(name="mail_prob", type="integer")
     */
    private $mailProb;

    /**
     * @var int
     *
     * @ORM\Column(name="delivery_form", type="integer")
     */
    private $deliveryForm;

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
     * @ORM\Column(name="public_key", type="string", length=255)
     */
    private $publicKey;

    /**
     * @var int
     *
     * @ORM\Column(name="qrcode", type="integer")
     */
    private $qrcode;

    /**
     * @var int
     *
     * @ORM\Column(name="share_data", type="integer")
     */
    private $shareData;


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
     * @return hte_client
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
     * Set firstname
     *
     * @param string $firstname
     *
     * @return hte_client
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return hte_client
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set gender
     *
     * @param string $gender
     *
     * @return hte_client
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return hte_client
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set companyname
     *
     * @param string $companyname
     *
     * @return hte_client
     */
    public function setCompanyname($companyname)
    {
        $this->companyname = $companyname;

        return $this;
    }

    /**
     * Get companyname
     *
     * @return string
     */
    public function getCompanyname()
    {
        return $this->companyname;
    }

    /**
     * Set phone
     *
     * @param integer $phone
     *
     * @return hte_client
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return int
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set active
     *
     * @param integer $active
     *
     * @return hte_client
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

    /**
     * Set type
     *
     * @param string $type
     *
     * @return hte_client
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set urlUpdate
     *
     * @param string $urlUpdate
     *
     * @return hte_client
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
     * Set mailWorkflow
     *
     * @param integer $mailWorkflow
     *
     * @return hte_client
     */
    public function setMailWorkflow($mailWorkflow)
    {
        $this->mailWorkflow = $mailWorkflow;

        return $this;
    }

    /**
     * Get mailWorkflow
     *
     * @return int
     */
    public function getMailWorkflow()
    {
        return $this->mailWorkflow;
    }

    /**
     * Set mailProb
     *
     * @param integer $mailProb
     *
     * @return hte_client
     */
    public function setMailProb($mailProb)
    {
        $this->mailProb = $mailProb;

        return $this;
    }

    /**
     * Get mailProb
     *
     * @return int
     */
    public function getMailProb()
    {
        return $this->mailProb;
    }

    /**
     * Set deliveryForm
     *
     * @param integer $deliveryForm
     *
     * @return hte_client
     */
    public function setDeliveryForm($deliveryForm)
    {
        $this->deliveryForm = $deliveryForm;

        return $this;
    }

    /**
     * Get deliveryForm
     *
     * @return int
     */
    public function getDeliveryForm()
    {
        return $this->deliveryForm;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return hte_client
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
     * @return hte_client
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
     * Set publicKey
     *
     * @param string $publicKey
     *
     * @return hte_client
     */
    public function setPublicKey($publicKey)
    {
        $this->publicKey = $publicKey;

        return $this;
    }

    /**
     * Get publicKey
     *
     * @return string
     */
    public function getPublicKey()
    {
        return $this->publicKey;
    }

    /**
     * Set qrcode
     *
     * @param integer $qrcode
     *
     * @return hte_client
     */
    public function setQrcode($qrcode)
    {
        $this->qrcode = $qrcode;

        return $this;
    }

    /**
     * Get qrcode
     *
     * @return int
     */
    public function getQrcode()
    {
        return $this->qrcode;
    }

    /**
     * Set shareData
     *
     * @param integer $shareData
     *
     * @return hte_client
     */
    public function setShareData($shareData)
    {
        $this->shareData = $shareData;

        return $this;
    }

    /**
     * Get shareData
     *
     * @return int
     */
    public function getShareData()
    {
        return $this->shareData;
    }
}

