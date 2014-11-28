<?php

namespace Application\Form;

use Zend\Form\Form;

class UserForm extends Form
{
    public function __construct($name = null)
    {
        parent::__construct('user');

        $this->add(array(
            'name' => 'id',
            'type' => 'hidden'
        ));

        $this->add(array(
            'name' => 'name',
            'type' => 'text',
            'options' => array(
                'label' => 'Name'
            )
        ));

        $this->add(array(
            'name' => 'password',
            'type' => 'text',
            'options' => array(
                'label' => 'Password'
            )
        ));

        $this->add(array(
            'name' => 'submit',
            'type' => 'Submit',
            'attributes' => array(
                'value' => 'submit',
                'id' => 'submit'
            )
        ));
    }
}