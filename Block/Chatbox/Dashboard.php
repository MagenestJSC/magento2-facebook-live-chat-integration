<?php
/**
 * Created by PhpStorm.
 * User: nguyenhoang
 * Date: 20/05/2017
 * Time: 07:47
 */
namespace Magenest\FacebookSupportLive\Block\Chatbox;

class Dashboard extends \Magento\Backend\Block\Template
{
    /**
     * @var \Magenest\FacebookSupportLive\Model\UserAgeFactory
     */
    protected $_userAgeFactory;
    /**
     * @var \Magenest\FacebookSupportLive\Model\UserLocationFactory
     */
    protected $_userLocationFactory;

    /**
     * Dashboard constructor.
     * @param \Magento\Backend\Block\Template\Context $context
     * @param \Magenest\FacebookSupportLive\Model\UserAgeFactory $userAgeFactory
     * @param \Magenest\FacebookSupportLive\Model\UserLocationFactory $userLocationFactory
     * @param array $data
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magenest\FacebookSupportLive\Model\UserAgeFactory $userAgeFactory,
        \Magenest\FacebookSupportLive\Model\UserLocationFactory $userLocationFactory,
        array $data = []
    ) {
        $this->_userAgeFactory = $userAgeFactory;
        $this->_userLocationFactory = $userLocationFactory;
        parent::__construct($context, $data);
    }

    /**
     * @return array
     */
    public function getUserAge()
    {
        return $this->_userAgeFactory->create()->getCollection()->getData();
    }

    /**
     * @return array
     */
    public function getUserLocation()
    {
        return $this->_userLocationFactory->create()->getCollection()->getData();
    }

    /**
     * @return mixed
     */
    public function getStatUserAge()
    {
        $ageData = [];

        $datas = $this->getUserAge();

        foreach ($datas as $data) {
            $ageData[] = [$data['user_age'], (int)$data['total']];
        }

        return $this->getArrayJs($ageData);
    }

    /**
     * @return mixed
     */
    public function getStatUserLocation()
    {
        $locationData = [];
        $datas = $this->getUserLocation();

        foreach ($datas as $data) {
            $locationData[] = [$data['user_location'], (int)$data['total']];
        }

        return $this->getArrayJs($locationData);
    }

    /**
     * @param $string
     * @return mixed
     */
    public function getArrayJs($string)
    {
        $data = json_encode($string);

        $convert1 = str_replace("\"", "\'", $data);

        $convert2 = str_replace("\\", "", $convert1);

        return $convert2;
    }
}
