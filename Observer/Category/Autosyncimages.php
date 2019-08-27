<?php

namespace Qxd\Test\Observer\Category;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\App\Request\DataPersistorInterface;
use Magento\Framework\App\ObjectManager;
use Magento\Framework\Stdlib\DateTime\DateTime;
use Magento\Framework\App\Filesystem\DirectoryList;


class Autosyncimages implements ObserverInterface
{

    /*
    * Observer to upload new images to s3 for the category
    */

    public function execute(Observer $observer)
    {   

        $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/category_test.log');
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);
        $logger->info('Enter to category observer: test');

    }    
}

