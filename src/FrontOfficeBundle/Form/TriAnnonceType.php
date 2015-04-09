<?php

namespace FrontOfficeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver;

class TriAnnonceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder ->add('price','text',        array('label' =>'Prix maximum :',
                                                    'attr'  => array('class'=>'form-control',
                                                                     'placeholder'=>'0000 (chiffres uniquement)')))

                 ->add('surfaceArea', 'text', array('label' =>'Nombre de m² minimum',
                                                    'attr'  => array('class'=>'form-control',
                                                                     'placeholder'=>'000 (chiffres uniquement)')))

                 ->add('area', null,          array('label' =>'Quartier',
                                                    'attr'  => array('class'=>'form-control')))

                 ->add('Valider','submit',    array('attr'  => array('style'=>'margin-top:15px;width:85px;border:solid black 2px; border-radius:7px;')));
    }

    public function getname()
    {
        return 'frontofficebundle_triannonce';
    }
}
