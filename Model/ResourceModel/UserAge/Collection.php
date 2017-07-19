<?php
/**
 * Created by PhpStorm.
 * User: nguyenhoang
 * Date: 20/05/2017
 * Time: 08:37
 */
namespace Magenest\FacebookSupportLive\Model\ResourceModel\UserAge;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Magenest\FacebookSupportLive\Model\UserAge', 'Magenest\FacebookSupportLive\Model\ResourceModel\UserAge');
    }
}
