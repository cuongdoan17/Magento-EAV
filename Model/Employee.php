<?php


namespace AHT\Portfolio\Model;


use Magento\Framework\Model\AbstractModel;

class Employee extends AbstractModel
{
    const ENTITY = 'aht_employee';

    protected function _construct()
    {
       $this->_init('AHT\Portfolio\Model\ResourceModel\Employee');
    }
}
