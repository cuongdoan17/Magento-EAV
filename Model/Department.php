<?php


namespace AHT\Portfolio\Model;


use Magento\Framework\Model\AbstractModel;

class Department extends AbstractModel
{
    protected function _construct()
    {
       $this->_init('AHT\Portfolio\Model\ResourceModel\Department');
    }
}
