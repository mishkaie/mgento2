<?php
namespace Dev\ProductComments\Model;

use Magento\Framework\Model\AbstractExtensibleModel;
use Dev\ProductComments\Model\ResourceModel\Comment as ResourceModel;

class Comment extends AbstractExtensibleModel
{
    public function _construct()
    {
        $this->_init(ResourceModel::class);
    }
}
