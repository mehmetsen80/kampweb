<?php
/**
 * Created by PhpStorm.
 * User: mburakergenc
 * Date: 4/28/16
 * Time: 3:36 PM
 */

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

/**
 * Class UserType
 * @package AppBundle\Form
 */
class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class, array(
                'mapped'=> False,
                'attr' => array(
                    'placeholder' => 'Your email address',
                )
            ))
            ->add('subject', TextType::class, array(
                'mapped'=> False,
                'attr' => array(
                    'placeholder' => 'The subject of your message.',
                    'pattern'     => '.{3,}' //minlength
                )
            ))
            ->add('message', TextareaType::class, array(
                    'mapped'=> False,
                    'attr' => array(
                        'cols' => 90,
                        'rows' => 10,
                        'placeholder' => 'And your message to me...'
                    )
                )
            );

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
        ));
    }

}
