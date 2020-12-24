<?php


namespace AHT\Portfolio\Model\ResourceModel;


class Employee extends \Magento\Eav\Model\Entity\AbstractEntity
{
    protected function _construct()
    {
        $this->connectionName  = 'department';
    }

    public function getEntityType()
    {
        if (empty($this->_type)) {
            $this->setType(\AHT\Portfolio\Model\Employee::ENTITY);
        }
        return parent::getEntityType();
    }
}
