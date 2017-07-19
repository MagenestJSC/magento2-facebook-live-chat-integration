<?php
/**
 * Created by PhpStorm.
 * User: nguyenhoang
 * Date: 13/05/2017
 * Time: 09:40
 */
namespace Magenest\FacebookSupportLive\Model\ResourceModel;

/**
 * Class UserData
 * @package Magenest\FacebookSupportLive\Model\ResourceModel
 */
class UserData extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('magenest_userdata', 'user_id');
    }
}
