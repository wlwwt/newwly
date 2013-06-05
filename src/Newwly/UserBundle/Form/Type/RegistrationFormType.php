<?php

namespace Newwly\UserBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class RegistrationFormType extends BaseType
{
    

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        // add your custom field
        $builder->add('kindlemail', null, array('invalid_message' => 'fos_user.password.mismatch'));
    }

    public function getName()
    {
        return 'newwly_user_registration';
    }
}
