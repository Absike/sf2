<?php

namespace Ens\JobeetBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Ens\JobeetBundle\Entity\Job;

class JobType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('category');
        $builder->add('type', 'choice', array('choices' => Job::getTypes(), 'expanded' => true));
        $builder->add('company');
        $builder->add('logo', null, array('label' => 'Company logo'));
        $builder->add('url');
        $builder->add('position');
        $builder->add('location');
        $builder->add('description');
        $builder->add('how_to_apply', null, array('label' => 'How to apply?'));
        $builder->add('is_public', null, array('label' => 'Public?'));
        $builder->add('email');
        
        $builder->add('file', 'file', array('label' => 'Company logo', 'required' => false));
    }

  

    public function getName()
    {
        return 'JOB';
    }
    
    
    
}
