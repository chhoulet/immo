<?php

namespace FrontOfficeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver;

class TriAnnonceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder ->add('price')
                 ->add('surfaceArea')
                 ->add('area')
                 ->add('Valider','submit');
    }

    public function getname()
    {
        return 'frontofficebundle_triannonce';
    }
}
