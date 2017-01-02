<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class ContactType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('name', TextType::class, array('label' => 'Nom ',
                    'attr' => array('class' => 'form-control ')))
                ->add('profession', null, array('label' => 'Profession ',
                    'attr' => array('class' => 'form-control ')))
                ->add('email', EmailType::class, array('label' => 'Email ',
                    'attr' => array('class' => 'form-control ')))
                ->add('address', TextareaType::class, array('label' => 'Adresses ',
                    'attr' => array('class' => 'form-control ')))
                ->add('phone', TextType::class, array('label' => 'Téléphone ',
                    'attr' => array('class' => 'form-control ')))
                ->add('website', TextType::class, array('label' => 'site web ',
                    'attr' => array('class' => 'form-control', 'placeholder' => 'http://domain.com')))
                ->add('age', IntegerType::class, array('label' => 'Age ',
                    'attr' => array('class' => 'form-control', 'placeholder' => '10')))
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Contact'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix() {
        return 'appbundle_contact';
    }

}
