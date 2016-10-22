<?php
/**
 * Created by PhpStorm.
 * User: mburakergenc
 * Date: 8/1/16
 * Time: 12:42 PM
 */

namespace AppBundle\Form\Events;


use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CheckinCheckoutType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('status', ChoiceType::class, array(
                'choices' => array(
                    'Primary School $75' => '1',
                    'Middle School $100' => '2',
                    'High School $150' => '3',
                    'University Student $300' => '4',
                    'Adult Complete $450' => '5',
                    'Adult Daily $60' => '6',
                    'Parents $30' => '7',
                    'Kids(Under age 6) Free' => '8',
                ),
                'placeholder'=>'Select a category..',
                'required'=>true,
            ))

            ->add('checkin', TextType::class, array(
                'required' => False
            ))

            ->add('checkout', TextType::class, array(
                'required' => False
            ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {

    }

}