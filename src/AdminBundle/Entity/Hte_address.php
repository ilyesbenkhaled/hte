<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * hte_address
 *
 * @ORM\Table(name="hte_address")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\hte_addressRepository")
 */
class Hte_address
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
     * @ORM\Column(name="complete_adress", type="string", length=255)
     */
    private $completeAdress;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="expedition", type="string", length=255)
     */
    private $expedition;

    /**
     * @var int
     *
     * @ORM\Column(name="recipient", type="integer")
     */
    private $recipient;

    /**
     * @var int
     *
     * @ORM\Column(name="main_pickup", type="integer")
     */
    private $mainPickup;

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
     * @var int
     *
     * @ORM\Column(name="city_id", type="integer")
     */
    private $cityId;

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
     * @return hte_address
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
     * Set completeAdress
     *
     * @param string $completeAdress
     *
     * @return hte_address
     */
    public function setCompleteAdress($completeAdress)
    {
        $this->completeAdress = $completeAdress;

        return $this;
    }

    /**
     * Get completeAdress
     *
     * @return string
     */
    public function getCompleteAdress()
    {
        return $this->completeAdress;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return hte_address
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set expedition
     *
     * @param string $expedition
     *
     * @return hte_address
     */
    public function setExpedition($expedition)
    {
        $this->expedition = $expedition;

        return $this;
    }

    /**
     * Get expedition
     *
     * @return string
     */
    public function getExpedition()
    {
        return $this->expedition;
    }

    /**
     * Set recipient
     *
     * @param integer $recipient
     *
     * @return hte_address
     */
    public function setRecipient($recipient)
    {
        $this->recipient = $recipient;

        return $this;
    }

    /**
     * Get recipient
     *
     * @return int
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * Set mainPickup
     *
     * @param integer $mainPickup
     *
     * @return hte_address
     */
    public function setMainPickup($mainPickup)
    {
        $this->mainPickup = $mainPickup;

        return $this;
    }

    /**
     * Get mainPickup
     *
     * @return int
     */
    public function getMainPickup()
    {
        return $this->mainPickup;
    }

    /**
     * Set contactName
     *
     * @param string $contactName
     *
     * @return hte_address
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
     * @return hte_address
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
     * Set cityId
     *
     * @param integer $cityId
     *
     * @return hte_address
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
     * Set clientId
     *
     * @param integer $clientId
     *
     * @return hte_address
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
     * @return hte_address
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
     * @return hte_address
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
     * @return hte_address
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

