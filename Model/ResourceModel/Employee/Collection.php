<?php


namespace AHT\Portfolio\Model\ResourceModel\Employee;


class Collection extends Magento\Eav\Model\Entity\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('AHT\Portfolio\Model\Employee', 'AHT\Portfolio\Model\ResourceModel\Employee');
    }
}
