<?php

namespace PokedexBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PokemonType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom')->add('nomEn')->add('poids')->add('taille')->add('pointDeVie')->add('attaque')->add('defense')->add('attaqueSpe')->add('defenseSpe')->add('vitesse')->add('description')->add('nbPasEclosion')->add('tauxCapture')->add('bonheur')->add('imgGenerale')->add('imgMiniature')->add('type1')->add('type2')->add('talents')->add('attaques');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PokedexBundle\Entity\Pokemon'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'pokedexbundle_pokemon';
    }


}
