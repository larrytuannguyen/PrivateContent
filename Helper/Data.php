<?php
namespace Likipe\PrivateContent\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;

class Data extends AbstractHelper
{
    protected $customerSession;

    public function __construct(
        Context $context,
        \Magento\Customer\Model\Session $customerSession
    )
    {
        $this->customerSession = $customerSession;
        parent::__construct($context);
    }

    public function getTest() {
        return "Customer Email Test 1:" . $this->customerSession->getCustomer()->getEmail();
    }
}