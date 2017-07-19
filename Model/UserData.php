<?php
/**
 * Created by PhpStorm.
 * User: nguyenhoang
 * Date: 13/05/2017
 * Time: 09:39
 */

namespace Magenest\FacebookSupportLive\Model;

/**
 * Class UserData
 * @package Magenest\FacebookSupportLive\Model
 */
class UserData extends \Magento\Framework\Model\AbstractModel
{
    public function _construct()
    {
        $this-> _init('Magenest\FacebookSupportLive\Model\ResourceModel\UserData');
    }
}
