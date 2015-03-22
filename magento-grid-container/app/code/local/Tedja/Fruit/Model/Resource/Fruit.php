<?php

class Tedja_Fruit_Model_Resource_Fruit extends Mage_Core_Model_Resource_Db_Abstract
{
    /**
     * Initialize resource model
     */
    protected function _construct()
    {
        $this->_init('fruit/fruit', 'fruit_id');
    }
}
