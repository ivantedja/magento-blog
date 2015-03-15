<?php

class Tedja_Fruit_Model_Resource_Fruit_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    /**
     * Define resource model
     *
     */
    protected function _construct()
    {
        $this->_init('fruit/fruit');
    }
}
