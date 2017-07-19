<?php
/**
 * Created by PhpStorm.
 * User: nguyenhoang
 * Date: 20/05/2017
 * Time: 08:35
 */

namespace Magenest\FacebookSupportLive\Model;

class UserLocation extends \Magento\Framework\Model\AbstractModel
{
    public function _construct()
    {
        $this-> _init('Magenest\FacebookSupportLive\Model\ResourceModel\UserLocation');
    }
}
