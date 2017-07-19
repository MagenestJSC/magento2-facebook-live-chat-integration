<?php
/**
 * Created by PhpStorm.
 * User: nguyenhoang
 * Date: 12/05/2017
 * Time: 21:46
 */

namespace   Magenest\FacebookSupportLive\Controller\Index;

use Magento\Framework\App\Action\Context;

/**
 * Class User
 * @package Magenest\FacebookSupportLive\Controller\Index
 */
class User extends \Magento\Framework\App\Action\Action
{




    /**
     * User constructor.
     * @param Context $context
     */
    public function __construct(
        Context $context
    ) {
    
        parent::__construct($context);
    }

    /**
     * @param $user_email
     * @return bool
     */
    public function checkExist($user_email)
    {
        $collection = \Magento\Framework\App\ObjectManager::getInstance()
            ->create('Magenest\FacebookSupportLive\Model\UserData')->getCollection();

        foreach ($collection as $data) {
            if ($data->getUserEmail() == $user_email) {
                return false;
            }
        }
        return true;
    }

    /**
     * @param $user_age
     * @return int
     */
    public function checkExistAge($user_age)
    {
        $collection = \Magento\Framework\App\ObjectManager::getInstance()
            ->create('Magenest\FacebookSupportLive\Model\UserAge')->getCollection();

        foreach ($collection as $data) {
            if ($data->getUserAge() == $user_age) {
                return $data->getAgeId();
            }
        }
        return -1;
    }

    /**
     * @param $user_location
     * @return int
     */
    public function checkExistLocation($user_location)
    {
        $collection = \Magento\Framework\App\ObjectManager::getInstance()
            ->create('Magenest\FacebookSupportLive\Model\UserLocation')->getCollection();

        foreach ($collection as $data) {
            if ($data->getUserLocation() == $user_location) {
                return $data->getLocationId();
            }
        }
        return -1;
    }


    public function execute()
    {
        $collection =  $this->_objectManager->create('Magenest\FacebookSupportLive\Model\UserData');
        $collection_age =  $this->_objectManager->create('Magenest\FacebookSupportLive\Model\UserAge');
        $collection_location =  $this->_objectManager->create('Magenest\FacebookSupportLive\Model\UserLocation');
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($this->checkExist($_POST['email_user'])) {
                $collection->setUserName($_POST['name_user']);
                $collection->setUserEmail($_POST['email_user']);
                $collection->setUserBirthday($_POST['birthday_user']);
                $collection->setUserLocation($_POST['location_user']);
                $collection->setUserLinkfb($_POST['linkfb_user']);
                $collection->setUserAge($_POST['age_user']);
                $collection->save();

                if ($this->checkExistAge($_POST['age_user']) == -1) {
                    $collection_age->setUserAge($_POST['age_user']);
                    $collection_age->setTotal(1);
                    $collection_age->save();
                } else {
                    $age_id = $this->checkExistAge($_POST['age_user']);
                    $collection_age = $this->_objectManager->create('Magenest\FacebookSupportLive\Model\UserAge')->load($age_id, 'age_id');
                    $collection_age->setTotal($collection_age->getTotal() + 1);
                    $collection_age->save();
                }
                if ($this->checkExistLocation($_POST['location_user']) == -1) {
                    $collection_location->setUserLocation($_POST['location_user']);
                    $collection_location->setTotal(1);
                    $collection_location->save();
                } else {
                    $location_id = $this->checkExistLocation($_POST['location_user']);
                    $collection_location = $this->_objectManager->create('Magenest\FacebookSupportLive\Model\UserLocation')->load($location_id, 'location_id');
                    $collection_location->setTotal($collection_location->getTotal() + 1);
                    $collection_location->save();
                }
            }
        }
    }
}
