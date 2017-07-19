<?php
/**
 * Created by PhpStorm.
 * User: nguyenhoang
 * Date: 20/05/2017
 * Time: 08:36
 */

namespace Magenest\FacebookSupportLive\Model\ResourceModel;

class UserAge extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('magenest_userage', 'age_id');
    }
}
