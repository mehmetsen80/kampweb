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
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class EditUserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fullname', TextType::class, array(
                'required'=>false,
            ))
            ->add('username', EmailType::class, array(
                'required'=>false,

            ))
            ->add('gender', ChoiceType::class, array(
                'choices' => array(
                    'Male' => 'Male',
                    'Female' => 'Female'
                ),

                'empty_data'  => null,
                'placeholder'=>'Select gender',
                'required'=>false,
            ))
            ->add('cellphone', TextType::class, array(
                'required'=>false,
            ))
            ->add('ccode', TextType::class, array(
                'required'=>true,
                'label_attr'=>array(
                    'class'=>'ccode'
                )
            ))
            ->add('birthday', BirthdayType::class, array(
                'widget'=>'single_text',
                'format'=>'MM/dd/yyyy',
                'required'=>false,

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
            'data_class' => 'AppBundle\Entity\User',
            'validation_groups' => array('edit'),
        ));
    }



}