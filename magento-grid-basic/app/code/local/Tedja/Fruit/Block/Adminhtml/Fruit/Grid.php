<?php

class Tedja_Fruit_Block_Adminhtml_Fruit_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    /**
     * Retrieve collection class
     *
     * @return string
     */
    protected function _getCollectionClass()
    {
        return 'fruit/fruit_collection';
    }

    protected function _prepareCollection()
    {
        $collection = Mage::getResourceModel($this->_getCollectionClass());
        $this->setCollection($collection);
        return parent::_prepareCollection();
    }

    protected function _prepareColumns()
    {

        $this->addColumn('fruit_id', array(
            'header'=> 'Fruit ID',
            'index' => 'fruit_id',
        ));

        $this->addColumn('name', array(
            'header' => 'Fruit Name',
            'index' => 'name',
        ));

        $this->addColumn('color', array(
            'header' => 'Fruit Color',
            'index' => 'color',
        ));

        return parent::_prepareColumns();
    }
}
