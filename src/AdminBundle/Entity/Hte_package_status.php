<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * hte_package_status
 *
 * @ORM\Table(name="hte_package_status")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\hte_package_statusRepository")
 */
class Hte_package_status
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
     * @ORM\Column(name="labl", type="string", length=255)
     */
    private $labl;

    /**
     * @var string
     *
     * @ORM\Column(name="labl_public", type="string", length=255)
     */
    private $lablPublic;

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
     * @ORM\Column(name="img", type="string", length=255)
     */
    private $img;

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=255)
     */
    private $color;

    /**
     * @var string
     *
     * @ORM\Column(name="wf_order", type="string", length=255)
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
     * @return hte_package_status
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
     * Set labl
     *
     * @param string $labl
     *
     * @return hte_package_status
     */
    public function setLabl($labl)
    {
        $this->labl = $labl;

        return $this;
    }

    /**
     * Get labl
     *
     * @return string
     */
    public function getLabl()
    {
        return $this->labl;
    }

    /**
     * Set lablPublic
     *
     * @param string $lablPublic
     *
     * @return hte_package_status
     */
    public function setLablPublic($lablPublic)
    {
        $this->lablPublic = $lablPublic;

        return $this;
    }

    /**
     * Get lablPublic
     *
     * @return string
     */
    public function getLablPublic()
    {
        return $this->lablPublic;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return hte_package_status
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
     * @return hte_package_status
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
     * Set img
     *
     * @param string $img
     *
     * @return hte_package_status
     */
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get img
     *
     * @return string
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set color
     *
     * @param string $color
     *
     * @return hte_package_status
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
     * @param string $wfOrder
     *
     * @return hte_package_status
     */
    public function setWfOrder($wfOrder)
    {
        $this->wfOrder = $wfOrder;

        return $this;
    }

    /**
     * Get wfOrder
     *
     * @return string
     */
    public function getWfOrder()
    {
        return $this->wfOrder;
    }
}

