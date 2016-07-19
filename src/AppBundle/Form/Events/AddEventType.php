<?php
/**
 * Created by PhpStorm.
 * User: mburakergenc
 * Date: 7/15/16
 * Time: 10:49 AM
 */

namespace AppBundle\Form\Events;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddEventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array(
                'required'=>true,
            ))
            ->add('startDate', DateType::class, array(
                'widget'=>'single_text',
                'format'=>'MM/dd/yyyy',
                'required'=>true,

            ))
            ->add('endDate', DateType::class, array(
                'widget'=>'single_text',
                'format'=>'MM/dd/yyyy',
                'required'=>true,

            ))
            ->add('description', TextareaType::class, array(
                'required'=>true,
            )
            );
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Event'
        ));
    }

}