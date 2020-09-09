<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * hte_bordereau_etat
 *
 * @ORM\Table(name="hte_bordereau_etat")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\hte_bordereau_etatRepository")
 */
class Hte_bordereau_etat
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_begin", type="date")
     */
    private $dateBegin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_end", type="date")
     */
    private $dateEnd;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_package", type="integer")
     */
    private $nbPackage;

    /**
     * @var int
     *
     * @ORM\Column(name="cr_bt", type="integer")
     */
    private $crBt;

    /**
     * @var int
     *
     * @ORM\Column(name="cr_bt_a", type="integer")
     */
    private $crBtA;

    /**
     * @var string
     *
     * @ORM\Column(name="chec", type="decimal", precision=10, scale=0)
     */
    private $chec;

    /**
     * @var string
     *
     * @ORM\Column(name="cach", type="decimal", precision=10, scale=0)
     */
    private $cach;

    /**
     * @var string
     *
     * @ORM\Column(name="total", type="decimal", precision=10, scale=0)
     */
    private $total;

    /**
     * @var string
     *
     * @ORM\Column(name="type_export", type="string", length=255)
     */
    private $typeExport;

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
     * @return hte_bordereau_etat
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
     * Set dateBegin
     *
     * @param \DateTime $dateBegin
     *
     * @return hte_bordereau_etat
     */
    public function setDateBegin($dateBegin)
    {
        $this->dateBegin = $dateBegin;

        return $this;
    }

    /**
     * Get dateBegin
     *
     * @return \DateTime
     */
    public function getDateBegin()
    {
        return $this->dateBegin;
    }

    /**
     * Set dateEnd
     *
     * @param \DateTime $dateEnd
     *
     * @return hte_bordereau_etat
     */
    public function setDateEnd($dateEnd)
    {
        $this->dateEnd = $dateEnd;

        return $this;
    }

    /**
     * Get dateEnd
     *
     * @return \DateTime
     */
    public function getDateEnd()
    {
        return $this->dateEnd;
    }

    /**
     * Set nbPackage
     *
     * @param integer $nbPackage
     *
     * @return hte_bordereau_etat
     */
    public function setNbPackage($nbPackage)
    {
        $this->nbPackage = $nbPackage;

        return $this;
    }

    /**
     * Get nbPackage
     *
     * @return int
     */
    public function getNbPackage()
    {
        return $this->nbPackage;
    }

    /**
     * Set crBt
     *
     * @param integer $crBt
     *
     * @return hte_bordereau_etat
     */
    public function setCrBt($crBt)
    {
        $this->crBt = $crBt;

        return $this;
    }

    /**
     * Get crBt
     *
     * @return int
     */
    public function getCrBt()
    {
        return $this->crBt;
    }

    /**
     * Set crBtA
     *
     * @param integer $crBtA
     *
     * @return hte_bordereau_etat
     */
    public function setCrBtA($crBtA)
    {
        $this->crBtA = $crBtA;

        return $this;
    }

    /**
     * Get crBtA
     *
     * @return int
     */
    public function getCrBtA()
    {
        return $this->crBtA;
    }

    /**
     * Set chec
     *
     * @param string $chec
     *
     * @return hte_bordereau_etat
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
     * Set cach
     *
     * @param string $cach
     *
     * @return hte_bordereau_etat
     */
    public function setCach($cach)
    {
        $this->cach = $cach;

        return $this;
    }

    /**
     * Get cach
     *
     * @return string
     */
    public function getCach()
    {
        return $this->cach;
    }

    /**
     * Set total
     *
     * @param string $total
     *
     * @return hte_bordereau_etat
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return string
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set typeExport
     *
     * @param string $typeExport
     *
     * @return hte_bordereau_etat
     */
    public function setTypeExport($typeExport)
    {
        $this->typeExport = $typeExport;

        return $this;
    }

    /**
     * Get typeExport
     *
     * @return string
     */
    public function getTypeExport()
    {
        return $this->typeExport;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return hte_bordereau_etat
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
     * @return hte_bordereau_etat
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

