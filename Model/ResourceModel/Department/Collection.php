<?php


namespace AHT\Portfolio\Model\ResourceModel\Department;


use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init('AHT\Portfolio\Model\Department','AHT\Portfolio\Model\ResourceModel\Department');
    }
}
