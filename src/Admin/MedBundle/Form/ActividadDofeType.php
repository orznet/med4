<?php

namespace Admin\MedBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ActividadDofeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('observaciones', TextareaType::class, array('required'  => true, 'attr' => array('cols' => '110')))
            ->add('autoevaluacion', ChoiceType::class, array('choices'   => array('2' => 'Realizado', '1' => 'No Realizado', '0' => 'No Aplica'),
                'required'  => true,))
            ->add('file')
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Admin\MedBundle\Entity\Actividadplang'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'admin_medbundle_actividadplang';
    }
}