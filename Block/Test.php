<?php

namespace Likipe\PrivateContent\Block;

class Test extends \Magento\Framework\View\Element\Template
{
    protected $helper;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Likipe\PrivateContent\Helper\Data $helper,
        array $data = []
    )
    {
        $this->helper = $helper;
        parent::__construct($context, $data);
    }
}
