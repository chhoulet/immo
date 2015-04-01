<?php

namespace FrontOfficeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AreaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nameArea', 'text',        array('label'=>'Entrez le nom de l\'aire désignée :',
                                                   'attr' => array('class'      =>'form-control',
                                                                   'placeholder'=>'Nom de l\'aire')))
            ->add('descriptionArea','text',  array('label'=>'Entrez un texte de présentation :',
                                                   'attr' => array('class'      =>'form-control',
                                                                   'placeholder'=>'Description de l\'aire')))
            ->add('averagePrice', 'integer', array('label'=>'Prix moyen au m²',
                                                   'attr' => array('class'      =>'form-control',
                                                                   'placeholder'=>'0000/m²')))
            ->add('Valider','submit',        array('attr' => array('class'=>"btn btn-primary")))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FrontOfficeBundle\Entity\Area'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'frontofficebundle_area';
    }
}
