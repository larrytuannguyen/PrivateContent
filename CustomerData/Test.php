<?php
namespace Likipe\PrivateContent\CustomerData;

use Magento\Customer\CustomerData\SectionSourceInterface;
use Magento\Framework\DataObject;

class Test extends DataObject implements SectionSourceInterface
{
    protected $helper;

    public function __construct(
        \Likipe\PrivateContent\Helper\Data $helper,
        array $data = []
    )
    {
        $this->helper = $helper;
        parent::__construct($data);
    }

    public function getSectionData()
    {

        $data = ['testnewdata' => $this->getTest()];

        return $data;
    }

    public function getTest()
    {
        return $this->helper->getTest();
    }
}
