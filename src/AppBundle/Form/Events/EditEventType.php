<?php
/**
 * Created by PhpStorm.
 * User: mburakergenc
 * Date: 7/19/16
 * Time: 12:20 PM
 */

namespace AppBundle\Form\Events;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EditEventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array(
                'required' => true,
            ))
            ->add('startDate', DateType::class, array(
                'required' => true,
                'widget'=>'single_text',
                'format'=>'MM/dd/yyyy',

            ))
            ->add('endDate', DateType::class, array(
                'required' => true,
                'widget'=>'single_text',
                'format'=>'MM/dd/yyyy',

            ))
            ->add('description', TextareaType::class, array(
                'required' => true,
            ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Event',
            'validation_groups' => array('edit'),
        ));
    }
}
