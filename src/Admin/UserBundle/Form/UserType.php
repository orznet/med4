<?php

namespace Admin\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id')    
            ->add('username')
            ->add('nombres')
            ->add('apellidos')
            ->add('email')
            ->add('emailp')   
            ->add('password')
            ->add('isActive')
            ->add('user_roles')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Admin\UserBundle\Entity\User'
        ));
    }

    public function getName()
    {
        return 'admin_userbundle_usertype';
    }
}
