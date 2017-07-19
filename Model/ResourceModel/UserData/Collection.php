<?php
/**
 * Created by PhpStorm.
 * User: nguyenhoang
 * Date: 13/05/2017
 * Time: 09:41
 */

namespace Magenest\FacebookSupportLive\Model\ResourceModel\UserData;

/**
 * Class Collection
 * @package Magenest\FacebookSupportLive\Model\ResourceModel\UserData
 */
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Magenest\FacebookSupportLive\Model\UserData', 'Magenest\FacebookSupportLive\Model\ResourceModel\UserData');
    }
}
