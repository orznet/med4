<?php
namespace Admin\MedBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="productividad")
 * @ORM\Entity(repositoryClass="Admin\MedBundle\Entity\ProductividadRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Productividad{

/**
 * @ORM\Id
 * @ORM\Column(name="id", type="integer", nullable=false)
 * @ORM\GeneratedValue(strategy="AUTO")
 */
 protected $id;


/**
* @ORM\Column(type="string", length=250, nullable=true)
*/
protected $tipo;

/**
* @ORM\Column(type="string", length=250, nullable=true)
*/
protected $articulacion; 


/**
 * @ORM\Column(type="datetime", nullable=true)
 */
protected $fecha_registro;


/**
* @ORM\Column(type="string", length=2500, nullable=true)
*/
protected $descripcion;

/** 
* @var Proyecto
* @ORM\ManyToOne(targetEntity="Admin\MedBundle\Entity\Proyectoi", inversedBy="productos")
* @ORM\JoinColumn(name="proyecto_id", referencedColumnName="id", nullable=true)
*/
protected $proyecto;


/** 
* @var Plang
* @ORM\ManyToOne(targetEntity="Admin\MedBundle\Entity\Plangestion", inversedBy="productos")
* @ORM\JoinColumn(name="plan_id", referencedColumnName="id", nullable=false)
*/
protected $plang;


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
     * Set tipo
     *
     * @param string $tipo
     * @return Productividad
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set articulacion
     *
     * @param string $articulacion
     * @return Productividad
     */
    public function setArticulacion($articulacion)
    {
        $this->articulacion = $articulacion;

        return $this;
    }

    /**
     * Get articulacion
     *
     * @return string 
     */
    public function getArticulacion()
    {
        return $this->articulacion;
    }

    /**
     * Set fecha_registro
     *
     * @param \DateTime $fechaRegistro
     * @return Productividad
     */
    public function setFechaRegistro($fechaRegistro)
    {
        $this->fecha_registro = $fechaRegistro;

        return $this;
    }

    /**
     * Get fecha_registro
     *
     * @return \DateTime 
     */
    public function getFechaRegistro()
    {
        return $this->fecha_registro;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Productividad
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set proyecto
     *
     * @param \Admin\MedBundle\Entity\Proyectoi $proyecto
     * @return Productividad
     */
    public function setProyecto(\Admin\MedBundle\Entity\Proyectoi $proyecto = null)
    {
        $this->proyecto = $proyecto;

        return $this;
    }

    /**
     * Get proyecto
     *
     * @return \Admin\MedBundle\Entity\Proyectoi 
     */
    public function getProyecto()
    {
        return $this->proyecto;
    }

    /**
     * Set plang
     *
     * @param \Admin\MedBundle\Entity\Plangestion $plang
     * @return Productividad
     */
    public function setPlang(\Admin\MedBundle\Entity\Plangestion $plang)
    {
        $this->plang = $plang;

        return $this;
    }

    /**
     * Get plang
     *
     * @return \Admin\MedBundle\Entity\Plangestion 
     */
    public function getPlang()
    {
        return $this->plang;
    }
}
