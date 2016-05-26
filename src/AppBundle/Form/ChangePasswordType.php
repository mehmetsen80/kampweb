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
        $builder->add('plainPassword', RepeatedType::class, [
            'type' => PasswordType::CLASS,
            'first_options' => ['label' => 'password.reset.label.password'],
            'second_options' => ['label' => 'password.reset.label.password_repeat'],
            'invalid_message' => 'password.mismatch',
            'required' => false,
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'validation_groups' => 'password_reset',
            'data_class' => 'AppBundle\Entity\User',
        ]);
    }
}