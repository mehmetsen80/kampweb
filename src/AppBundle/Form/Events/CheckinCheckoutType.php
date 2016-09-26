<?php
/**
 * Created by PhpStorm.
 * User: mburakergenc
 * Date: 8/1/16
 * Time: 12:42 PM
 */

namespace AppBundle\Form\Events;


use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CheckinCheckoutType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
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