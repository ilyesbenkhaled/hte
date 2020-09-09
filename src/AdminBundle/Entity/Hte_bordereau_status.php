<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * hte_bordereau_status
 *
 * @ORM\Table(name="hte_bordereau_status")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\hte_bordereau_statusRepository")
 */
class hte_bordereau_status
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
     * @ORM\Column(name="labe", type="string", length=255)
     */
    private $labe;

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
     * @ORM\Column(name="color", type="string", length=255)
     */
    private $color;

    /**
     * @var int
     *
     * @ORM\Column(name="wf_order", type="integer")
     */
    private $wfOrder;


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
     * @return hte_bordereau_status
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
     * Set labe
     *
     * @param string $labe
     *
     * @return hte_bordereau_status
     */
    public function setLabe($labe)
    {
        $this->labe = $labe;

        return $this;
    }

    /**
     * Get labe
     *
     * @return string
     */
    public function getLabe()
    {
        return $this->labe;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return hte_bordereau_status
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
     * @return hte_bordereau_status
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
     * Set color
     *
     * @param string $color
     *
     * @return hte_bordereau_status
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set wfOrder
     *
     * @param integer $wfOrder
     *
     * @return hte_bordereau_status
     */
    public function setWfOrder($wfOrder)
    {
        $this->wfOrder = $wfOrder;

        return $this;
    }

    /**
     * Get wfOrder
     *
     * @return int
     */
    public function getWfOrder()
    {
        return $this->wfOrder;
    }
}

