<?php


namespace AHT\Portfolio\Setup;


use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class UpgradeData implements UpgradeDataInterface
{
    protected $departmentFactory;
    protected $employeeFactory;

    public function __construct(
        \AHT\Portfolio\Model\DepartmentFactory $departmentFactory,
        \AHT\Portfolio\Model\EmployeeFactory $employeeFactory
    )
    {
        $this->departmentFactory = $departmentFactory;
        $this->employeeFactory = $employeeFactory;
    }

    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        if (version_compare($context->getVersion(), '1.2.0', '<')) {
            $salesDepartment = $this->departmentFactory->create();
            $salesDepartment->setName('Sales');
            $salesDepartment->save();

            $employee = $this->employeeFactory->create();
            $employee->setDepartmentId($salesDepartment->getId());
            $employee->setEmail('jyu@dummy.com');
            $employee->setFirstName('Jeff');
            $employee->setLastName('Yu');
            $employee->setServiceYears(3);
            $employee->setDob('1999-01-01');
            $employee->setSalary('5400.00');
            $employee->setVatNumber('GB12345678');
            $employee->setNote('Just some notes to Jeff');
            $employee->save();

            $setup->endSetup();
        }
    }
}
