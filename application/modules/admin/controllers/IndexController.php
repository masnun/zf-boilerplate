<?php

class Admin_IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $model = new Admin_Model_Hello;
        $this->view->hello = $model->hello();
    }

}

