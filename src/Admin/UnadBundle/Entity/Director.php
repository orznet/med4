<?php
namespace Admin\UnadBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="director", uniqueConstraints={@ORM\UniqueConstraint(columns={"centro_id", "periodo_id"})})
 */
class Director{

/**
 * @ORM\Id
 * @ORM\Column(name="id", type="integer", nullable=false)
 * @ORM\GeneratedValue(strategy="AUTO")
 */
 protected $id;
 
/** 
* @var Centro
* @ORM\ManyToOne(targetEntity="Admin\UnadBundle\Entity\Centro")
* @ORM\JoinColumn(name="centro_id", referencedColumnName="id", nullable=false)
*/
protected $centro;
 
/** 
* @var Periodo
* @ORM\ManyToOne(targetEntity="Admin\MedBundle\Entity\Periodoe")
* @ORM\JoinColumn(name="periodo_id", referencedColumnName="id", nullable=false)
*/
protected $periodo;

/** 
* @var Director 
* @ORM\ManyToOne(targetEntity="Admin\UserBundle\Entity\User")
* @ORM\JoinColumn(name="director_id", referencedColumnName="id",
* nullable=true
* )
*/
protected $director;

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
     * Set centro
     *
     * @param \Admin\UnadBundle\Entity\Centro $centro
     * @return Director
     */
    public function setCentro(\Admin\UnadBundle\Entity\Centro $centro)
    {
        $this->centro = $centro;

        return $this;
    }

    /**
     * Get centro
     *
     * @return \Admin\UnadBundle\Entity\Centro 
     */
    public function getCentro()
    {
        return $this->centro;
    }

    /**
     * Set periodo
     *
     * @param \Admin\MedBundle\Entity\Periodoe $periodo
     * @return Director
     */
    public function setPeriodo(\Admin\MedBundle\Entity\Periodoe $periodo)
    {
        $this->periodo = $periodo;

        return $this;
    }

    /**
     * Get periodo
     *
     * @return \Admin\MedBundle\Entity\Periodoe 
     */
    public function getPeriodo()
    {
        return $this->periodo;
    }


    /**
     * Set director
     *
     * @param \Admin\UserBundle\Entity\User $director
     * @return Director
     */
    public function setDirector(\Admin\UserBundle\Entity\User $director = null)
    {
        $this->director = $director;

        return $this;
    }

    /**
     * Get director
     *
     * @return \Admin\UserBundle\Entity\User 
     */
    public function getDirector()
    {
        return $this->director;
    }
}
