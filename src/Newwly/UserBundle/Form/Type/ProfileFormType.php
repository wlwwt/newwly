<?php


namespace Newwly\UserBundle\Form\Type;


use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\ProfileFormType as BaseType;

class ProfileFormType extends BaseType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       parent::buildForm($builder, $options);

        // add your custom field
        $builder->add('kindlemail');
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
