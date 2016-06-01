<?php
/**
 * Created by PhpStorm.
 * User: mburakergenc
 * Date: 5/10/16
 * Time: 11:45 AM
 */

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class PasswordResetType
 * @package AppBundle\Form
 */
class ChangePasswordType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('oldPassword', PasswordType::class);
        $builder->add('newpassword', RepeatedType::class, array(
        'type' => PasswordType::class,
        'required'=>true,
        'mapped'=>false,
        'first_options'  => array('label' => 'Password', 'error_bubbling' => true),
        'second_options' => array('label' => 'Repeat Password'),
        'invalid_message' => 'The password fields must match.',
    ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([

        ]);
    }
}