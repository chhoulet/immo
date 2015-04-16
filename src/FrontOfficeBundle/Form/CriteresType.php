<?php

namespace FrontOfficeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CriteresType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('price', 'text',              array('label'   =>'Prix max par mois',
                                                      'attr'    => array('class'=>'form-control',
                                                                         'placeholder'=>'0000 €/mois')))


            ->add('estate','choice',            array('label'   =>'Type du bien :',
                                                      'attr'    =>  array('class' =>'form-control'),
                                                      'choices' =>  array('0'     =>'appartement',
                                                                          '1'     =>'maison',
                                                                          '2'     =>'loft',
                                                                          '3'     =>'studio',
                                                                          '4'     =>'autre')))

            ->add('nbRooms', 'choice',           array('label'  =>'Nombre de pièces :',
                                                       'attr'   => array('class'=> 'form-control'),
                                                       'choices'=> array('0'=> 1,
                                                                         '1'=> 2,
                                                                         '2'=> 3,
                                                                         '3'=> 4,
                                                                         '4'=> 5,
                                                                         '5'=> '+')))

            ->add('surfaceArea','text',          array('label'  =>'Surface :',
                                                       'attr'   => array('class'=> 'form-control',
                                                                         'placeholder'=>'Nombre de m²')))

            ->add('colocation', 'choice',        array('label'  =>'Colocation :',
                                                       'attr'   => array('class'=> 'form-control'),
                                                       'choices'=> array('0'=> 'non',
                                                                         '1'=> 'oui')))

            ->add('bailDuration', 'choice',      array('label'  =>'Durée du bail :',
                                                       'attr'   => array('class'=> 'form-control'),
                                                       'choices'=> array('0'=> 'Courte durée',
                                                                         '1'=> 'Longue durée')))

            ->add('disponibility', 'choice',     array('label'  =>'Disponibilité :',
                                                       'attr'   => array('class'=> 'form-control'),
                                                       'choices'=> array('0'=> 'Immédiatement',
                                                                         '1'=> 'ultérieurement')))

            ->add('arrangement', 'choice',       array('label'    =>'Aménagement :',
                                                       'attr'     => array('class'=> 'form-control'),
                                                       'multiple' => true,
                                                       'choices'  => array('0'=> 'Parquet',
                                                                         '1'=> 'Moulures',
                                                                         '2'=> 'Cheminée',
                                                                         '3'=> 'Double Vitrage',
                                                                         '4'=> 'Toilettes Séparées',
                                                                         '5'=> 'Rangements',
                                                                         '6'=> 'Cuisine équipée',
                                                                         '7'=> 'Vue sur Cour',
                                                                         '8'=> 'Vue sur Rue',
                                                                         '9'=> 'Très lumineux',
                                                                         '10'=> 'Calme',
                                                                         '11'=> 'Rénové',
                                                                         '12'=> 'Parquet',
                                                                         '13'=> 'Mezzanine',
                                                                         '14'=> 'Poutres apparentes',
                                                                         '15'=> 'Bon état')))

            ->add('building', 'choice',          array('label'  =>'Immeuble :',
                                                       'attr'   => array('class'=> 'form-control'),
                                                       'choices'=> array('0'=> 'Neuf',
                                                                         '1'=> 'Ancien',
                                                                         '2'=> 'Rénové',
                                                                         '3'=> 'Digicode - Interphone',
                                                                         '4'=> 'Gardien',
                                                                         '5'=> 'Pierre de Taille')))

            ->add('charge', 'choice',           array('label'   =>'Loyer :',
                                                      'attr'    => array('class'=> 'form-control'),
                                                      'choices' => array('0'=> 'Internet inclus',
                                                                         '1'=> 'chauffage inclus',
                                                                         '2'=> 'APL possibles')))

            ->add('dependancy', 'choice',       array('label'  =>'Dépendances :',
                                                      'attr'   => array('class'=> 'form-control'),
                                                      'choices'=> array('0'=> 'Cave',
                                                                        '1'=> 'Parking',
                                                                        '2'=> 'Box fermé',
                                                                        '3'=> 'Aucune dépendance')))

            ->add('externArea', 'choice',       array('label'  =>'Espaces extérieurs :',
                                                      'attr'   => array('class'=> 'form-control'),
                                                      'choices'=> array('0'=> 'Jardin',
                                                                        '1'=> 'Terrasse',
                                                                        '2'=> 'Balcon',
                                                                        '3'=> 'Piscine',
                                                                        '4'=> 'Véranda')))

            ->add('heating', 'choice',         array('label'  =>'Chauffage :',
                                                     'attr'   => array('class'=> 'form-control'),
                                                     'choices'=> array('0'=> 'Chauffage au sol',
                                                                       '1'=> 'Chauffage central',
                                                                       '2'=> 'Chauffage gaz',
                                                                       '3'=> 'Chauffage électrique',
                                                                       '4'=> 'Chauffage individuel')))

            ->add('Enregistrer','submit',      array('attr'  => array('style'=>'margin-top:30px;margin-left:600px;width:85px;border:solid black 2px; border-radius:7px;')))
        ;
    }

//    Cette fonction convertit les données du formulaire en entite objet, parfait lorsqu'on crée un formulaire de depot ou de creation. Lorsqu'il n'y a pas d'insertion dans la BDD, il faut la supprimer !
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            //'data_class' => 'FrontOfficeBundle\Entity\Annonce'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'frontofficebundle_criteres';
    }
}
