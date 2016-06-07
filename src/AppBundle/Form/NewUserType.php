<?php
/**
 * Created by PhpStorm.
 * User: muhammetergenc
 * Date: 6/6/16
 * Time: 5:10 PM
 */

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class NewUserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fullname', TextType::class, array(
                'required'=>true,
            ))
            ->add('username', EmailType::class, array(
                'required'=>true,

            ))
            ->add('gender', ChoiceType::class, array(
                'choices' => array(
                    'Male' => 'Male',
                    'Female' => 'Female'
                ),

                'empty_data'  => null,
                'placeholder'=>'Select gender...',
                'required'=>true,
            ))
            ->add('cellphone', TextType::class, array(
                'required'=>true,
            ))
            ->add('birthday', BirthdayType::class, array(
                'widget'=>'single_text',
                'format'=>'MM/dd/yyyy',
                'required'=>true,

            ))
        ->add('plainPassword', RepeatedType::class, array(
            'type' => PasswordType::class,
            'first_options'  => array('label' => 'Password', 'error_bubbling' => true),
            'second_options' => array('label' => 'Repeat Password'),
            'invalid_message' => 'The password fields must match.',

        )
    );
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(

        ));
    }

}