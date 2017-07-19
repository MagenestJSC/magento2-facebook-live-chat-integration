<?php
/**
 * Created by PhpStorm.
 * User: nguyenhoang
 * Date: 06/05/2017
 * Time: 13:48
 */
namespace Magenest\FacebookSupportLive\Model\Config;

/**
 * Class EnableChatbox
 * @package Magenest\FacebookSupportLive\Model\Config
 */
class EnableChatbox implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
        // TODO: Implement toOptionArray() method.
        return [
            [
                'value' => 'no',
                'label' => 'No',
            ],
            [
                'value' => 'yes',
                'label' => 'Yes',
            ],
        ];
    }
}
