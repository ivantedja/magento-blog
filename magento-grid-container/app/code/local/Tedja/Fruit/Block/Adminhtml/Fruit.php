<?php

class Tedja_Fruit_Block_Adminhtml_Fruit extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        // Important! Do not forget to define `$this->_blockGroup` for this example
        $this->_blockGroup = 'fruit';
        $this->_controller = 'adminhtml_fruit';
        $this->_headerText = 'Fruits';
        $this->_addButtonLabel = 'Create New Fruit';
        parent::__construct();

        $this->_addButton('custom_fruit', array(
            'label'     => 'Custom Fruit Button',
            'onclick'   => 'setLocation(\'' . $this->getFruitUrl() .'\')',
            'class'     => 'add'
        ));
    }

    public function getFruitUrl()
    {
        return $this->getUrl('*/*/custom_fruit');
    }
}
