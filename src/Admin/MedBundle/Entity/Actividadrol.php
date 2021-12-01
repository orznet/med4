<?php

namespace Admin\MedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="actividad_rol")
 * @ORM\Entity(repositoryClass="Admin\MedBundle\Entity\ActividadrolRepository")
 */
class Actividadrol {

    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    protected $descripcion;

    /**
     * @ORM\Column(type="boolean")
     * @Assert\NotBlank()
     */
    protected $texto_ampliacion;

    /**
     * @var Rol 
     * @ORM\ManyToOne(targetEntity="Admin\MedBundle\Entity\Rolacademico", inversedBy="actividades")
     * @ORM\JoinColumn(name="rol_id", referencedColumnName="id",
     * nullable=false,
     * onDelete="CASCADE"
     * )
     */
    protected $rol;

    /**
     * @var Responsabilidad 
     * @ORM\ManyToOne(targetEntity="Admin\MedBundle\Entity\Responsabilidad")
     * @ORM\JoinColumn(name="resp_id", referencedColumnName="id",
     * nullable=true
     * )
     */
    protected $responsabilidad;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Actividadrol
     */
    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion() {
        return $this->descripcion;
    }

    /**
     * Set texto_ampliacion
     *
     * @param boolean $textoAmpliacion
     * @return Actividadrol
     */
    public function setTextoAmpliacion($textoAmpliacion) {
        $this->texto_ampliacion = $textoAmpliacion;

        return $this;
    }

    /**
     * Get texto_ampliacion
     *
     * @return boolean 
     */
    public function getTextoAmpliacion() {
        return $this->texto_ampliacion;
    }

    /**
     * Set rol
     *
     * @param \Admin\MedBundle\Entity\Rol $rol
     * @return Actividadrol
     */
    public function setRol(\Admin\MedBundle\Entity\Rolacademico $rol) {
        $this->rol = $rol;

        return $this;
    }

    /**
     * Get rol
     *
     * @return \Admin\MedBundle\Entity\Rol 
     */
    public function getRol() {
        return $this->rol;
    }


    /**
     * Set responsabilidad
     *
     * @param \Admin\MedBundle\Entity\Responsabilidad $responsabilidad
     * @return Actividadrol
     */
    public function setResponsabilidad(\Admin\MedBundle\Entity\Responsabilidad $responsabilidad = null)
    {
        $this->responsabilidad = $responsabilidad;

        return $this;
    }

    /**
     * Get responsabilidad
     *
     * @return \Admin\MedBundle\Entity\Responsabilidad 
     */
    public function getResponsabilidad()
    {
        return $this->responsabilidad;
    }
}
