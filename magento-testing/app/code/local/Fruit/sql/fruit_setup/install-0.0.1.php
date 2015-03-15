<?php

/* @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;

$installer->startSetup();

/**
 * Create table 'fruit/fruit'
 */
$table = $installer->getConnection()
    ->newTable($installer->getTable('fruit/fruit'))
    ->addColumn('fruit_id', Varien_Db_Ddl_Table::TYPE_SMALLINT, null, array(
        'identity'  => true,
        'nullable'  => false,
        'primary'   => true,
        ), 'Fruit ID')
    ->addColumn('name', Varien_Db_Ddl_Table::TYPE_TEXT, 255, array(
        'nullable'  => false,
        ), 'Fruit Name')
    ->addColumn('color', Varien_Db_Ddl_Table::TYPE_TEXT, 255, array(
        'nullable'  => false,
        ), 'Fruit Color')
    ->setComment('Fruit');
$installer->getConnection()->createTable($table);

$installer->endSetup();
