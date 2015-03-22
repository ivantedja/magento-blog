<?php

class Tedja_Fruit_Adminhtml_FruitController extends Mage_Adminhtml_Controller_Action
{
    /**
     * Index action.
     *
     * @return void
     */
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }
}
