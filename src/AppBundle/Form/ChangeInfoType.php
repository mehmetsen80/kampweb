<?php
/**
 * Created by PhpStorm.
 * User: mburakergenc
 * Date: 4/28/16
 * Time: 3:36 PM
 */

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class ChangeInfoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('newfullname', TextType::class, array(
                'required'=>false,
            ))
            ->add('newusername', EmailType::class, array(
                'required'=>false,
            ))
            ->add('gender', ChoiceType::class, array(
                'choices' => array(
                    'Male' => 'Male',
                    'Female' => 'Female'
                ),
                'required'    => false,
                'empty_data'  => null,
                'placeholder'=>'Select your gender...'
            ))
            ->add('cellphone', IntegerType::class, array('required' =>false))
            ->add('birthdate', TextType::class, array(
                'required' =>false
            ))
            ->add('newpassword', RepeatedType::class, array(
                'type' => PasswordType::class,
                'required'=>false,
                'mapped'=>false,
                'first_options'  => array('label' => 'Password', 'error_bubbling' => true),
                'second_options' => array('label' => 'Repeat Password'),
                'invalid_message' => 'The password fields must match.',
    ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(

        ));
    }



}