<?php

require_once 'abstract.php';

class Tedja_Shell_Fruit extends Mage_Shell_Abstract
{
    /**
     * Run script
     *
     */
    public function run()
    {
        $blockFruit = Mage::getSingleton('core/layout')->createBlock('fruit/adminhtml_fruit_grid');
        echo get_class($blockFruit) . "\n";
    }
}

$shell = new Tedja_Shell_Fruit();
$shell->run();
