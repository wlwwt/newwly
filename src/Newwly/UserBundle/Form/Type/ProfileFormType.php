<?php


namespace Newwly\UserBundle\Form\Type;


use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\ProfileFormType as BaseType;
use Newwly\UserBundle\Form\DataTransformer\StringToLowercaseTransformer;
use Symfony\Component\Security\Core\Validator\Constraint\UserPassword as OldUserPassword;
use Symfony\Component\Security\Core\Validator\Constraints\UserPassword;

class ProfileFormType extends BaseType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        
         if (class_exists('Symfony\Component\Security\Core\Validator\Constraints\UserPassword')) {
            $constraint = new UserPassword();
        } else {
            // Symfony 2.1 support with the old constraint class
            $constraint = new OldUserPassword();
        }
        
        $transformer = new StringToLowercaseTransformer();

        $this->buildUserForm($builder, $options);
        $builder
            ->remove('username')
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
            ->add(
                $builder->create('kindlemail', 'text', array(
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
                ))  ->resetViewTransformers()
                    ->addModelTransformer($transformer)
            )
            ->add('current_password', 'password', array(
                'label' => 'form.current_password',
                'label_attr' => array(
                    'class' => 'control-label'
                ),
                'translation_domain' => 'FOSUserBundle',
                'mapped' => false,
                'constraints' => $constraint,
                'attr' => array(
                    'class' => 'input-block-level',
                    'placeholder' => 'form.current_password',
                )
            ));
    }


    public function getName()
    {
        return 'newwly_user_profile';
    }
	
	//Reihe
	protected function buildUserForm(FormBuilderInterface $builder, array $options)
    {
		parent::buildUserForm($builder, $options);
		
		$builder
            ->add('kindlemail', 'kindlemail', array('label' => 'form.kindlemail', 'translation_domain' => 'FOSUserBundle'))
        ;
    }
}
