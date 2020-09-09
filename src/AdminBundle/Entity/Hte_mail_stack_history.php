<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * hte_mail_stack_history
 *
 * @ORM\Table(name="hte_mail_stack_history")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\hte_mail_stack_historyRepository")
 */
class Hte_mail_stack_history
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
     * @ORM\Column(name="stack_type_id", type="integer")
     */
    private $stackTypeId;

    /**
     * @var string
     *
     * @ORM\Column(name="data", type="string", length=255)
     */
    private $data;

    /**
     * @var int
     *
     * @ORM\Column(name="sended", type="integer")
     */
    private $sended;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sended_at", type="datetime")
     */
    private $sendedAt;

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
     * Set stackTypeId
     *
     * @param integer $stackTypeId
     *
     * @return hte_mail_stack_history
     */
    public function setStackTypeId($stackTypeId)
    {
        $this->stackTypeId = $stackTypeId;

        return $this;
    }

    /**
     * Get stackTypeId
     *
     * @return int
     */
    public function getStackTypeId()
    {
        return $this->stackTypeId;
    }

    /**
     * Set data
     *
     * @param string $data
     *
     * @return hte_mail_stack_history
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set sended
     *
     * @param integer $sended
     *
     * @return hte_mail_stack_history
     */
    public function setSended($sended)
    {
        $this->sended = $sended;

        return $this;
    }

    /**
     * Get sended
     *
     * @return int
     */
    public function getSended()
    {
        return $this->sended;
    }

    /**
     * Set sendedAt
     *
     * @param \DateTime $sendedAt
     *
     * @return hte_mail_stack_history
     */
    public function setSendedAt($sendedAt)
    {
        $this->sendedAt = $sendedAt;

        return $this;
    }

    /**
     * Get sendedAt
     *
     * @return \DateTime
     */
    public function getSendedAt()
    {
        return $this->sendedAt;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return hte_mail_stack_history
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
     * @return hte_mail_stack_history
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

