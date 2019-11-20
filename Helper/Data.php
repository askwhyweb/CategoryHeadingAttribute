<?php

namespace OrviSoft\CategoryHeading\Helper;
use Magento\Framework\App\Helper\AbstractHelper;

class Data extends AbstractHelper
{
    protected $_registry;
    
    /**
     * @var \Magento\Catalog\Model\Category
     */
    protected $_category;

    /**
     * @param \Magento\Framework\App\Helper\Context $context
     */
    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Catalog\Model\Category $category
    ) {
        parent::__construct($context);
        $this->_registry = $registry;
        $this->_category = $category;
    }

    function getCategory(){
        $cat = $this->_registry->registry('current_category');
        if($cat){
            return $this->_category->load($cat->getId());
        }
        return false;
    }
}