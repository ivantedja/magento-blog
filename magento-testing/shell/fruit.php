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
        $fruit = Mage::getModel('fruit/fruit');
        echo get_class($fruit) . "\n";
        $fruitResource = $fruit->getResource();
        echo get_class($fruitResource) . "\n";

        $data = array('name' => 'strawberry', 'color' => 'red');
        $fruit->addData($data)->save();
        echo "data successfully added\n";
    }
}

$shell = new Tedja_Shell_Fruit();
$shell->run();
