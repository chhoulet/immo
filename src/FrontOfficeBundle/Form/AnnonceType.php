<?php

namespace FrontOfficeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AnnonceType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('price')
            ->add('username')
            ->add('dateCreated')
            ->add('dateUpdated')
            ->add('estate','choice', array('label'  =>'Type du bien :',
                                           'attr'   => array('class'=>'form-control'),
                                           'choices' => array('0' =>'appartement',
                                                             '1' =>'maison',
                                                             '2' =>'loft',
                                                             '3' =>'studio',
                                                             '4' =>'autre')))
            ->add('nbRooms')
            ->add('surfaceArea')
            ->add('description')
            ->add('colocation')
            ->add('bailDuration')
            ->add('disponibility')
            ->add('arrangement')
            ->add('building')
            ->add('charge')
            ->add('dependancy')
            ->add('externArea')
            ->add('heating')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FrontOfficeBundle\Entity\Annonce'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'frontofficebundle_annonce';
    }
}
