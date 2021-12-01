<?php
namespace Admin\MedBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="periodoe")
 * @ORM\Entity(repositoryClass="Admin\MedBundle\Entity\periodoelRepository")
 */
class Periodoe{

/**
 * @ORM\Id
 * @ORM\Column(name="id", type="integer", nullable=false)
 */
 protected $id;

 /**
  * @ORM\Column(type="datetime", nullable=false)
  */
protected $fechainicio;

 /**
  * @ORM\Column(type="datetime", nullable=false)
  */
protected $fechafin;
 
 /**
 * @ORM\Column(type="integer", nullable=false)
 */
protected $dias;

/**
 * @ORM\Column(type="string", nullable=true)
 */
protected $observaciones;

/**
  * @ORM\OneToMany(targetEntity="Admin\MedBundle\Entity\Periodoa", mappedBy="periodoe")
  */
protected $periodoa;


    /**
     * Set id
     *
     * @param integer $id
     * @return Periodoe
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fechainicio
     *
     * @param \DateTime $fechainicio
     * @return Periodoe
     */
    public function setFechainicio($fechainicio)
    {
        $this->fechainicio = $fechainicio;

        return $this;
    }

    /**
     * Get fechainicio
     *
     * @return \DateTime 
     */
    public function getFechainicio()
    {
        return $this->fechainicio;
    }

    /**
     * Set fechafin
     *
     * @param \DateTime $fechafin
     * @return Periodoe
     */
    public function setFechafin($fechafin)
    {
        $this->fechafin = $fechafin;

        return $this;
    }

    /**
     * Get fechafin
     *
     * @return \DateTime 
     */
    public function getFechafin()
    {
        return $this->fechafin;
    }

    /**
     * Set dias
     *
     * @param integer $dias
     * @return Periodoe
     */
    public function setDias($dias)
    {
        $this->dias = $dias;

        return $this;
    }

    /**
     * Get dias
     *
     * @return integer 
     */
    public function getDias()
    {
        return $this->dias;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return Periodoe
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string 
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->periodoa = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add periodoa
     *
     * @param \Admin\MedBundle\Entity\Periodoa $periodoa
     * @return Periodoe
     */
    public function addPeriodoa(\Admin\MedBundle\Entity\Periodoa $periodoa)
    {
        $this->periodoa[] = $periodoa;

        return $this;
    }

    /**
     * Remove periodoa
     *
     * @param \Admin\MedBundle\Entity\Periodoa $periodoa
     */
    public function removePeriodoa(\Admin\MedBundle\Entity\Periodoa $periodoa)
    {
        $this->periodoa->removeElement($periodoa);
    }

    /**
     * Get periodoa
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPeriodoa()
    {
        return $this->periodoa;
    }
}
