<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * hte_back_user_groups
 *
 * @ORM\Table(name="hte_back_user_groups")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\hte_back_user_groupsRepository")
 */
class Hte_back_user_groups
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
     * @ORM\Column(name="back_user_id", type="integer")
     */
    private $backUserId;

    /**
     * @var int
     *
     * @ORM\Column(name="back_groups_id", type="integer")
     */
    private $backGroupsId;

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
     * Set backUserId
     *
     * @param integer $backUserId
     *
     * @return hte_back_user_groups
     */
    public function setBackUserId($backUserId)
    {
        $this->backUserId = $backUserId;

        return $this;
    }

    /**
     * Get backUserId
     *
     * @return int
     */
    public function getBackUserId()
    {
        return $this->backUserId;
    }

    /**
     * Set backGroupsId
     *
     * @param integer $backGroupsId
     *
     * @return hte_back_user_groups
     */
    public function setBackGroupsId($backGroupsId)
    {
        $this->backGroupsId = $backGroupsId;

        return $this;
    }

    /**
     * Get backGroupsId
     *
     * @return int
     */
    public function getBackGroupsId()
    {
        return $this->backGroupsId;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return hte_back_user_groups
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
     * @return hte_back_user_groups
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

