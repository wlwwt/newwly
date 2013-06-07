<?php

namespace Newwly\UserBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class RegistrationFormType extends BaseType
{
    

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', 'text', array(
                'label' => 'form.username',
                'label_attr' => array(
                    'class' => 'control-label'
                ),
                'translation_domain' => 'FOSUserBundle',
                'attr' => array(
                    'class' => 'input-block-level',
                    'placeholder' => 'form.username',
                    )
                ))
            ->add('email', 'email', array(
                'label' => 'form.email', 
                'label_attr' => array(
                    'class' => 'control-label'
                ),
                'translation_domain' => 'FOSUserBundle',
                'attr' => array(
                    'class' => 'input-block-level',
                    'placeholder' => 'form.email',
                    )
                ))
            ->add('plainPassword', 'repeated', array(
                'type' => 'password',
                'options' => array(
                    'translation_domain' => 'FOSUserBundle',
                ),
                'first_options' => array(
                    'label' => 'form.password',
                    'label_attr' => array(
                        'class' => 'control-label'
                    ),
                    'attr' => array(
                        'class' => 'input-block-level',
                        'placeholder' => 'form.password',
                    )),
                'second_options' => array(
                    'label' => 'form.password_confirmation',
                    'label_attr' => array(
                        'class' => 'control-label'
                    ),
                    'attr' => array(
                        'class' => 'input-block-level',
                        'placeholder' => 'form.password_confirmation',
                    )),
                'invalid_message' => 'fos_user.password.mismatch',
            ))
            ->add('kindlemail', 'text', array(
                'translation_domain' => 'FOSUserBundle',
                'label' => 'form.kindlemail',
                'label_attr' => array(
                    'class' => 'control-label'
                ),
                'invalid_message' => 'fos_user.password.mismatch',
                'attr' => array(
                    'class' => 'input-block-level',
                    'placeholder' => 'form.kindlemail',
                    )
                ))
        ;
    }

    public function getName()
    {
        return 'newwly_user_registration';
    }
}
